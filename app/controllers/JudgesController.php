<?php

class JudgesController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('court.judges');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{
        $view = 'court.judges.' . $name;

        if ( ! View::exists($view))
        {
            App::abort(404);
        }

        return View::make($view);
	}

}
