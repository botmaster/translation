<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/**
	 * L'action de base.
	 */
	public function index()
	{
		
		//On affiche la liste des projets.
		return $this->showProjectsList();

	}


	/**
	 * Affiche la liste des projects.
	 * @return [type] [description]
	 */
	public function showProjectsList()
	{

		// On va sur l'url des projects.
		return Redirect::to('projects');
	}

}
