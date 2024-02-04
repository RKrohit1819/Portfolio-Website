<?php
include 'config.php';

// session_start();
// $userId = $_SESSION['user_id'];

$userId = "User1";
// Get the remarks information from the POST request
$remarks = $_POST['remarks'];

// Sanitize the input to prevent SQL injection
$remarks = mysqli_real_escape_string($conn, $remarks);

// Prepare the SQL query to update the user's remarks
$sql = "UPDATE user SET remarks = '$remarks' WHERE userId = '$userId'";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "Remarks saved successfully.";
} else {
  echo "Failed to save remarks: " . mysqli_error($conn);
}
?>