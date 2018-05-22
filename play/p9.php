<!DOCTYPE >
<html >
<head>
	<title>Color puzzle</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../colormatch.css" />
<style type="text/css">
</style></head>
<script>
var images = new Array()
images[0] = "../images/4.png";
images[1] = "../images/3.png";
images[2] = "../images/2.png";
images[3] = "../images/1.png";
images[4] = "../images/03.png";
<!--images[4] = "1.png";-->
var x=0;
var timerid=setInterval("changeImage()", 1000);
function changeImage()
{
document.getElementById("slide").src=images[x];
if(x<4)
	x++;
else
	x=0;
}
</script>
<body oncontextmenu="return false">
<div id="page"> 
    <div id="header">
    	<div class="title"><marquee>Color puzzle</marquee></div>
        <div class="subText">By DOM COBB</div>
    </div>
    <div id="bar">
        <div class="menuLink"><a href="../home.html">Logout</a></div>
    </div>
    <div id="pageContent">
    
   <div class="articleTitle">
<p align="left">
<?php
			header('Refresh: 4.25; URL=../wa/wa9.php');
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

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQ NO : 9&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img id="slide" src="../images/5.png" alt="" style="width:48px;height:48px;">
<!--<img src="../images/countdown.gif" style="width:48px;height:48px;">-->



</p>
</div>



        
        
      <div class="articleContent">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="../images/bluew.jpg" align="center"><br><br><br><br>
	
   
	</div>

<form action="../ra/ra9.php" method="post">
 <input type="submit" class="tool" value="NO" style="margin-left:5em"><a href="../wa/wa9.php"><input type="button" class="button" value="OK" style="margin-left:7em"></a>
</form>



    </div>

</div>

    <div id="footer">DEVELOPED BY AJAY</a></div>
        
</body>
</html>
