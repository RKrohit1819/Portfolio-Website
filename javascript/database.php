<?php
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = "mysql"; // Replace with your database password
$dbname = "list"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$Title = $_POST['Title'];
$Description = $_POST['Description'];

// Perform database operations (e.g., insert data)
$sql = "INSERT INTO form (Title, Description) VALUES ('$Title', '$Description')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
