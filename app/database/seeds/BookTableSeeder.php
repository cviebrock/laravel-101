<?php

class BookTableSeeder extends Seeder {

		public function run()
		{
				DB::table('books')->delete();

				Book::create(array(
					'id' => 1,
					'title' => 'Moby Dick',
					'author_id' => 1,
					'description' => 'An epic sea story of Captain Ahab\'s voyage in pursuit of Moby Dick, a great white whale.'
				));
				Book::create(array(
					'id' => 2,
					'title' => 'The Confidence-Man',
					'author_id' => 1,
					'description' => 'The interlocking stories of a group of steamboat passengers, as they travel down the Mississippi River toward New Orleans.'
				));

				Book::create(array(
					'id' => 3,
					'title' => 'Hamlet',
					'author_id' => 2,
					'description' => 'A Danish prince\'s indecion causes trouble for everyone, including his girlfriend who should have taken swimming lessons.'
				));
				Book::create(array(
					'id' => 4,
					'title' => 'A Midsummer Night\'s Dream',
					'author_id' => 2,
					'description' => 'A group of travelling actors meet two love-struck couples, and one of them makes an ass of themselves.'
				));
				Book::create(array(
					'id' => 5,
					'title' => 'Macbeth',
					'author_id' => 2,
					'description' => 'Driven to becoming King, Macbeth will kill all and any that get in his way.  Also, witches.'
				));

				Book::create(array(
					'id' => 6,
					'title' => 'I, Robot',
					'author_id' => 3,
					'description' => 'Short stories about the interaction of humans, robots, and morality'
				));

				Book::create(array(
					'id' => 7,
					'title' => 'Do Androids Dream of Electric Sheep?',
					'author_id' => 4,
					'description' => 'A bounty hunter polices the local android population.'
				));
				Book::create(array(
					'id' => 8,
					'title' => 'A Scanner Darkly',
					'author_id' => 4,
					'description' => 'An undercover police detective begins to lose touch with reality after falling victim to a mind-altering drug.'
				));
				Book::create(array(
					'id' => 9,
					'title' => 'The Minority Report',
					'author_id' => 4,
					'description' => 'The story of a society where murders are prevented through the efforts of three mutants who can see the future.'
				));
		}

}