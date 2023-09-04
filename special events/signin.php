<?php
// Connect to the SpecialEvents database
require_once './Connection.php';
require_once './fix_string.php';
?>
<html>
<head>
<title>Sign In</title>
<style>
body{ 
background: url(images/s3.jpeg) no-repeat center fixed ;
background-size:cover;
}
fieldset {border-radius: 20px; ; background-color:#F0E68C; width:25%; }
form{margin-left:10%;}
input { margin-left:10%;border-radius: 5px; ; }
select { border-radius: 5px;; }
</style>
</head>
<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Escape the form input to prevent SQL injection attacks
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Check the login credentials against the users table
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
  if (password_verify($password, $user['password'])) {
    // Successful login
    echo "Welcome, $username!";
	header('Location: home.php');
  } else {
    // Failed login
    echo "Error: Incorrect username or password.";
  }
}
?>

<!-- Form for signing in -->
<h1>Sign In</h1>
<fieldset>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="username">Username:</label><br>
  <input type="text" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" name="password"><br><br>
  <input type="submit" name="submit" value="Sign in">
</form>
</fieldset>