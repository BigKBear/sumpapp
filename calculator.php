<?php
/*
 * Kyle St Hill
 * Calculator.php 
 * Using POST method
 */
$answer = $_POST['submit'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

echo $number1, $answer, $number2;

//above evaluates text and returns the result
//eval("echo (2+2);");

//injection is bad because the user can type in anything and break the code
//eval("\$result = $number1 $answer $number2;");

//echo "\$result = $number1 $answer $number2;";

/*
if( $answer =='+')
$result = $number1 + $number2;
if( $answer =='-')
$result = $number1 - $number2;
if( $answer =='*')
$result = $number1 * $number2;
if( $answer =='/')
$result = $number1 / $number2;
*/

switch( $answer )
{
case '+' : $result = $number1 + $number2;
   break;

case '-' : $result = $number1 - $number2;
   break;

case '*' : $result = $number1 * $number2;
   break;

case '/' : $result = $number1 / $number2;
   break;
}

echo <<<END_OF_FORM
<form action="calculator.php" method = "POST">

<input type="text" name="number1" value="$number1"><br/>
<input type="text" name="number2" value="$number2"><br/>
<input type="text" name="result" value="$result"><br/>

<input type="submit" name="submit" value ="+"><br/>
<input type="submit" name="submit" value ="-"><br/>
<input type="submit" name="submit" value ="*"><br/>
<input type="submit" name="submit" value ="/"><br/>

</form>
END_OF_FORM;
?>
<!--
<br>
	When ADDED you get: <?php  echo $_POST["name"] + $_POST["email"];	?>
<br>
	When SUBTRACTED you get: The sum is: <?php  echo $_POST["name"] - $_POST["email"];	?>
<br>
	When MULTIPLED you get: <?php  echo $_POST["name"] * $_POST["email"];	?>
<br>
	When DIVIDED you get: <?php  echo $_POST["name"] / $_POST["email"];	?>
<br>

-->