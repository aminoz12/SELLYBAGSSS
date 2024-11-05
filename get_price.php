<?php
// get_price.php

// Include necessary files and configurations
session_start();
require_once('CreateDb.php');

// Create an instance of the Createdb class
$database = new CreateDb("Productdb", "Producttb");

// Fetch the price from the database (replace with your actual logic)
$price = $database->getProductPrice(); // Implement this method in your CreateDb class

// Output the price
echo json_encode(['price' => $price]);
?>
