<?php

// Connect to your DB
const DATABASE = 'epiz_33276135_ducks';
const USER = 'epiz_33276135';
const PASSWORD = 'PBqtbDKwu8';
const HOST = 'sql205.epizy.com';

// connects to the database using hostname, user, pass, db name
$connect = mysqli_connect('sql205.epizy.com','epiz_33276135','PBqtbDKwu8','epiz_33276135_ducks');

 //connects result adn fetches the result
$sql = "UPDATE ducks SET Count=Count + 1 WHERE ID=1";
$result = mysqli_query( $connect, $query);

$query = "SELECT Count,ID,AnimalName FROM ducks WHERE ID=1";
$result = mysqli_query( $connect, $query);

//updates the Count
$record = mysqli_fetch_assoc( $result)['Count'];
echo ("SUCCESSFULLY UPDATED RECORD");

echo '<p> current duck count:' . `$record`;
?>
