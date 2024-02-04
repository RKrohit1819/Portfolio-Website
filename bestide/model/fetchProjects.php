<?php
include 'config.php';

// // Start the session
// session_start();

// // Get the user ID from the session
// $userId = $_SESSION['user_id'];
$userId = "User2";


// Prepare the SQL query to fetch project data for the specified user ID
$sql = "SELECT project_name, code_created_date, code_modified_date, code_name FROM project_details WHERE code_author_id = '$userId'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
  // Create an array to store the project data
  $projects = array();

  // Loop through each row and add project data to the array
  while ($row = mysqli_fetch_assoc($result)) {
    $project = array(
      'projectName' => $row['project_name'],
      'startDate' => $row['code_created_date'],
      'endDate' => $row['code_modified_date'],
      'status' => $row['code_name']
    );
    $projects[] = $project;
  }

  // Convert the array to JSON and echo it as the response
  echo json_encode($projects);
} else {
  // No projects found for the specified user ID
  echo "No projects found.";
}

// Close the database connection
mysqli_close($conn);
?>
