<?php

class HomeController extends BaseController {

	protected $post;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function index()
	{
		return View::make('posts.index');
	}

}