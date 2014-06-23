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
		$rt_list = array();
		$prev_locale = "";
		foreach (RessourceTranslation::all() as $key => $rt) {
			if($rt->locale != $prev_locale) {
				$prev_locale = $rt->locale;
				if(! in_array($rt, $rt_list)) {
					array_push($rt_list, $rt);
				}
			}
		}

		// Le conteneur de données passées à la vue.
		$data = array(	'ressources_list' => $ressources,
						'rt_list' => $rt_list);

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
		
		/*$resource = new Ressource();
		$resource->*/
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
		return View::make('pages.ressources.show')->with('ressource', $ressource);
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
		//
	}

}