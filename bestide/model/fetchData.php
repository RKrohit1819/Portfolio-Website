<?php
include 'config.php';

// Get the user ID from the session or any other source
$userId = "User2";

// Prepare the SQL query to fetch project data for the specified user ID
$sql = "SELECT COUNT(*) AS totalProjects, 
        SUM(compiled = 'OK'+ 'NOK') AS compilations, 
        SUM(compiled = 'NOK') AS noOfErrors, 
        SUM(code_shared_list != '') AS noOfShares 
        FROM project_details 
        WHERE code_author_id = '$userId'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
  // Fetch the row as an associative array
  $row = mysqli_fetch_assoc($result);

  // Convert the array to JSON and echo it as the response
  echo json_encode($row);
} else {
  // No projects found for the specified user ID
  echo "No data found.";
}

// Close the database connection
mysqli_close($conn);
?>
