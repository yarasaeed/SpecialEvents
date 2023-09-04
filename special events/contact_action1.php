<?php
// Connect to the SpecialEvents database
require_once './Connection.php';
require_once './fix_string.php';
?>

<?php

$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];



// Insert the data into the database
$query = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
mysqli_query($conn, $query);

// Confirm success with the user
echo 'Thanks for submitting your message. We will get back to you as soon as possible.';

mysqli_close($conn);

?>