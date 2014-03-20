<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'Hello World!';
});


Route::get('hello/{name?}', 'HelloController@showWelcome');


Route::controller('users', 'UsersController');


Route::resource('posts', 'PostsController');


Route::get('test', function()
{
	return View::make('test');
});


Route::get('make-post', function()
{
	$post = Post::create(
		array(
			'title'  => 'my first post',
			'text'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'active' => true,
		)
	);

	return <<< EOB
	<h1>$post->title</h1>
	<p>$post->excerpt</p>
	<p>$post->text</p>
EOB;
});


Route::resource('books', 'BookController');