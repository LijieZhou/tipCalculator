<html>
<head>
    <title> Tip Calculator </title>
    <!-- CSS part -->
    <style type="text/css">
    	body {background-color: fdffc3;}
    	#outer {
    		width: 40%;
    		height: 50%;
    		margin: auto;
    		border-color: black;
    		border-style: solid;
    	}
    	
    	h1, #inner{
    		margin: 0 auto;
    		text-align: center;
    	}
    </style>
<body>
	<div id="outer" >
		<h1>Tip Calculator</h1>
		<div id="inner">
		    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		    <!-- Get user input of Bill Subtitle, display default value as zero -->
		    Bill Subtitle:$  <input type="Text" Name="Num1" placeholder="0" value="<?php echo isset($_POST['Num1']) ? $_POST['Num1'] : '' ?>"><br>
		    Tip Percentage: 
		    <!-- Use a PHP loop to output the three radio buttons -->
		    <?php
		    $array = array(0.1,0.15,0.2);
		    foreach($array as $value){   
		    ?>
		    <!-- Set default radio button value and retain value when result is shown -->
		    <input type="radio" name="tip_percentage" value="<?php echo $value;?>" <?php
		    echo (isset($_POST['tip_percentage']) && $_POST['tip_percentage'] == $value) ? "checked":"";
		    ?>><?php echo $value; ?>


		    <?php
		    }
		    ?>
		 	<!-- Submit Form -->
		    <input type="Submit" name="Submit" value="Calculate">
		    </form>

		    <!-- Validate User Input, display corresponding error messages  -->
			<?php

			if (count($_POST) > 0 && is_numeric($_POST["Num1"]) && ($_POST["Num1"] >0) && isset($_POST["tip_percentage"])){

				$sum = $_POST["Num1"] * $_POST["tip_percentage"] + $_POST["Num1"];
				echo "Tip is ".$_POST["Num1"]*$_POST["tip_percentage"]." and
				total is $sum";
			}
			if (isset($_POST["Num1"]) && $_POST["Num1"] < 0){
				echo "Subtitle should be greater than 0";
			}
			if (isset($_POST["Num1"]) && !is_numeric($_POST["Num1"])){
				echo "Subtitle should be a numeric number.";
			}
			
			?>

		</div>
	</div>

</body>
</html>