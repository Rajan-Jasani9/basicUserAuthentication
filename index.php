<!DOCTYPE html>
<html>
<head>
  <title>Registration and Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 8px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    
    .form-group button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .form-group button:hover {
      background-color: #45a049;
    }
    
    .switch-form {
      text-align: center;
      margin-top: 20px;
    }
    
    .switch-form a {
      color: #999;
      text-decoration: none;
    }
    
    .switch-form a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
    
  <div class="container">
    <div id="registration-section">
      <h2>Registration Form</h2>
      <form id="registration-form" action="register.php" method="post">
        <div class="form-group">
          <label for="reg-username">Username:</label>
          <input type="text" id="reg-username" name="reg-username" required>
        </div>
        <div class="form-group">
          <label for="reg-password">Password:</label>
          <input type="password" id="reg-password" name="reg-password" required>
        </div>
        <div class="form-group">
          <label for="reg-conf-password">Confirm Password:</label>
          <input type="password" id="reg-conf-password" name="conf-password" required>
        </div>
        <div class="form-group">
          <button type="submit">Register</button>
        </div>
      </form>
      
      <div class="switch-form">
        <a href="#" id="login-link">Already have an account? Login here.</a>
      </div>
    </div>
    
    <div id="login-section" style="display: none;">
      <h2>Login Form</h2>
      <form id="login-form" action="login.php" method="post">
        <div class="form-group">
          <label for="login-username">Username:</label>
          <input type="text" id="login-username" name="login-username" required>
        </div>
        <div class="form-group">
          <label for="login-password">Password:</label>
          <input type="password" id="login-password" name="login-password" required>
        </div>
        <div class="form-group">
          <button type="submit">Login</button>
        </div>
      </form>
      
      <div class="switch-form">
        <a href="#" id="register-link">Don't have an account? Register here.</a>
      </div>
    </div>
  </div>

  <script>
    // Switch to the registration form
    document.getElementById('register-link').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('registration-section').style.display = 'block';
      document.getElementById('login-section').style.display = 'none';
    });
    
    // Switch to the login form
    document.getElementById('login-link').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('registration-section').style.display = 'none';
      document.getElementById('login-section').style.display = 'block';
    });
  </script>
</body>
</html>
