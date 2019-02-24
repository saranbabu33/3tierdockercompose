<!-- ./php/index.php -->

<html>
    <head>
        <title>Test Hello World</title>
    </head>

    <body>
<?php
$servername = "db";
$username = "test";
$password = "test";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\r\n";
?>
    </body>
</html>
