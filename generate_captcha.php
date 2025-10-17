<?php
session_start();

// Generate a random string for the captcha
$captcha_code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789'), 0, 6);

// Store the captcha code in the session
$_SESSION['captcha'] = $captcha_code;

// Create an image
$image = imagecreatetruecolor(150, 50);

// Define colors
$background_color = imagecolorallocate($image, 255, 255, 255); // White
$text_color = imagecolorallocate($image, 0, 0, 0); // Black

// Fill the background
imagefill($image, 0, 0, $background_color);

// Add the text
imagestring($image, 5, 30, 15, $captcha_code, $text_color);

// Output the image as a PNG
header('Content-Type: image/png');
imagepng($image);

// Clean up
imagedestroy($image);

?>