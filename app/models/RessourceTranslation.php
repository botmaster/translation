<?php

class RessourceTranslation extends \Eloquent {


	protected $fillable = ['value', 'locale'];


	public function ressources()
	{
		 return $this->belongsTo('Ressource');
	}

}