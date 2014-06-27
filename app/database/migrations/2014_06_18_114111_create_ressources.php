<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//TODO: sortir la migration 'locals' dans un fichier de migration.

class CreateRessources extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{


		Schema::create('ressources', function(Blueprint $table)
		{
			$table->increments('id');
		    $table->integer('project_id')->unsigned()->index();
		    $table->string('ressource_name');
		    $table->unique(['project_id','ressource_name']);
		    $table->timestamps();
		    $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
		});

		Schema::create('ressource_translations', function(Blueprint $table)
		{
			$table->increments('id');
		    $table->integer('ressource_id')->unsigned()->index();
	        $table->string('value');
	        $table->string('locale')->index();
	        $table->timestamps();

		    $table->unique(['ressource_id','locale']);
		    $table->foreign('ressource_id')->references('id')->on('ressources')->onDelete('cascade');
		    
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//TODO: Voir comment supprimer la relation avec ressource_id;
		//foreign('ressource_id')->references('id')->on('ressources')->onDelete('cascade');
		Schema::drop('ressource_translations');
		Schema::drop('ressources');
	}

}
