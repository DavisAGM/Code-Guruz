<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email and password from POST data
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Initialize an array to hold error messages
    $errors = [];

    // Validate the email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate the password
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // Check if there are any validation errors
    if (!empty($errors)) {
        // Display the errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        // Process the form data
        echo "<p style='color:green;'>Validation successful. Form data can be processed.</p>";
        // Here you can add code to handle the form data, such as saving it to a database
    }
}
?>
