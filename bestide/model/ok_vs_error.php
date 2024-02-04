<?php
// Include your database connection or any necessary configuration files
include 'config.php';
// Get the user ID from the session or any other source
// $userId = $_SESSION['user_id'];
$userId = "USER2";

$query = "SELECT COUNT(*) as count, compiled FROM project_details WHERE code_author_id = '$userId' AND compiled IN ('OK', 'NOK') GROUP BY compiled";
$result = mysqli_query($conn, $query);

// Create an array to store the data
$data = array(0, 0); // Initialize with 0 count for OK and NOK

// Fetch and format the data
while ($row = mysqli_fetch_assoc($result)) {
  if ($row['compiled'] == 'OK') {
    $data[0] = (int) $row['count'];
  } elseif ($row['compiled'] == 'NOK') {
    $data[1] = (int) $row['count'];
  }
}

// Return the data as JSON
echo json_encode($data);
?>
