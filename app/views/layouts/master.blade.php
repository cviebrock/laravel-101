<html>
	<head>
	<style type="text/css">
		* { box-sizing: border-box; }
		div { padding: 1em; font-size: 200%; }
		.header { background: pink; }
		.sidebar { background: aqua; float: left; width: 20%; }
		.container { background: yellow; float: right; width: 80%; }
	</style>
	<body>
		@include('header')  {{-- app/views/header.blade.php --}}

		<div class="sidebar">
		@section('sidebar')
			This is the master sidebar.
		@show
		</div>

		<div class="container">
			@yield('content', 'Default content')
		</div>
	</body>
</html>