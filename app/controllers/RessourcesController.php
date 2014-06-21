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
		$ressource = $this->ressource->all();

		// Le conteneur de données passées à la vue.
		$data = array(	'ressources_list' => $ressource,
						'toto' => 'tutu');

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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ressources
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		// Les données de la ressource.
		$ressource = $this->ressource->find($id);
		return View::make('pages.ressources.show')->with('ressource', $ressource);
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
		//
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