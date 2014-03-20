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
			'title'  => 'My First Post',
			'text'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
			'active' => true,
		)
	);

	echo $post;
});
