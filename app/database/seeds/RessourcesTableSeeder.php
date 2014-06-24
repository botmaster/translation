<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RessourcesTableSeeder extends Seeder {

	public function run()
	{
		/*$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Ressource::create([

			]);
		}*/

		/*<string name="yes">Oui</string>
		<string name="no">Non</string>
		<string name="leave">Quitter l'application ?</string>
		<string name="ok">OK</string>
		<string name="cancel">Annuler</string>
		<string name="confirm">Confirmer</string>
		<string name="delete">Supprimer</string>
		<string name="done">Terminé</string>
		<string name="agree">Accepter</string>
		<string name="submit">Valider</string>*/

		$ressource1 = Ressource::create([
			'ressource_name' => 'confirm',
			'project_id' => '1'
		]);

		$ressource2 = Ressource::create([
			'ressource_name' => 'delete',
			'project_id' => '1'
		]);

		$ressource3 = Ressource::create([
			'ressource_name' => 'done',
			'project_id' => '1'
		]);

		$rt = RessourceTranslation::create([
			'ressource_id' => $ressource1->id,
			'value' => 'Confirm',
			'locale' => 'en'
		]);

		$rt = RessourceTranslation::create([
			'ressource_id' => $ressource2->id,
			'value' => 'Delete',
			'locale' => 'en'
		]);

		$rt = RessourceTranslation::create([
			'ressource_id' => $ressource3->id,
			'value' => 'Done',
			'locale' => 'en'
		]);

		$rt = RessourceTranslation::create([
			'ressource_id' => $ressource1->id,
			'value' => 'Confirmer',
			'locale' => 'fr'
		]);

		$rt = RessourceTranslation::create([
			'ressource_id' => $ressource2->id,
			'value' => 'Supprimer',
			'locale' => 'fr'
		]);

		$rt = RessourceTranslation::create([
			'ressource_id' => $ressource3->id,
			'value' => 'Terminé',
			'locale' => 'fr'
		]);


	}

}