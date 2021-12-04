<?php

require('../vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","","log_app");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=0; $i <= 10; $i++){   
$sql = "INSERT INTO log_app.person(lastname, firstname, address, logdt) values('".$faker->lastName."','".$faker->firstName."', '".$faker->address."', '".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."')";     

mysqli_query($conn, $sql);}

?>