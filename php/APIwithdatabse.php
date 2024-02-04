<?php
// Database configuration
$dbHost = 'localhost';      // Replace with your database host
$dbName = 'login';  // Replace with your database name
$dbUser = 'root';  // Replace with your database username
$dbPass = 'mysql';  // Replace with your database password

// Create a PDO database connection
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check for POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the POST request (assuming JSON data is sent)
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);

    if ($data && isset($data['data'])) {
        // Prepare and execute the database query to insert data
        $stmt = $pdo->prepare("INSERT INTO your_table_name (data) VALUES (:data)");
        $stmt->bindParam(':data', $data['data']);
        $stmt->execute();

        // Return a success message or response
        $response = array('message' => 'Data inserted successfully');
        echo json_encode($response);
    } else {
        // Return an error response if data is missing or invalid
        $response = array('error' => 'Invalid data');
        echo json_encode($response);
    }
} else {
    // Return an error response for unsupported HTTP methods
    $response = array('error' => 'Method Not Allowed');
    http_response_code(405);
    echo json_encode($response);
}
?>
