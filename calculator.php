<html>
<head>
    <title> Tip Calculator </title>
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
    		vertical-align: middle;
    	}
    	

    </style>
<body>
<div id="outer" >
	<h1>Tip Calculator</h1>
	<div id="inner">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Bill Subtitle:$  <input type="Text" Name="Num1" value="" placeholder="0"><br>
    Tip Percentage: 
    <?php
    $array = array(0.1,0.15,0.2);
    foreach($array as $value){
        
    ?>
    <input type="radio" name="tip_percentage" value="<?php echo $value; ?>" ><?php echo $value; ?><br>
    <?php
    }
    ?>
 
    <input type="Submit" value="Calculate">
    </form>


<?php



	if (count($_POST) > 0 && is_numeric($_POST["Num1"]) && ($_POST["Num1"] >0) && isset($_POST["tip_percentage"])){

		
		$sum = $_POST["Num1"] * $_POST["tip_percentage"] + $_POST["Num1"];
		// their sum is diplayed as
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