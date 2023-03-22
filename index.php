<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    .login-form {
      width: 300px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      color: #fff;
      border-radius: 3px;
      cursor: pointer;
    }
    .form-group button:hover {
      background-color: #0069d9;
    }
  
    .register-link {
  display: block;
  margin-top: 10px;
  text-align: center;
  font-size: 14px;
  color: #007bff;
  text-decoration: none;
}

.register-link:hover {
  color: #0069d9;
}
  </style>
</head>
<body>
  <form class="login-form" action="auth.php" method="POST">
    <h2>Login</h2>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <button type="submit">Login</button>
    </div>
    <a href="registration.html" class="register-link">Don't have an account? Sign up here.</a>
  </form>
</body>
</html>
