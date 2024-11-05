<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "productdb";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["searchTerm"])) {
    $searchTerm = $_POST["searchTerm"];

    $sql = "SELECT * FROM producttb WHERE product_name LIKE '%" . $searchTerm . "%'";
    $result = $conn->query($sql);

    $suggestions = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $suggestion = array(
                "label" => $row["product_name"],
                "value" => $row["product_link"]
            );
            $suggestions[] = $suggestion;
        }
    }

    // Output suggestions as JSON
    echo json_encode($suggestions);
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Test</title>

    <!-- Include jQuery and jQuery UI -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
$(function () {
    $("#search-bar").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "search.php",
                method: "POST",
                dataType: "json",
                data: {
                    searchTerm: request.term
                },
                success: function (data) {
                    response(data);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        },
        minLength: 1,
        select: function (event, ui) {
            // Redirect to the selected item's link
            window.location.href = ui.item.value;
        }
    });
});
</script>
</head>

<body>
    <form method="post" action="testas.php" id="search-form">
        <label for="search-bar">Search:</label>
        <input type="text" id="search-bar" name="search-bar" placeholder="Search...">
    </form>

    <div id="suggestions"></div>
</body>
</html>
