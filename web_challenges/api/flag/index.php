<?php
// Technical: Set the header so the browser treats this as data, not a webpage
header('Content-Type: application/json');

// Get the 'token' from the URL query string (?token=...)
$provided_token = $_GET['token'] ?? '';

$secret_token = "super_secret_token";

if ($provided_token === $secret_token) {
    echo json_encode([
        "status" => "success",
        "flag" => "VOSSCTF{api_r0ut1ng_15_fun}",
        "message" => "Congratulations, you authorized correctly!"
    ]);
} else {
    // Technical: Send a 401 Unauthorized status code
    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid or missing token.",
        "hint" => "Check the 'token' parameter in the URL!"
    ]);
}
?>
