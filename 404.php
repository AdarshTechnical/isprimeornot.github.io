<?php
 echo "<body style='background-color:#EB5352'>";
if($_GET){
    $i = 2;
    $isPrime = True;
    while($i < $_GET['number']){
    if($_GET['number'] % $i == 0){
    //number is not prime
    $isPrime = False;
    }


    $i++;
    }
    if($isPrime){
        echo "<p>The number ".$_GET['number']." is a prime number</p>";
    }else{
        echo "<p>The number ".$_GET['number']." is not a prime number</p>";
    }
}



?>

<form>

<p>Please enter a number</p>
<input type="number" name="number">
<input type="submit" value="Check">
<form>
