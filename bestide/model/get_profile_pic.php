<?php
// Assuming you have a database connection established
include 'config.php';
// session_start();
// $userId = $_SESSION['user_id'];
$userId = "User1";

// Retrieve the profile picture path from the database for the given user
$sql = "SELECT image FROM user WHERE userID = '$userId'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the row and get the image path
    $row = mysqli_fetch_assoc($result);
    $profilePicPath = $row['image'];
} else {
    // Default profile picture path if no record found in the database
    $profilePicPath = "path/to/default/profile-pic.jpg";
}

// Return the profile picture path as the response
echo $profilePicPath;
?>