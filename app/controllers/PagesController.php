<?php

class PagesController extends BaseController {

	/**
	 * Display the homepage
	 *
	 * @return response
	 */
	public function index()
	{
		return View::make('index');
	}

}
