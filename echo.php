<?php
//calling variables
$Name = "chinedu";
$name = "Richard";
//echo ($name);

//INTEGERS
$num1 = 5;
$num2= 8;
//echo $num1 + $num2;

$k=2;
$K2=4;
//print  4+2

$dave1 = "true";
$dave2 = "false";
echo $dave2;

//(3) OPERATORS:
/*+ Addition Operator,
-Subtraction operator, 
==Equality operator
= Assignment Operator
*Multiplication Operator
/ Division
% modulus operator*/

$len = 40;
$len1 = 30;
//$len2 == 2.0;
//echo $len + $len1;
//echo $len - $len1;
//echo $len * $len1;
//echo $len % $len1;
var_dump($num2); //It is used to Debug in PHP.
//echo $num2;

//(4) ARRAYS: Array is a collection of data that can be accessed at once.
//Simple Array
$names = array ('chinedu', 'mebyricky', 'favour', 'js');
//print_r($names);
//echo($names[3]);
//$colors = ['red', 'green', 'blue'];
//var_dump($colors)
//print_r($colors[0]);

//Associative Array
$colors = array('R'=>'Red', 'ekene'=> 'Black', 'ekene1'=>'Green');
//echo ($colors['ekene']);

$num = ['Ifeanyi'=> 20, 'Obi' =>'30', 'Favour'=>52];
//echo $num['Favour'];
//print_r($num['Obi']);
//var_dump($num['Obi']);

//MULTI-DIMENSIONAL ARRAY
$class = [['Ifeanyi' =>20, 'Obi'=>30, 'Favour'=>52],
['Richard'=>22, 'Emmanuel'=>22, 'Rita'=>13]];
//Print_r($class[0]['Favour']);
var_dump($class[1]['Emmanuel']);

// global scope
$x = 5; 
 function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: </p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

//ECHO $ PRINT STATEMENTS
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

//HOW TO DISPLAY VARIABLES USING ECHO STATEMENTS.
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

//HOW TO DISPLAY USING PRINTS
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

//DISPLAYING VARIABLES USING PRINT
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?> 
?>
