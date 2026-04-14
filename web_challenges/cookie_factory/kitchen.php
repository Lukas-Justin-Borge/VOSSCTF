<?php
$user_type = $_COOKIE['user_type'] ?? 'none';

if ($user_type === "admin") {
    $title = "STAFF KITCHEN - AUTHORIZED";
    $content = "<h1>Welcome, Head Baker!</h1>
                <p>Here is the secret ingredient: <b>VOSSCTF{HTTP_c00k13_m4n1pul4t10n}</b></p>";
    $bg = "#a5d6a7"; // Green for success
} else {
    $title = "ACCESS DENIED";
    $content = "<h1>STOP! 🛑</h1>
                <p>The Staff Kitchen is for <b>admin</b> users only.</p>
                <p>You are currently logged in as a: <b>$user_type</b></p>
                <a href='index.php'>Go back to the shop</a>";
    $bg = "#ef9a9a"; // Red for failure
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body { background: <?php echo $bg; ?>; font-family: sans-serif; text-align: center; padding-top: 100px; }
    </style>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>
