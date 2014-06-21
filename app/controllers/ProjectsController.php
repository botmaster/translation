<?php

class ProjectsController extends \BaseController {



	protected $project;

	public function __construct(Project $project)
	{
			$this->project = $project;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// La liste des projects.
		$projects = $this->project->all();

		// Les données passées à la vue.
		$data = array(	'projects_list' => $projects,
						'toto' => 'tutu');

		return View::make('pages.projects.project_list')->with('data', $data);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Les données du projet.
		$project = $this->project->find($id)->first();

		// Les ressources liéés.
		$ressources  = $project->ressources;


		$data = array('project' => $project);

		return View::make('pages.projects.project_show', $data);
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
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		// Les données du projet.
		$project = $this->project->find($id);
		return View::make('pages.projects.project_edit')->with('project', $project);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		
		$this->project->fill(Input::all());

		if (! $this->project->isValid()) {
			return Redirect::back()->withInput()->withErrors($this->project->errors);
		} else {
			// store
			/*$project = new Project;
			$project->name       	= Input::get('name');
			$project->description   = Input::get('description');
			$project->save();*/

			$this->project->save();

			// redirect
			Session::flash('message', 'Le projet à été correctement crée !');
			return Redirect::to('projects');
		}
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
		$project = $this->project->find($id);
		$project->name       		= Input::get('name');
		$project->description       = Input::get('description');
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
		$project = $this->project->find($id);
		$project->delete();

		// redirect
		Session::flash('message', 'Projet supprimé !');
		return Redirect::to('projects');
	}


}
