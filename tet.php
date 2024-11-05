<!-- products.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        .product-list {
            list-style-type: none;
            padding: 0;
        }

        .product-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .product-item img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>All Products</h1>

        <?php
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "productdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch all products from the Producttb table
        $sql = "SELECT * FROM producttb";
        $result = $conn->query($sql);

        if (!$result) {
            die("Error executing query: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            echo "<ul class='product-list'>";
            while ($row = $result->fetch_assoc()) {
                echo "<li class='product-item'>";
                echo "<img src='{$row['product_image']}' alt='{$row['product_name']}' class='product-image'>";
                echo "&nbsp;&nbsp;";
                echo "Product Name: {$row['product_name']}<br>";
                echo "Price: {$row['product_price']}<br>";
                echo "Description: {$row['product_description']}<br>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "No products found.";
        }

        // Close the database connection
        $conn->close();
        ?>

    </div>

</body>
</html>
