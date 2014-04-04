<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Favourite Webbrowser</title>
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/surface.jquery.js') }}
	{{ HTML::script('js/jquery.validate.js') }}
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap-theme.css') }}
	{{ HTML::style('css/style.css') }}
</head>
<body>
<div class="row-fluid">
	<div class="col-md-12 well">
		<h1>Favourite Webbrowser</h1>
	</div>
</div>
<div class="row-fluid">
	<div class="col-md-3">
		<ul class="nav nav-list well">
			<li>{{ HTML::link('/', 'Home') }}</li>
			<li>{{ HTML::link('post', 'Add Post') }}</li>
			<li>{{ HTML::link('show', 'Statistics') }}</li>
		</ul>
	</div>
	<div class="col-md-9">
		@yield('content')
	</div>
</div>
</body>
</html>