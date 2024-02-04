<?php

// Define a function to get the value (0 or 1)
function getValue() {
    // You can change this logic to dynamically determine the value (0 or 1)
    return 0;
}

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Set the response content type to JSON
    header('Content-Type: application/json');

    // Get the value
    $value = getValue();

    // Create a response array
    $response = array('value' => $value);

    // Convert the response array to JSON and echo it
    echo json_encode($response);
} else {
    // Respond with a 405 Method Not Allowed if the request method is not GET
    http_response_code(405);
    echo json_encode(array('error' => 'Method Not Allowed'));
}
