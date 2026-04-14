<!DOCTYPE html>
<html>
<head>
    <title>Internal Admin Portal</title>
    <style>
        body { background-color: #2c3e50; color: white; font-family: sans-serif; text-align: center; }
        .container { margin-top: 100px; }
        input { margin: 10px; padding: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>System Login</h2>
        <p id="msg"></p>
        <input type="text" id="user" placeholder="Username"><br>
        <input type="password" id="pass" placeholder="Password"><br>
        <button onclick="checkLogin()">Login</button>
    </div>

    <script>
       function checkLogin() {
            const u = document.getElementById('user').value;
            const p = document.getElementById('pass').value;
     
            if (u === "admin" && p === "password123") {
	    	window.location.href = "dashboard.html"
	    } else {
		    alert("Invalid credentials");
	    }
        }
    </script>
</body>
</html>
