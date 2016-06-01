<?php



	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$numberOfThrows = $_POST['numberOfThrows'];
		$numberOfThrows++;
   		if (isset($_POST['rock-submitted'])) {
        	echo "You played rock.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " Tie!<br>";
        	} else if($computer == 2){
        		echo " You lose!<br>";
        	} else if($computer == 3){
        		echo " You win!<br>";
        	}
        	$numberOfThrows++;
   		} else if (isset($_POST['paper-submitted'])) {
        	echo "You played paper.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " You win!<br>";
        	} else if($computer == 2){
        		echo " Tie!<br>";
        	} else if($computer == 3){
        		echo " You lose!<br>";
        	}
        	$numberOfThrows++;
   		} else {
        	echo "You played scisors.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " You lose!<br>";
        	} else if($computer == 2){
        		echo " You win!<br>";
        	} else if($computer == 3){
        		echo " Tie!<br>";
        	}
        	$numberOfThrows++;
   		}
   		echo "Number of total throws: ".$numberOfThrows;
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
			<input type="hidden" name="numberOfThrows" value= "<?php echo $numberOfThrows ?>"/>
			<input type="submit" name="rock-submitted" value="Rock">
		</div>	
		<div id="paper">
			<input type="hidden" name="numberOfThrows" value= "<?php echo $numberOfThrows ?>"/>
			<input type="submit" name="paper-submitted" value="Paper">
		</div>
		<div id="scisors">
			<input type="hidden" name="numberOfThrows" value= "<?php echo $numberOfThrows ?>"/>
			<input type="submit" neam="scisors-submitted" value="Scisors">
		</div>


	</body>

</html>