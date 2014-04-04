<?php

class PostsController extends BaseController {

	protected $post;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	//Display form with list of all the browsers
	public function index()
	{
		$browser = new Browser;
		$browsers = $browser->arrayToPost();
		return View::make('posts.create',compact('browsers'));
	}

	//Add or update post and send an email 
	public function newPost()
	{
		$input = Input::all();

		$rules = array('name' => 'required|max:20', 'email' => 'required|email', 'browser' => 'required', 'reason' => 'required');
		$uniqueEmail = array('email' => 'unique:posts|email');

		$v = Validator::make($input, $rules);

		if($v->passes())
		{
			$post = new Post();
 			$post->name = e($input['name']);
			$post->email = e($input['email']);
			$post->browser = e($input['browser']);
			$post->reason = e($input['reason']);

			$v = Validator::make($input, $uniqueEmail);
 			if($v->passes())
 			{
 				$post->save();
 				$this->sendMail($post);
 			}
 			else
 			{
 				$this->update($post);
 			}
 			
			return Redirect::to('show');
		} else {
			return Redirect::to('post')->withInput()->withErrors($v);
		}
	}

	private function update($post)
    {
    	$array = $this->arrayValue($post);
        $post1 = $post->where('email', '=', $post->email);
        $post1->update($array);
    }

	private function sendMail($post)
	{
		$array = $this->arrayValue($post);
		Mail::send('posts.mail', $array, function($message){
			$message->to(Input::get('email'), Input::get('name'))->subject("Welcome");
		});
	}

	private function arrayValue($post)
    {
    	$array = array('name' => $post->name,
							'browser' => $post->browser,
							'reason' => $post->reason);
    	return $array;
    }



}