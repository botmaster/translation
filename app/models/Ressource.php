<?php

class Ressource extends \Eloquent {

	use \Dimsav\Translatable\Translatable;


	public $translatedAttributes = array('value');

	protected $fillable = ['project_id', 'value', 'ressource_name'];



	public function projects()
	{
		 return $this->belongsTo('Projects');
	}


	public function ressourceTranslations()
	{
		return $this->hasMany('RessourceTranslations');
	}
}