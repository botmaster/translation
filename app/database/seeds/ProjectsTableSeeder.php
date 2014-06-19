<?php

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('projects')->insert(

			array(
				array(
					'name' => 'Roche - Gluci-chek',
					'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, illum.'
					),

				array(
					'name' => 'Petzl - Sell-in',
					'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, illum.'
					),

				array(
					'name' => 'Mon client - Mon projet',
					'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, illum.'
					),

				array(
					'name' => 'Mon super client - Mon super projet',
					'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, illum.'
					)
			)

		);
	}

}