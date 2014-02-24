<?php

class CourtController extends BaseController implements AgencyInterface {

	public function index()
	{
		return 'index';
	}

	public function contact_us()
	{
		return 'contact us';
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
