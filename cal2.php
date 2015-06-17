<!DOCTYPE html>
<html>
	<head>
		<title> Kyle Calculartor</title>
	</head>
	
	<body>
		<form action="cal2.php" method = "POST">
		
			<input type="text" name="number1" value="">
				<select name ="op">
					<option name="add">add </option>
					<option name="subtract">subtract </option>
					<option name="multiply">multiply </option>
					<option name="divide">divide </option>
				</select>
			<input type="text" name="number2" value=""><br/>
			<input type="submit" value="Calculate"></br>
			<input type="text" value="Answer : <?php echo $giveit ?>">
		
		</form>
	</body>
	
</html>

<?php
 include_once ('CustomMath.php');
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST["op"];


if($operation == "add")
{
	$giveit = CustomMath::add($number1,$number2);
}
elseif ($operation == "subtract")
{
	$giveit = CustomMath::subtract($number1,$number2);
}
elseif ($operation == "multiply")
{
	$giveit = CustomMath::multiply($number1,$number2);
}
else
{
	$giveit = CustomMath::divide($number1,$number2);
}
?>

