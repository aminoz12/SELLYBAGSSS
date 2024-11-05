<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Productdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT product_name, product_image, product_link FROM Producttb";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            'product_name' => $row['product_name'],
            'product_image' => $row['product_image'],
            'product_link' => $row['product_link']
        );
    }
}

$conn->close();

// Set the content type to JSON
header('Content-Type: application/json');

// Encode the data as JSON and send it
echo json_encode($data);
?>
