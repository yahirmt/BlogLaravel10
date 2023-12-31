<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proyecto web</title>
</head>
<body>
	<p>
		<a href="{{ route('home') }}">Home</a>
		<a href="{{ route('blog') }}">Blog</a>
		@auth
			<a href="{{ route('dashboard') }}">Das</a>
		@else
			<a href="{{ route('login') }}">login</a>	
		@endauth
	</p>

	<hr>
	
	@yield('content')
</body>
</html>