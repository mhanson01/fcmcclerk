<?php

/**
 * Implementations by ClerkController and CourtController for
 * dispalying
 */

interface AgencyInterface {

	/**
	 * Display overview of Office
	 *
	 * @return response
	 */
	public function index();

	/**
	 * Display department overview of Office
	 *
	 * @return response
	 */
	public function departments();

	/**
	 * Display contact information of Office
	 *
	 * @return response
	 */
	public function contact_us();

	/**
	 * Display employment information of Office
	 *
	 * @return response
	 */
	public function employment();

}
