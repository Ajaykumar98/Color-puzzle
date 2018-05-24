<!DOCTYPE >
<html >
<head>
	<title>Color puzzle</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="colormatch.css" />
<style type="text/css">
</style></head>
<script src="login.js">
function red(){
windows.location.assign("r.html");

}
</script>
<body>
<div id="page"> 
    <div id="header">
    	<div class="title">Color puzzle</div>
        <div class="subText">By Ajay kumar</div>
    </div>
    <div id="bar">
        <div ></div>
    </div>
    <div id="pageContent">
    
    <div class="articleTitle"><center>LOGIN STATUS</center></div>
<a href="#"><button class="rover" style="vertical-align:middle"><span>NEW USER</span></button></a><br>
<a href="#"><button class="rover" style="vertical-align:middle"><span>REGISTERED USER</span></button></a>
   <!--
<a href="#"><button class="rover" style="vertical-align:middle"><span>START</span></button></a>
<?php
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
			$sql="select name from info where username='$_POST[uname]' and password='$_POST[password]';";
			if($result=mysqli_query($link,$sql))
			{
				if(mysqli_num_rows($result)>0)
				{
					if($row=mysqli_fetch_array($result))
					{
						echo"<br>";
						echo "<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYou have successfully logged in!<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['name'];
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
-->
   </div>

</div>
			
    <div id="footer">MAGIC COLOR STUDIOS </a></div>
        
</body>
</html>
