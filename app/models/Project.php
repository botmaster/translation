<?php
class Project extends Eloquent {

	// validate
	// read more on validation at http://laravel.com/docs/validation
	public static $rules = [
		'name' => 'required',
		'description' => 'required'
	];


	public $errors;

	protected $fillable = ['name', 'description'];


	public function isValid()
	{
		$validator = Validator::make($this->attributes, static::$rules);

		if($validator->passes()) return true;

		$this->errors = $validator->messages();

		return false;
	}

}