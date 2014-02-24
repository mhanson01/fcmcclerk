<?php

class CourtController extends BaseController implements AgencyInterface {

	/**
	 * Display overview of Court's Office
	 *
	 * @return response
	 */
	public function index()
	{
		return View::make('court.index');
	}

	/**
	 * Display department overview of Court's Office
	 *
	 * @return response
	 */
	public function departments()
	{
		return 'departments';
	}

	/**
	 * Display contact information of Court's Office
	 *
	 * @return response
	 */
	public function contact_us()
	{
		return 'contact us';
	}

	/**
	 * Display employment information of Court's Office
	 *
	 * @return response
	 */
	public function employment()
	{
		return 'employment';
	}

	/**
	 * Display Local Rules
	 *
	 * @return response
	 */
	public function localRules()
	{
		return 'localrules';
	}

}
