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
images[0] = "../images/9.png";
images[1] = "../images/8.png";
images[2] = "../images/7.png";
images[3] = "../images/6.png";
images[4] = "../images/5.png";
images[5] = "../images/4.png";
images[6] = "../images/3.png";
images[7] = "../images/2.png";
images[8] = "../images/1.png";
images[9] = "../images/03.png";
var x=0;
var timerid=setInterval("changeImage()", 1000);
function changeImage()
{
document.getElementById("slide").src=images[x];
if(x<9)
	x++;
else
	x=0;
}

</script>

<body oncontextmenu="return false">
<div id="page"> 
    <div id="header">
    	<div class="title"><marquee>Guessing Challenge</marquee></div>
        <div class="subText">By DOM COBB</div>
    </div>
    <div id="bar">
        <div></div>
    </div>
    <div id="pageContent">
    
   <div class="articleTitle">
<p align="left">
<?php
			header('Refresh: 9.25; URL=../wa/wa10.php');
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
			$sl="UPDATE info SET points=points-1";
		
		       	$rsl=mysqli_query($link,$sl);
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

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspQ NO :10&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img id="slide" src="../images/10.png" alt="" style="width:48px;height:48px;">



</p>
</div>
 

        
        
      <div class="articleContent">
   <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="../images/e1.jpg" align="center"><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCLUE:E=MC^2
	<form action="p10cw.php" method="post">
 <input type="text" class="ani"  style="margin-left:7em" name="uname"><input type="submit" value="GUESS" class="tool" style="margin-left:3em">
</form>
	</div>




    </div>



</div>



    <div id="footer">DEVELOPED BY AJAY</a></div>
        
</body>
</html>
