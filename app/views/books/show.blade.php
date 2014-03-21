@extends('layouts.master')

@section('title')
	{{{ $book->title }}}
@stop

@section('content')

<h2>by {{ $book->author->name }}</h2>

<p>
{{{ $book->description }}}
</p>

<h3>Tags</h3>
<p>
{{{ $book->taglist ?: 'none' }}}
</p>


{{ link_to_route('books.edit', 'Edit', $book->id) }}<br>

{{ Form::open( array('route'=> array('books.destroy', $book->id), 'method'=>'delete') ) }}
{{ Form::submit('Delete') }}
{{ Form::close() }}

@stop
