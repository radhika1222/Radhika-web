<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h2>Login</h2>

  <?php
  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Hardcoded credentials (for example only)
      $username = "admin";
      $password = "1234";

      // Get form data
      $inputUser = $_POST['username'];
      $inputPass = $_POST['password'];

      // Validate credentials
      if ($inputUser === $username && $inputPass === $password) {
          echo "<p>Login successful! Welcome, $username.</p>";
      } else {
          echo "<p style='color:red;'>Invalid username or password.</p>";
      }
  }
  ?>

  <form method="post" action="">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
  </form>
</body>
</html>
