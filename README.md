# Simple Captcha Solver

A minimal web application for solving captchas.

## Summary

This application presents a captcha image to the user and asks them to enter the text displayed in the image. It then verifies the user's input against the correct captcha.

## Setup

1.  Make sure you have a web server running PHP (e.g., Apache with PHP). The code depends on `generate_captcha.php` and `verify_captcha.php`
2.  Copy all files (index.html, main.js, style.css, generate_captcha.php, verify_captcha.php) to your web server directory.
3.  Ensure that `generate_captcha.php` has write permissions to create a `captcha.txt` file.

**Note**: `generate_captcha.php` and `verify_captcha.php` are example files and need to be separately implemented on the server.

## Usage

1.  Open `index.html` in your web browser.
2.  Enter the text displayed in the captcha image into the input field.
3.  Click the "Submit" button.
4.  The application will display whether the captcha was matched correctly.

## License

MIT License
