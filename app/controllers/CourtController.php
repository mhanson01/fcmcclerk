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

	/**
	 * Display Judges
	 *
	 * @return response
	 */
	public function judges()
	{
		return View::make('court.judges');
	}

	/**
	 * Display Judges
	 *
	 * @return response
	 */
	public function showJudge($name)
	{
		$view = 'court.judges.' . $name;

		if ( ! View::exists($view))
		{
			App::abort(404);
		}

		return View::make($view);
	}

}
