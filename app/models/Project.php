<?php
class Project extends Eloquent {

	// validate
	// read more on validation at http://laravel.com/docs/validation
	public $rules = array(
		'name' => 'required|unique:projects,name',
		'description' => 'required'
	);

	public $errors;

	protected $fillable = ['name', 'description'];

	public function isValid($editing = false)
	{
		// On est en édtion ?
		if($editing) {
			$this->rules['name'] = $this->rules['name'] . ',' . $this->id;
		}
		$validator = Validator::make($this->attributes, $this->rules);

		if($validator->passes()) return true;

		$this->errors = $validator->messages();

		return false;
	}


	public function ressources()
	{
		return $this->hasMany('Ressource');
	}

}