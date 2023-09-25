<?php

if (isset($_POST["submit"])) {

    // check for invalid phone number  
    function validatephoneNumber($contactNumber)
    {
        // setting up the pattern to check for valid phone number
        $pattern = '/^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/';
    }

    if (preg_match($pattern, $contactNumber)) {
        return true;
    } else {
        return false;
    }
}