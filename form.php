<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form php</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container"><h1>CALCULATOR FORM</h1></div>

<div class="contain">
<form method="post">  

<label class="name">Name:</label>
<input type="name" name="fname" /> <br><br>

<label>Enter First Number:</label>  
<input type="number" name="number1" /><br><br>  

<label>Enter Second Number:</label> 
<input type="number" name="number2" /><br><br>  

<input  type="submit" name="submit" value="Check Answer">  
</form>  
</div>  

<?php  
    if(isset($_POST['submit']))  
    {  
        $fname = $_POST['fname'];
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
echo " $fname the sum of $number1 and $number2 is: ".$sum;   
}  
?>  
</body>
</html>