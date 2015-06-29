<?php
include_once 'CustomMath.php';
include 'mathUtilityClass.php';

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST["op"];

if ($operation == "add") {
	try {
		$giveit = CustomMath::add($_POST["number1"], $_POST["number2"]);
	} catch (exception $addError) {
		echo 'Error: ', $addError -> getMessage();
	}
} elseif ($operation == "subtract") {
	try {
		$giveit = CustomMath::subtract($_POST["number1"], $_POST["number2"]);
	} catch (exception $subError) {
		echo 'Error: ', $subError -> getMessage();
	}

} elseif ($operation == "multiply") {
	try {
		$giveit = CustomMath::multiply($_POST["number1"], $_POST["number2"]);
	} catch (exception $mulError) {
		echo 'Error: ', $mulError -> getMessage();
	}

} else {
	try {
		$giveit = CustomMath::divide($_POST["number1"], $_POST["number2"]);
	} catch (exception $divError) {
		echo 'Error: ', $divError -> getMessage();
	}

}
?>
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
			<input type="text" name="number2" value="">
			<br/>
			<input type="submit" value="Calculate">
			</br>
			<input type="text" value="Answer : <?php echo $giveit ?>">

		</form>
	</body>

</html>

