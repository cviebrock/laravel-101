<?php

class BookController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = Cache::remember('all-books', 10, function()
		{
			return Book::with('author')
				->orderBy('title')
				->get();
		});

		return View::make('books.index', compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		// the lists() method on the collection will create an array suitable for
		// use in <select> tags: an array of all the author's names, indexed by
		// their "id" values.
		$authors = Author::all()->lists('name','id');

		return View::make('books.create', compact('authors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		$rules = array(
			'title'       => 'required|max:50',
			'description' => 'required',
			'author_id'   => 'required|exists:authors,id'
		);

		$validator = Validator::make($data,$rules);

		if ($validator->fails())
		{
			return Redirect::back()
				->withInput()
				->withErrors($validator);
		}

		$book = Book::create( $data );
		Cache::forget('all-books');

		return Redirect::route('books.index')
			->with('alert', 'Book created!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$book = Book::with('author','tags')->findOrFail($id);

		return View::make('books.show', compact('book'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$book = Book::findOrFail($id);

		$authors = Author::all()->lists('name','id');

		return View::make('books.edit', compact('book','authors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$book = Book::findOrFail($id);

		$data = Input::all();

		$rules = array(
			'title'       => 'required|max:50',
			'description' => 'required',
			'author_id'   => 'required|exists:authors,id'
		);

		$validator = Validator::make($data,$rules);

		if ($validator->fails())
		{
			return Redirect::back()
				->withInput()
				->withErrors($validator);
		}

		$book->update( $data );
		$book->save();
		Cache::forget('all-books');

		return Redirect::route('books.index')
			->with('alert', 'Book edited!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$book = Book::findOrFail($id);
		$book->delete();
		Cache::forget('all-books');

		return Redirect::route('books.index')
			->with('alert', 'Book deleted!');
	}

}