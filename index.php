<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   		if (isset($_POST['rock-submitted'])) {
        	echo "rock";
   		} else if (isset($_POST['paper-submitted'])) {
        	echo "paper";
   		} else {
        	echo "scisors";
   		}
	}



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

		<div id="rock">
			<!--<input id="rock-submitted" type="hidden" name="rockSubmitted" value="true" />-->
			<input type="submit" name="rock-submitted" value="Rock">
		</div>	
		<div id="paper">
			<!--<input id="paper-submitted" type="hidden" name="paperSubmitted" value="true" />-->
			<input type="submit" name="paper-submitted" value="Paper">
		</div>
		<div id="scisors">
			<!--<input id="scisors-submitted" type="hidden" name="scisorsSubmitted" value="true" />-->
			<input type="submit" neam="scisors-submitted" value="Scisors">
		</div>


	</body>

</html>