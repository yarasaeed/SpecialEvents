
<?php
// Connect to the SpecialEvents database
require_once './Connection.php';
require_once './fix_string.php';
?>
<html>
<head>
<title>Sign Up</title>
<style>
body{ 
background: url(images/s2.jpeg) no-repeat center fixed ;
background-size:cover;
}
legend{ font-size:30px; font-family:impact;}
form { margin-left:35%; } 
fieldset {border-radius: 20px; ; margin-top:25%; background-color:#fff4e7; width:50%; }
h1 { color:white; text-align:center; }
table{margin-left:10%;}
input { margin-left:10%;border-radius: 5px; ; }
select { border-radius: 5px;; }
button { color:red; }
</style>
<script>
function myFunction(){
var x=document.getElementById("showpass");
if(x.type=="password")
x.type="text";
else
x.type="password";
var x=document.getElementById("showpass2");
if(x.type=="password")
x.type="text";
else
x.type="password";

}
</script>
</head>
<body>
<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Escape the form input to prevent SQL injection attacks
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password_confirm = mysqli_real_escape_string($conn, $_POST['password_confirm']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);

  // Make sure the passwords match
  if ($password != $password_confirm) {
    echo "Error: Passwords do not match.";
  } else {
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the users table
    $sql = "INSERT INTO users (username, password, email, phone) VALUES ('$username', '$hashed_password', '$email', '$phone')";
    mysqli_query($conn, $sql);

    echo "User registered successfully.";
	header('Location: signin.php');
  }
}
?>

<!-- Form for registering a new user -->
<fieldset>
<legend>Sign Up</legend>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="username">Username:</label><br>
  <input type="text" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" name="password"><br>
  <label for="password_confirm">Confirm Password:</label><br>
  <input type="password" name="password_confirm"><br>
  <label for="email">Email:</label><br>
  <input type="text" name="email"><br>
  <label for="phone">Phone:</label><br>
  <input type="text" name="phone"><br><br>
  <input type="submit" name="submit" value="Register">
</form>
</fieldset>