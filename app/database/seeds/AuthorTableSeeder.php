<?php

class AuthorTableSeeder extends Seeder {

		public function run()
		{
				DB::table('authors')->delete();

				Author::create(array(
					'id'         => 1,
					'first_name' => 'Herman',
					'last_name'  => 'Melville',
					'email'      => 'herman@pequod.net'
				));

				Author::create(array(
					'id'         => 2,
					'first_name' => 'William',
					'last_name'  => 'Shakespeare',
					'email'      => 'bard@theglobe.co.uk'
				));

				Author::create(array(
					'id'         => 3,
					'first_name' => 'Isaac',
					'last_name'  => 'Asimov',
					'email'      => 'outer@space.ca'
				));

				Author::create(array(
					'id'         => 4,
					'first_name' => 'Phillip',
					'last_name'  => 'Dick',
					'email'      => 'bladerunner@replicant.tv'
				));

		}

}