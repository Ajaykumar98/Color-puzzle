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

<body>
<audio autoplay loop>
  <source src="../sounds/cheer.mp3" type="audio/mp3">
</audio>
<audio autoplay>
  <source src="../sounds/win.mp3" type="audio/mp3">
</audio>
<div id="page"> 
    <div id="header">
    	<div class="title"><marquee>Color puzzle</marquee></div>
        <div class="subText">By Ajay kumar</div>
    </div>
    <div id="bar">
        <div></div>
    </div>
    <div id="pageContent">
    
   <div class="articleTitle">
<p align="left">

<?php
			header('Refresh: 3; URL=../play/lvl5.php');
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
			$sql="select points from info;";
		$sl="UPDATE info SET points=points+2";
		$cnt="UPDATE music SET count=count+1";
		 
		         if($rsl=mysqli_query($link,$cnt))	
		       {	if($rsult=mysqli_query($link,$sl))
			{
				
			
			}
			else
			{
				echo"<br>";
				echo "<h3>Unsuccessful registration<h3>".mysqli_error($link);
			}
		         }
			
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

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspVLADAMIR PUTIN



</p>
</div>



        
        
      <div class="articleContent">
    <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="../images/p2.jpg" align="center"><br><br><br><br>
	
   
	</div>




    </div>



</div>

    <div id="footer">MAGIC COLOR STUDIOS </a></div>
        
</body>
</html>
