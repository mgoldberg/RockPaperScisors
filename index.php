<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   		if (isset($_POST['rock-submitted'])) {
        	echo "You played rock.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " Tie!";
        	} else if($computer == 2){
        		echo " You lose!";
        	} else if($computer == 3){
        		echo " You win!";
        	}
   		} else if (isset($_POST['paper-submitted'])) {
        	echo "You played paper.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " You win!";
        	} else if($computer == 2){
        		echo " Tie!";
        	} else if($computer == 3){
        		echo " You lose!";
        	}
   		} else {
        	echo "You played scisors.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " You lose!";
        	} else if($computer == 2){
        		echo " You win!";
        	} else if($computer == 3){
        		echo " Tie!";
        	}
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