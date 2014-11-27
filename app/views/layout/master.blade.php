<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ isset($pageTitle) ?: Setting::get('app_name') }} | Cachet</title>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="http://james-brooks.uk">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ elixir('css/application.css') }}">
</head>
<body>
	<div class='container'>
	@yield('content')
	</div>
</body>
</html>
