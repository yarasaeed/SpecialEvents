<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Special Events</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
		<style>
menu{width:100%;length:100%; font-size:22px; }
a{background-color:#DAA520;display:block;color:black;padding:14px;text-decoration:none;font-size:20px;width:20%;float:left; }
a:hover{background-color:grey;color:black;}
img{background-size:cover; margin-left:20%; margin-right:20%; margin-top:10px; }
contact{ background-color:#F0E68C; float:left; display:block; color:green;padding:14px;text-decoration:none;font-size:17px;}
fieldset {margin-left:10%;border-radius: 20px; background-color:#F0E68C; width:40%;length:20% }
footer{ margin-left:45%;}
h1{color:#B8860B; float:left; font-family: 'Courier New';}
span{color:blue;}

</style>
        <script>
var imgArray =new Array(8) ;
imgArray[0]=new Image;
imgArray[0].src="images/sp1.jpg";

imgArray[1]=new Image;
imgArray[1].src="images/sp2.jpg";

imgArray[2]=new Image;
imgArray[2].src="images/sp7.jpg";

imgArray[3]=new Image;
imgArray[3].src="images/sp4.jpg";

imgArray[4]=new Image;
imgArray[4].src="images/sp5.jpg";

imgArray[5]=new Image;
imgArray[5].src="images/sp3.jpg";

imgArray[6]=new Image;
imgArray[6].src="images/sp0.jpg";

imgArray[7]=new Image;
imgArray[7].src="images/sp6.jpg";
var index=0;
function cycle() {
document.banner.src= imgArray[index].src;
index++;
if(index==6)
{index=0;}
setTimeout("cycle()",2000);
return;
}
function contact() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
    
    </head>
<body onload="cycle();">
	
       <?php
        require_once './Connection.php';
        ?>
		 <div class="menu">
         <a href="signin.php">Sign In</a>
         <a href="signup.php">Sign Up</a>
         <a href="#contact" onclick="contact()">Contact Us</a>
         </div>
    
    <br>
<h1>For all your occasions with artistic fine details and creative decorations .. </h1>
<br>
<div id="img" >
<img src="images/sp1.jpg" name="banner" width="60%" height="70%" />
</div>
<fieldset>
<div id="contact" style="margin-top:25px">
    <h2><b>Contact.</b></h2>
    <p>Do you want us to decorate your events? Fill out the form and fill me in with the details :)</p>
    <form action="contact_action1.php" method="Post">
      <div>
        <label>Name</label>
        <input type="text" name="Name" required>
      </div>
      <div>
        <label>Email</label>
        <input type="text" name="Email" required>
      </div>
      <div>
        <label>Message</label>
        <input type="text" name="Message" required>
      </div>
      <button type="submit" >Send Message</button>
	  <input type="reset" value="Reset" id="button"> 
    </form>  
	<p><b> You can visit my <span>facebook</span> page :<span> Special Events </span></b> </p>
  </div>
</fieldset>
</body>
</html>      

			