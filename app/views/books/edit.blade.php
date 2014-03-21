@extends('layouts.master')

@section('title')
	Edit a Book
@stop

@section('content')

{{ Form::model($book, array('route' => array('books.update', $book->id), 'method'=>'PUT') ) }}

<ol>

	<li>
		{{ Form::label('title') }}
		{{ Form::text('title')}}
	</li>

	<li>
		{{ Form::label('author_id', 'Author') }}
		{{ Form::select('author_id', $authors) }}
	</li>

	<li>
		{{ Form::label('description') }}
		{{ Form::textarea('description')}}
	</li>

</ol>

@if( $errors->any() )
<ul class="errors">
@foreach( $errors->all('<li>:message</li>') as $error )
	{{ $error }}
@endforeach
</ul>
@endif

{{ Form::submit() }}

{{ Form::close() }}

@stop
