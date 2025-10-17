<?php
session_start();

// Get the user's input from the POST request
$user_input = isset($_POST['captcha']) ? $_POST['captcha'] : '';

// Get the captcha code from the session
$captcha_code = isset($_SESSION['captcha']) ? $_SESSION['captcha'] : '';

// Compare the user's input to the captcha code
if (strtolower($user_input) === strtolower($captcha_code)) {
    $response = ['success' => true];
} else {
    $response = ['success' => false];
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

?>
