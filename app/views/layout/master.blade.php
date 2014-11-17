<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cachet</title>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="http://james-brooks.uk">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<style type='text/css'>
	body {
		color: #333333;
	}
	.masthead-container {
		margin: 0 auto;
	}
	.masthead-container .masthead {
		position: relative;
		margin-bottom: 70px;
	}
	.masthead-container .masthead .text-container {
		background-color: rgba(0,0,0,0.8);
		position: absolute;
		bottom: 0px;
		left: 0px;
		right: 0px;
		padding: 1rem;
	}

	.masthead-container .masthead .text-container .page-name {
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
		float: left;
		color: white;
		line-height: 37px;
		position: relative;
		display: inline-block;
	}
	.masthead-container .masthead .text-container .page-name a {
		color: white;
	}
	</style>
</head>
<body>
	<div class='container'>
	@yield('content')
	</div>
</body>
</html>
