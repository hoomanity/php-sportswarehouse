<?php
require_once"includes/common.php";
// Config
$title = "Register";

// Check if register form has been submitted
if (isset($_POST["submit"])) {

    // Form has been submitted - process form data

    // Get data passed to this page (in the $_POST super global array)
    $firstName = trim($_POST["firstName"] ?? "");
    $lastName = trim($_POST["lastName"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $contactNumber = trim($_POST["contactNumber"] ?? "");

    // Collection of all errors for this form (empty by default)
    $errors = [];

    // TODO: Validate the data
    // $errors["fieldName"] = "Error message for field";

    if (strlen($firstName) < 2) {
        $errors["firstName"] = "First name Must be 2+ characters";
    }



    // Check for invalid data (errors)
    if (!empty($errors)) {
        // if (count($errors) > 0) {

        // Invalid: Display the registration form with error messages

        // Include the form template using output buffering
        ob_start();
        include_once "templates/_registerForm.html.php";
        $output = ob_get_clean();
    } else {

        // Valid: Display registration confirmation

        // Include the confirmation template using output buffering
        ob_start();
        include_once "templates/_registerConfirmation.html.php";
        $output = ob_get_clean();
    }
} else {

    // Form not submitted (first load of the page) - just show the form

    // Start output buffering (capture output, don't display it yet)
    ob_start();

    // Include the registration form template
    include_once "templates/_registerForm.html.php";

    // Stop output buffering - store output in the $output variable
    $output = ob_get_clean();
}

// Include the layout template (and inject content via $output)
include_once "templates/_layout.html.php";