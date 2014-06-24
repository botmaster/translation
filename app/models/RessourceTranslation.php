<?php

class RessourceTranslation extends \Eloquent {

	// validate
	// read more on validation at http://laravel.com/docs/validation
	public static $rules = [
/*		'ressource_id' => 'required',*/
		'value' => 'required',
		'locale' => 'required'
	];

	protected $fillable = ['value', 'locale'];

	public $timestamps = false;

	public function isValid()
	{
		$validator = Validator::make($this->attributes, static::$rules);

		if($validator->passes()) return true;

		$this->errors = $validator->messages();

		return false;
	}


	public function ressources()
	{
		 return $this->belongsTo('Ressource');
	}

	public function getLocalesUniqueList()
	{
		$rt_list = $this->all();
		$rt_list_unique = array();
		foreach ($rt_list as $obj) {
		    $rt_list_unique[$obj->locale] = $obj;
		}
		return $rt_list_unique;
	}

}