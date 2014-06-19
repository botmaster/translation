<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		

		// La liste des projects.
		$projects = Project::all();

		// Le conteneur de données passées à la vue.
		$data = array(	'projects_list' => $projects,
						'toto' => 'tutu');

		return View::make('pages.projects.project_list')->with('data', $data);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// On affiche la vue de création de projets.
		return View::make('pages.projects.project_create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'description'      => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('projects/create')->withErrors($validator);
		} else {
			// store
			$project = new Project;
			$project->name       		= Input::get('name');
			$project->description      = Input::get('description');
			$project->save();

			// redirect
			Session::flash('message', 'Le projet à été correctement crée !');
			return Redirect::to('projects');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_project)
	{

		return "Voir le projet " . Project::find($id_project)->name;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		// Les données du projet.
		$project = Project::find($id);
		return View::make('pages.projects.project_edit')->with('project', $project);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'       => 'required',
			'description'      => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// store
		$project = Project::find($id);
		$project->name       		= Input::get('name');
		$project->description      = Input::get('description');
		$project->save();

		// redirect
		Session::flash('message', 'Projet mis à jour !');
		return Redirect::to('projects');
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$project = Project::find($id);
		$project->delete();

		// redirect
		Session::flash('message', 'Projet supprimé !');
		return Redirect::to('projects');
	}


}
