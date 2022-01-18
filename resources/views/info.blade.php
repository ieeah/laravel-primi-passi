<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sito - Info</title>
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
			<li><a href=" {{ route('about')}} " target="_blank" rel="noopener noreferrer">Info</a></li>
		</ul>
	</header>
	<main>
		<h1>{{ $title }}</h1>
		<p>a lot of informations</p>
	</main>
</body>

</html>