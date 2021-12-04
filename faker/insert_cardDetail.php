<?php

require('../vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","","log_app");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=1; $i <= 20; $i++){   
$sql = "INSERT INTO log_app.carddetail(creditCardType, creditCardNumber, creditCardExpDate, useridNum) values('".$faker->creditCardType."','".$faker->creditCardNumber."','".$faker->creditCardExpirationDateString."', '".$faker->numberBetween($min = 1, $max = 100)."')";
mysqli_query($conn, $sql);}
?>