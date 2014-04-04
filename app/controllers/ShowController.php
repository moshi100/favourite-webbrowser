<?php

class ShowController extends BaseController {

    protected $post;

    public function __construct(Post $post)
    {
      	$this->post = new Post;
    }

    //Display statistic of browsers and table with all the posts order by browser and time
	public function index()
    {
        $posts = $this->post->orderBy('browser')
        					->orderBy('updated_at','desc')->get();
        $browsers = $this->getBrowsers($posts);
        return View::make('posts.show', compact('posts','browsers'));
    }

    //Counts statistic of browsers and return it as array[][]
    private function getBrowsers($posts)
    {
    	$browsers = new Browser;
       	foreach ($browsers->array as $key => $value)
        {
        	$postsByBrowser = $this->post->where('browser', '=', $key)->get();
        	$browsers->array[$key][1] = $postsByBrowser->count();
        	$browsers->array[$key][2] = (int)($postsByBrowser->count()*100/$posts->count());
        }
        return $browsers;
    }

}
