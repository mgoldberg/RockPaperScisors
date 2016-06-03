
<!DOCTYPE HTML>

    <head>
        <title>Rock, Paper, Scisors</title>
    </head>

    <body>

        <header id = "main">
            <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
            Rock Paper Scisors
        </header>
<br>


<?php


	$numberOfThrows = "0";
	$numberOfWins = "0";
	$numberOfTies = "0";
	$numberOfLosses = "0";


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$numberOfThrows = $_POST['numberOfThrows'];
		$numberOfWins = $_POST['numberOfWins'];
		$numberOfTies = $_POST['numberOfTies'];
		$numberOfLosses = $_POST['numberOfLosses'];
		$numberOfThrows++;
   		if (isset($_POST['rock-submitted'])) {
        	echo "You played rock.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " The computer threw rock";
        		echo " Tie!<br>";
        		$numberOfTies++;
        	} else if($computer == 2){
        		echo " The computer threw paper";
        		echo " You lose!<br>";
        		$numberOfLosses++;
        	} else if($computer == 3){
        		echo " The computer threw scissors";
        		echo " You win!<br>";
        		$numberOfWins++;
        	}
        	$numberOfThrows++;
   		} else if (isset($_POST['paper-submitted'])) {
        	echo "You played paper.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " The computer threw rock";
        		echo " You win!<br>";
        		$numberOfWins++;
        	} else if($computer == 2){
        		echo " The computer threw paper";
        		echo " Tie!<br>";
        		$numberOfTies++;
        	} else if($computer == 3){
        		echo " The computer threw scissors";
        		echo " You lose!<br>";
        		$numberOfLosses++;
        	}
        	$numberOfThrows++;
   		} else {
        	echo "You played scisors.";
        	$computer = rand(1, 3);
        	if($computer == 1){
        		echo " The computer threw rock";
        		echo " You lose!<br>";
        		$numberOfLosses++;
        	} else if($computer == 2){
        		echo " The computer threw paper";
        		echo " You win!<br>";
        		$numberOfWins++;
        	} else if($computer == 3){
        		echo " The computer threw scissors";
        		echo " Tie!<br>";
        		$numberOfTies++;
        	}
        	$numberOfThrows++;
   		}
   		echo "Number of total throws: " . $numberOfThrows."<br>";
   		echo "Number of wins: " . $numberOfWins."<br>";
   		echo "Number of ties: " . $numberOfTies."<br>";
   		echo "Number of losses: " . $numberOfLosses."<br>";
	}



?>

		<div>

			<form action= "index.php"  method="post">

		</div>

		<div id="rock">
			<input type="hidden" name="numberOfThrows" value= "<?php echo $numberOfThrows ?>"/>
			<input type="hidden" name="numberOfWins" value= "<?php echo $numberOfWins ?>"/>
			<input type="hidden" name="numberOfTies" value= "<?php echo $numberOfTies ?>"/>
			<input type="hidden" name="numberOfLosses" value= "<?php echo $numberOfLosses ?>"/>
			<input type="submit" id= "rock" name="rock-submitted" value="Rock">
		</div>	
		<div id="paper">
			<input type="hidden" name="numberOfThrows" value= "<?php echo $numberOfThrows ?>"/>
			<input type="hidden" name="numberOfWins" value= "<?php echo $numberOfWins ?>"/>
			<input type="hidden" name="numberOfTies" value= "<?php echo $numberOfTies ?>"/>
			<input type="hidden" name="numberOfLosses" value= "<?php echo $numberOfLosses ?>"/>
			<input type="submit" id="paper" name="paper-submitted" value="Paper">
		</div>
		<div id="scissors">
			<input type="hidden" name="numberOfThrows" value= "<?php echo $numberOfThrows ?>"/>
			<input type="hidden" name="numberOfWins" value= "<?php echo $numberOfWins ?>"/>
			<input type="hidden" name="numberOfTies" value= "<?php echo $numberOfTies ?>"/>
			<input type="hidden" name="numberOfLosses" value= "<?php echo $numberOfLosses ?>"/>
			<input type="submit" id = "scissors" name="scissors-submitted" value="Scissors">
		</div>

		</form>

	</body>

</html>