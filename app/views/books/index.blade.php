@extends('layouts.master')

@section('title')
	All Books
@stop

@section('content')
<ul>
@foreach($books as $book)
	<li>
		{{{ $book->title }}},
		by {{{ $book->author->name }}}
	</li>
@endforeach
</ul>
@stop
