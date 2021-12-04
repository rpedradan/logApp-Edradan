<?php

require('../vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost","root","","log_app");

if(!$conn)
{   
die(mysqli_error());
}  

for ($i=1; $i <= 100; $i++){   
    $sql = "INSERT INTO log_app.useraccount(email, lastname, firstname, username, password) values('" . $faker->email . "','" . $faker->lastName  . "','" . $faker->firstName . "', '" . $faker->userName . "', '" . $faker->password . "')"; 

mysqli_query($conn, $sql);}



?>