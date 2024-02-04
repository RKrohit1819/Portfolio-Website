<?php
include 'config.php';

// session_start();
// $userId = $_SESSION['user_id'];

// Get the user ID from the POST request
// $userId = $_POST['userId'];
$userId = "User1";

// Prepare the SQL query to fetch the user's about information
$sql = "SELECT about FROM user WHERE id = '$userId'";

// Execute the query
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
  // Fetch the about information from the result
  $row = mysqli_fetch_assoc($result);
  $about = $row['about'];

  // Output the about information
  echo $about;
} else {
  echo ""; // Return an empty string if no about information is found
}
?>
