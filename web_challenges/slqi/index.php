<?php
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $conn = new mysqli("sqli-db", "ctf", "ctf", "challenge_db");
    
   
    $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>Welcome back, " . $row['username'] . "!</h1>";
        echo "<p>Flag: " . $row['password'] . "</p>";
        exit();
    } else {
        $error = "Invalid login.";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Admin Login (Beta)</h2>
    <form method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
        <input type="submit" value="Login">
    </form>
    <p style="color:red"><?php echo $error; ?></p>
</body>
</html>
