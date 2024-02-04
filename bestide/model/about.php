<?php
include 'config.php';

// session_start();
// $userId = $_SESSION['user_id'];

// Get the user ID from the POST request
// $userId = $_POST['userId'];
$userId = "User1";
// Get the about information from the POST request
$about = $_POST['about'];

// Sanitize the input to prevent SQL injection
$about = mysqli_real_escape_string($conn, $about);

// Prepare the SQL query to update the user's about information
$sql = "UPDATE user SET about = '$about' WHERE userId = '$userId'";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "About information saved successfully.";
} else {
  echo "Failed to save about information: " . mysqli_error($conn);
}
?>
