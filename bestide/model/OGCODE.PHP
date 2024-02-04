<?php
include 'config.php';

$userId = "User1";

if ($_FILES["profilePic"]["error"] === UPLOAD_ERR_OK) {
    // Specify the destination directory for the uploaded file
    $uploadDir = "../../../assets/img/userProfilePics/";

    // Generate a unique filename for the uploaded file
    $fileName = uniqid() . "_" . $_FILES["profilePic"]["name"];
    // Concatenate the upload directory and the filename
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . "/bestide/view/" . $uploadDir . $fileName;

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $uploadPath)) {

        // Update the user's profile picture in the database
        $relativePath = "/bestide/view/" . $uploadDir . $fileName;
        $sql = "UPDATE user SET image = '$relativePath' WHERE userID = '$userId'";
        if (mysqli_query($conn, $sql)) {
            echo $relativePath; // Send the relative path + filename as the response
        } else {
            echo "Error updating the profile picture in the database: " . mysqli_error($conn);
        }
    } else {
        // Error moving the uploaded file
        echo "Failed to move the uploaded file.";
    }
} else {
    // Error uploading the file
    echo "Error uploading the file.";
}

mysqli_close($conn);
?>
