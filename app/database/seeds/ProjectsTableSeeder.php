<?php

use Faker\Factory as Faker;
use Faker\Provider as FakerProvider;

class ProjectsTableSeeder extends Seeder {


	public function run()
	{
		
		$faker = Faker::create();
		$faker->addProvider(new FakerProvider\fr_FR\Company($faker));


		foreach(range(1, 50) as $index)
		{
			Project::create([
				'name' => $faker->company,
				'description' => $faker->text
			]);
		}
		
	}

}