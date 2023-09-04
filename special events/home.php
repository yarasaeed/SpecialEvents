<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color:;
    margin-top: 20px;
	display:none;
}
button{background-color:#F0E68C;}
h2{color:#ffa1f9; float:left; font-family:arial;}
.top-right {
  position: absolute;
  top: 0;
  right: 0;
  background-color:#F0E68C;
  width: 100px;
  height: 50px;
}
</style>
</head>
<body>
<center>
<img src="images/table setup.jpg" name="banner" width="50%" height="90%" />
</center>
<button onclick="Birthdays()">Birthdays</button>
<button onclick="Wedding()">Wedding</button>
<button onclick="Engagement()">Engagement</button>
<button onclick="newBorn()">newBorn</button>
<div id="Birthdays">
<h3>Celebrate your events with special themed table setup..</h3>
<img src="images/sp7.jpg" name="banner" width="20%" height="25%" />
<img src="images/birth01.jpg" name="banner" width="20%" height="25%" />
<img src="images/birth03.jpg" name="banner" width="20%" height="25%" />
<img src="images/birth4.jpg" name="banner" width="20%" height="25%" />
</div>
<div id="Wedding">
<h3>Wedding</h3>
<img src="images/wedding.jpg" name="banner" width="20%" height="25%" />
<img src="images/wedding1.jpg" name="banner" width="20%" height="25%" />
<img src="images/wedding5.jpg" name="banner" width="20%" height="25%" />
<img src="images/wedding3.jpg" name="banner" width="20%" height="25%" />
</div>
<div id="Engagement">
<h3>Engagement</h3>
<img src="images/engagement.jpg" name="banner" width="20%" height="25%" />
<img src="images/engage1.jpg" name="banner" width="20%" height="25%" />
<img src="images/sp0.jpg" name="banner" width="20%" height="25%" />
<img src="images/engage3.jpg" name="banner" width="20%" height="25%" />
</div>
<div id="newBorn">
<h3>pretty little details</h3>
<img src="images/birth11.jpg" name="banner" width="10%" height="25%" />
<img src="images/birth00.jpg" name="banner" width="20%" height="25%" />
<img src="images/birth6.jpg" name="banner" width="20%" height="25%" />
<img src="images/birth9.jpg" name="banner" width="10%" height="25%" />
<img src="images/birth12.jpg" name="banner" width="10%" height="25%" />
</div>
<button class="top-right" onclick="window.location.href = 'order.php';">order now</button>



<script>
function Birthdays() {
    var x = document.getElementById("Birthdays");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function Wedding() {
    var x = document.getElementById("Wedding");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function Engagement() {
    var x = document.getElementById("Engagement");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function newBorn() {
    var x = document.getElementById("newBorn");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

</body>

</html>