<?php

/**
* 
*/
class ProjectTest extends TestCase
{
	
	/*function __construct(argument)
	{
		# code...
	}*/


	public function testThatTrueIsTrue()
	{
	  $this->assertTrue(true);
	}


	/**
	 * Username is required
	 */
	/*public function testProjectNameIsRequired()
	{
	  // Create a new Project
		$project = new Project;
		//$project->name = "sdqs";
		$project->description = "Ma super déscription";

	  // project should not save
		$this->assertFalse($project->save());

	  // Save the errors
		$errors = $project->errors()->all();

	  // There should be 1 error
		$this->assertCount(1, $errors);

	  // The username error should be set
		$this->assertEquals($errors[0], "The username field is required.");
	}*/
}