<html>
	<head>
	<title>
		@yield('title', 'Default title')
	</title>
	<style type="text/css">
		body { font-family: sans-serif; }
		ol { list-style: none; padding-left: 0; }
		li { margin-bottom: 0.5em; }
		label { display: block; }
		ul.errors { background-color: #c66; color: #fff; padding: 1em 1em 1em 2em; }
		.alert { background-color: #cfc; color: #060; padding: 1em; text-align: center; }
		.log { background-color: #eee; padding: 1em; }
		code { display: block; margin-top: 0.5em; white-space: normal; }
	</style>
	<body>

@if( $alert = Session::get('alert', null) )
	<div class="alert">
		{{ $alert }}
	</div>
@endif

		<h1>
			@yield('title', 'Default title')
		</h1>

		<div class="container">
			@yield('content', 'Default content')
		</div>

<pre class="log">
@foreach( DB::getQueryLog() as $query )
<code>{{{ $query['query'] }}}</code>
@endforeach
</pre>

	</body>
</html>