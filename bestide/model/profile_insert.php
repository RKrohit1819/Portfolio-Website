<?php
include 'config.php';

// session_start();
// $userId = $_SESSION['user_id'];
$userId = "User1";
$jsonData = file_get_contents('php://input');
$formData = json_decode($jsonData, true);
// Extract the form field values
$userFirstName = $formData['userFirstName'];
$userLastName = $formData['userLastName'];
$userEmail = $formData['userEmail'];
$address = $formData['address'];
$country = $formData['country'];
$city = $formData['city'];
// $remarks = $formData['remarks'];

$sql = "INSERT INTO user (userID, userFirstName, userLastName, userEmail, address, country, city) 
        VALUES ('$userId', '$userFirstName', '$userLastName', '$userEmail', '$address', '$country', '$city')
        ON DUPLICATE KEY UPDATE
        userFirstName = VALUES(userFirstName),
        userLastName = VALUES(userLastName),
        userEmail = VALUES(userEmail),
        address = VALUES(address),
        country = VALUES(country),
        city = VALUES(city)";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted/updated successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
