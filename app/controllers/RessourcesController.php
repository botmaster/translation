<?php

class RessourcesController extends \BaseController {


	/**
	 * La ref injectée du model Ressource
	 * @var [type]
	 */
	protected $ressource;


	/**
	 * Le constructeur.
	 * @param Ressource $ressource Le modèle infecté.
	 */
	public function __construct(Ressource $ressource)
	{
		// On stocke le modèle.
		$this->ressource = $ressource;
	}


	/**
	 * Display a listing of the resource.
	 * GET /ressources
	 *
	 * @return Response
	 */
	public function index()
	{
		// La liste des projects.
		$ressources = $this->ressource->all();

		// On récupère les valeurs possibles de la locale.
		$rt_list = RessourceTranslation::all();
		$rt_list_unique = array();
		foreach ($rt_list as $obj) {
		    $rt_list_unique[$obj->locale] = $obj;
		}

		// Le conteneur de données passées à la vue.
		$data = array('ressources_list' => $ressources,
			'rt_list' => $rt_list_unique);

		return View::make('pages.ressources.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ressources/create
	 *
	 * @return Response
	 */
	public function create()
	{
		// On récupère la liste des projets.
		$projects_list = Project::all()->lists('name', 'id');
		//dd($projects_list);

		// On affiche la vue de création de ressources.
		return View::make('pages.ressources.create')->with('projects_list', $projects_list);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ressources
	 *
	 * @return Response
	 */
	public function store()
	{
		//TODO: validate.

		// On rempli les modèles avec le contenu du formulaire.
		$ressource = $this->ressource;
		$ressource->fill(Input::all());

		$rt = new RessourceTranslation();
		$rt->fill(Input::all());


		// On valide que les données remplis sont bonnes.
		if (! $this->ressource->isValid()) {
			return Redirect::back()->withInput()->withErrors($this->ressource->errors);
		} else if (! $rt->isValid()) {
			return Redirect::back()->withInput()->withErrors($rt->errors);
		} else {
			
			// Tout va bien, on enregistre tout.
			DB::beginTransaction(); //Start transaction!

			try{
			   	// On enregistre la ressource.
				$ressource->save();

				// On lui passe la traduction.
				$ressource->ressourceTranslations()->save($rt);
			}
			catch(\Exception $e)
			{
			  //failed logic here
				DB::rollback();
				throw $e;
			}

			DB::commit();

			Session::flash('message', 'La ressource à été crée !');
			return Redirect::to('ressources');
		}
		
		
	}

	/**
	 * Display the specified resource.
	 * GET /ressources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Les données du projet.
		$ressource = $this->ressource->find($id);

		$data = array('ressource' => $ressource);

		return View::make('pages.ressources.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ressources/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Les données de la ressource.
		$ressource = $this->ressource->find($id);
		return View::make('pages.ressources.edit')->with('ressource', $ressource);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ressources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ressources/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$ressource = $this->ressource->find($id);
		$ressource->delete();

		// redirect
		Session::flash('message', 'Ressource supprimé !');
		return Redirect::to('ressources');
	}

}