<?php

class Ressource extends \Eloquent {

	//use \Dimsav\Translatable\Translatable;


	//public $translatedAttributes = array('value');
	

	// validate
	// read more on validation at http://laravel.com/docs/validation
	public static $rules = [
		'project_id' => 'required',
		'ressource_name' => 'required'
	];
	
	public $errors;

	protected $fillable = ['project_id', 'ressource_name'];


	public function isValid()
	{
		$validator = Validator::make($this->attributes, static::$rules);

		if($validator->passes()) return true;

		$this->errors = $validator->messages();

		return false;
	}

	public function project()
	{
		 return $this->belongsTo('Project');
	}


	public function ressourceTranslations()
	{
		return $this->hasMany('RessourceTranslation');
	}
}