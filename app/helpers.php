<?php

/*
|--------------------------------------------------------------------------
| FCMC helper functions
|--------------------------------------------------------------------------
|
| Common file for miscellaneous helper functions
|
*/

/**
 * Return Base Title to be appended to title tag
 *
 * @return string
 */
function base_title()
{
	// check to see if the request is for a Court specific page
	if ( Request::is('court*') )
	{
		// return shortened Base Title without the Clerk's name
		return 'FCMC';
	}

	// return full base title for all other requests
	return 'FCMC Clerk ' . Config::get('fcmc.clerk_full_name');
}
