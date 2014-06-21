<?php

class RessourceTranslation extends \Eloquent {


	protected $fillable = ['value'];


	public function ressources()
	{
		 return $this->belongsTo('Ressource');
	}

}