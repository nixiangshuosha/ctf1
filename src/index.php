<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 50%;
        margin: 100px auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form id="loginForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</div>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting

        // Simulate login process (you can replace this with actual login logic)
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Check if username and password are correct (basic example)
        if (username === 'admin' && password === 'password') {
            // Redirect to another page after successful login
            window.location.href = 'welcome.html'; // Change 'welcome.html' to your desired page
        } else {
            alert('Invalid username or password. Please try again.');
        }
    });
</script>
</body>
</html>
