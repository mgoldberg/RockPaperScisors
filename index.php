<?php


?>

<!DOCTYPE HTML>

	<head>
		<title>Rock, Paper, Scisors</title>
	</head>

	<body>

		<header id = "main">
			<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
			Rock Paper Scisors
		</header>

		<div>

			<form action= "index.php"  method="post">

		</div>

		<div id="submit">
			<input id="form-submitted" type="hidden" name="rockSubmitted" value="true" />
			<input id="rock" type="submit" value="Rock">
		</div>	
		<div id="submit">
			<input id="form-submitted" type="hidden" name="paperSubmitted" value="true" />
			<input id="paper" type="submit" value="Paper">
		</div>
		<div id="submit">
			<input id="form-submitted" type="hidden" name="paperSubmitted" value="true" />
			<input id="paper" type="submit" value="Scisors">
		</div>

	</body>

</html>