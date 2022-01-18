<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sito - Home Page</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Styles -->
	<style>
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		}

		header {
			height: 100px;
			line-height: 100px;
			text-align: center;
			background-color: bisque;
		}

		li {
			display: inline-block;
			margin-left: 10px;
		}

		li a {
			color: #333;
			font-size: 1.1rem;
		}

		main {
			height: calc(100vh - 100px);
			display: grid;
			place-items: center;
		}
	</style>
</head>

<body>
	<header>
		<ul>
			<li><a href=" {{ route('home')}} ">Home Page</a></li>
			<li><a href=" {{ route('about')}} ">Info</a></li>
		</ul>
	</header>
	<main>
		<h1>{{ $title }}</h1>
		<p>This page is so "home" it has curtains</p>
	</main>

</body>

</html>