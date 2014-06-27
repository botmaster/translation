<?php

use Faker\Factory as Faker;
use Faker\Provider as FakerProvider;

class ProjectsTableSeeder extends Seeder {


	public function run()
	{
		
		$faker = Faker::create();
		$faker->addProvider(new FakerProvider\fr_FR\Company($faker));
		$faker->addProvider(new FakerProvider\fr_FR\Text($faker));


		foreach(range(1, 8) as $index)
		{
			Project::create([
				'name' => $faker->company,
				'description' => $faker->realText($maxNbChars = 200)
			]);
		}
		
	}

}