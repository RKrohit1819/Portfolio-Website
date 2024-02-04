<?php
$insert = false;
if (isset($_POST['username'])) {
    // Set connection variables
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $db_name = "gp";

    // Create a database connection
    $con = mysqli_connect($servername, $username, $password, $db_name);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    // Collect post variables
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    $sql = "INSERT INTO `usregister` (`username`, `email`, `password`, `firstName`, `lastName`) VALUES ('$username', '$email', '$password', '$firstName', '$lastName');";

    // Execute the query
    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>GP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4--Login-form-Page-BS4.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading-BS5.css">
    <link rel="stylesheet" href="assets/css/btmbar.css">
    <link rel="stylesheet" href="assets/css/Features-Image-icons.css">
    <link rel="stylesheet" href="assets/css/Features-Image-images.css">
    <link rel="stylesheet" href="assets/css/Login-Page-B5.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
</head>

<body>
    <div class="container" style="position: absolute;left: 0;right: 0;top: 50%;transform: translateY(-50%);-ms-transform: translateY(-50%);-moz-transform: translateY(-50%);-webkit-transform: translateY(-50%);-o-transform: translateY(-50%);height: 100%;">
        <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center" style="height: 100%;">
            <div class="col-11 col-sm-12 col-lg-10 col-xl-9 col-xxl-7 bg-white shadow-lg" style="border-radius: 5px;">
                <div class="p-5">
                    <div class="text-center">
                        <h4 class="text-dark mb-4">Create an Account!</h4>
                    </div>
                    <form class="user" action="register.php" method="POST">
                    <div class="mb-3"><input class="form-control form-control-user" type="text" name="username" placeholder="Username" required=""></div>
                    <div class="mb-3"><input class="form-control form-control-user" type="email" name="email" id="email" placeholder="Email Address" required=""></div>
                    <div class="row mb-3">
                        <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" name="password" id="password" placeholder="Password" required=""></div>
                        <div class="col-sm-6"><input class="form-control form-control-user" type="password" name="verifyPassword" id="verifyPassword" placeholder="Repeat Password" required=""></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" name="first_name" placeholder="First Name" required=""></div>
                        <div class="col-sm-6"><input class="form-control form-control-user" type="text" name="last_name" placeholder="Last Name" required=""></div>
                    </div>
                    <div class="row mb-3">
                        <p id="emailErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                        <p id="passwordErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                    </div>
                    <button class="btn btn-primary d-block btn-user w-100" id="submitBtn" type="submit">Register Account</button>
                    <hr>
                    </form>

                    <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                    <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
                </div>
            </div>
        </div><script>
	let email = document.getElementById("email")
	let password = document.getElementById("password")
	let verifyPassword = document.getElementById("verifyPassword")
	let submitBtn = document.getElementById("submitBtn")
	let emailErrorMsg = document.getElementById('emailErrorMsg')
	let passwordErrorMsg = document.getElementById('passwordErrorMsg')

	function displayErrorMsg(type, msg) {
		if(type == "email") {
			emailErrorMsg.style.display = "block"
			emailErrorMsg.innerHTML = msg
			submitBtn.disabled = true
		}
		else {
			passwordErrorMsg.style.display = "block"
			passwordErrorMsg.innerHTML = msg
			submitBtn.disabled = true
		}
	}

	function hideErrorMsg(type) {
		if(type == "email") {
			emailErrorMsg.style.display = "none"
			emailErrorMsg.innerHTML = ""
			submitBtn.disabled = true
			if(passwordErrorMsg.innerHTML == "")
				submitBtn.disabled = false
		}
		else {
			passwordErrorMsg.style.display = "none"
			passwordErrorMsg.innerHTML = ""
			if(emailErrorMsg.innerHTML == "")
				submitBtn.disabled = false
		}
	}
	
	// Validate password upon change
	password.addEventListener("change", function() {

		// If password has no value, then it won't be changed and no error will be displayed
		if(password.value.length == 0 && verifyPassword.value.length == 0) hideErrorMsg("password")
		
		// If password has a value, then it will be checked. In this case the passwords don't match
		else if(password.value !== verifyPassword.value) displayErrorMsg("password", "Passwords do not match")
		
		// When the passwords match, we check the length
		else {
			// Check if the password has 8 characters or more
			if(password.value.length >= 8)
				hideErrorMsg("password")
			else
				displayErrorMsg("password", "Password must be at least 8 characters long")
		}
	})
	
	verifyPassword.addEventListener("change", function() {
		if(password.value !== verifyPassword.value)
			displayErrorMsg("password", "Passwords do not match")
		else {
			// Check if the password has 8 characters or more
			if(password.value.length >= 8)
				hideErrorMsg("password")
			else
				displayErrorMsg("password", "Password must be at least 8 characters long")
		}
	})

	// Validate email upon change
	email.addEventListener("change", function() {
		// Check if the email is valid using a regular expression (string@string.string)
		if(email.value.match(/^[^@]+@[^@]+\.[^@]+$/))
			hideErrorMsg("email")
		else
			displayErrorMsg("email", "Invalid email")
	});
</script>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Type-Heading-BS5-Animated-Type-Heading.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/Table-With-Search-search-table.js"></script>
</body>

</html>
