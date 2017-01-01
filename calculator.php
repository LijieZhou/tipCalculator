<html>
<head>
    <title> Tip Calculator </title>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Bill Subtitle:$  <input type="Text" Name="Num1"><br>
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
	if (count($_POST) > 0 && isset($_POST["Num1"]) && isset($_POST["tip_percentage"])){

		
		$sum = $_POST["Num1"] * $_POST["tip_percentage"] + $_POST["Num1"];
		// their sum is diplayed as
		echo "Tip is ".$_POST["Num1"]*$_POST["tip_percentage"]." and
		total is $sum";
	}
	if ($_POST["Num1"] <= 0 ){
		echo "Bill Subtitle must be greater than zero";
	}
?>

</body>
</html>