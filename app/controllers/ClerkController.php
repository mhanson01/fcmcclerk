<?php

class ClerkController extends BaseController implements AgencyInterface {

	public function index()
	{
		return 'index';
	}

	public function contact_us()
	{
		return 'contact us';
	}

	/**
	 * Display Clerk index
	 *
	 * @return response
	 */
	public function clerk()
	{
		return 'clerk';
	}

}
