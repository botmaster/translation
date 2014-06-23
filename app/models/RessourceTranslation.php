<?php

class RessourceTranslation extends \Eloquent {


	protected $fillable = ['value', 'locale'];

	public $timestamps = false;


	public function ressources()
	{
		 return $this->belongsTo('Ressource');
	}

}