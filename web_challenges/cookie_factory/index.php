<?php
// Technical: If the cookie isn't set, give them a guest cookie
if (!isset($_COOKIE['user_type'])) {
    setcookie("user_type", "customer", time() + 3600, "/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>The Cookie Oven</title>
    <style>
        body { background: #f3e5ab; font-family: 'Courier New', Courier, monospace; text-align: center; }
        .oven { font-size: 80px; margin: 20px; }
        .btn { background: #8d6e63; color: white; padding: 15px; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Welcome to the Bakery!</h1>
    <div class="oven">🥯 🍪 🥐</div>
    <p>You smell something delicious coming from the Staff Kitchen...</p>
    <br><br>
    <a href="kitchen.php" class="btn">Enter the Staff Kitchen</a>
    
    <p style="margin-top: 50px; font-size: 0.8em; color: #6d4c41;">
        (Our system has recognized you as a <b><?php echo $_COOKIE['user_type'] ?? "New Customer"; ?></b>)
    </p>
</body>
</html>
