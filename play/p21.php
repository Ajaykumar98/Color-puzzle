<!DOCTYPE >
<html >
<head>
	<title>Color puzzle</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../colormatch.css" />
<style type="text/css">
</style></head>
<script src="sound2.js">
var images = new Array()
images[0] = "../images/4.png";
images[1] = "../images/3.png";
images[2] = "../images/2.png";
images[3] = "../images/1.png";
<!--images[4] = "1.png";-->
var x=0;
var timerid=setInterval("changeImage()", 1000);
function changeImage()
{
document.getElementById("slide").src=images[x];
if(x<3)
	x++;
else
	x=0;
}
function test()
{
	window.location.assign("https://www.yahoo.com");
}

</script>

<body>
<div id="page"> 
    <div id="header">
    	<div class="title"><marquee>Color puzzle</marquee></div>
        <div class="subText">By Ajay kumar</div>
    </div>
    <div id="bar">
        <div class="menuLink"><a href="../home.html">Logout</a></div>
    </div>
    <div id="pageContent">
    
   <div class="articleTitle">
<p align="left">
<?php
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
			$sql="select points from info;";
			if($result=mysqli_query($link,$sql))
			{
				if(mysqli_num_rows($result)>0)
				{
					if($row=mysqli_fetch_array($result))
					{
					echo "&nbspSCORE:".$row['points'];

					}
					mysqli_free_result($result);
				}
				else
				{
					echo"<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEnter a valid username and password!</h3>";
					echo "<p>&nbsp;</p>
					<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTo Tryagain&raquo;
					<a href='".$address."'>click Here</a></h1>";
				}
			}
			else
			{
				echo"<br>";
				echo "<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUnsuccessful login<h3>";
			}
			mysqli_close($link);?>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPLAY NOW&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img id="slide" src="../images/5.png" alt="" style="width:48px;height:48px;">
<!--<img src="../images/countdown.gif" style="width:48px;height:48px;">-->



</p>
</div>



        
        
      <div class="articleContent">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="../images/black.jpg" align="center"><br><br><br><br>
	
   
	</div>


<button type="submit" class="button" style="margin-left:5em" onClick="test()">OK</button><a href="p1.html"><button type="button" class="tool" style="margin-left:7em" onclick="rig.play()">NO</button></a>





    </div>

</div>

    <div id="footer">MAGIC COLOR STUDIOS </a></div>
        
</body>
</html>
