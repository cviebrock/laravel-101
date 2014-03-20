<?php

class TagTableSeeder extends Seeder {

		public function run()
		{
				DB::table('tags')->delete();
				DB::table('book_tag')->delete();

				$tag = Tag::create(array(
					'name' => 'fiction',
				));
				$tag->books()->sync(array(1,2,3,4,5,6,7,8,9));

				$tag = Tag::create(array(
					'name' => 'science-fiction',
				));
				$tag->books()->sync(array(6,7,8,9));

				$tag = Tag::create(array(
					'name' => 'fantasy',
				));
				$tag->books()->sync(array(4,5,7));

				$tag = Tag::create(array(
					'name' => 'mystery',
				));
				$tag->books()->sync(array(5,7,8));

		}

}