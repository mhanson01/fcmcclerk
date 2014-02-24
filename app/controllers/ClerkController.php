<?php

class ClerkController extends BaseController implements AgencyInterface {

	/**
	 * Display overview of Clerk's Office
	 *
	 * @return response
	 */
	public function index()
	{
		return 'index';
	}

	/**
	 * Display department overview of Clerk's Office
	 *
	 * @return response
	 */
	public function departments()
	{
		return 'departments';
	}

	/**
	 * Display contact information of Clerk's Office
	 *
	 * @return response
	 */
	public function contact_us()
	{
		return 'contact us';
	}

	/**
	 * Display employment information of Clerk's Office
	 *
	 * @return response
	 */
	public function employment()
	{
		return 'employment';
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
