<?php
// Connect to the SpecialEvents database
require_once './Connection.php';
require_once './fix_string.php';
?>

<html>
<head>
<title>Plan</title>
<style>
body{ 
background: url(images/birth15.jpg) no-repeat center fixed ;
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
.top-right {
  position: absolute;
  top: 0;
  right: 0;
  background-color:#fff4e7;
  width: 100px;
  height: 50px;
}
</style>

</head>
<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the values from the form
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $event = $_POST['Event'];
    $gender = $_POST['Gender'];
    $preferred_colors = implode(',', $_POST['preferred_colors']);

    // Insert the values into the orders table
    $sql = "INSERT INTO orders (username, email, phone, event, gender, preferred_colors) VALUES ('$username', '$email', '$phone', '$event', '$gender', '$preferred_colors')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
<body>
<form action="order.php" method="post">
<fieldset>
<table>
<tr><td><b>Username</b></td>
<td><input type="text" placeholder="Enter Username" required></td>
</tr>
<tr>
<td><b>Email</b></td>
<td><input type="email" placeholder="enter email" required></td>
</tr>
<tr>
<td><b>Phone</b></td>
<td><input type="text" placeholder="enter phone" required></td>
</tr>
<tr><td><b>Event</b></td>
<td><select>
<option value="tyre">Birthday</option>
<option value="tyre">Engagement</option>
<option value="tyre">Wedding</option>
<option value="tyre">New Born</option>
<option value="tyre">Baby Shower</option>
<option value="tyre">Other</option>
</select>
</td>
</tr>
<tr>
<td><b>Gender</b></td>
<td><input type="radio" value="female" name="gender"> Female
<input type="radio" value="Male" name="gender"> Male
</td>
</tr>
<td>preferred colors</td>
<td><input type="checkbox" value="red" name="Red"> Red
<input type="checkbox" value="green" name="Green"> Green
<input type="checkbox" value="pink" name="Pink"> pink
<input type="checkbox" value="blue" name="Blue"> Blue
<input type="checkbox" value="white" name="White"> white
<input type="checkbox" value="gold" name="Gold"> gold
</td>
</tr>
</table>
<input type="reset" value="Reset" id="button"> 
<input type="submit" value="Submit" id="button"> 


</fieldset>
</form>
<button class="top-right" onclick="window.location.href = 'home.php';">back to home page</button>
</body>