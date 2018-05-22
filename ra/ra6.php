<html>
<head>
<style>
.cors { position: relative; top: 0; left: 0; } .cor { position: absolute; top: 80px; left: 170px;}
#outPopUp {
  position: absolute;
  width: 300px;
  height: 300px;
  z-index: 15;
  top: 30%;
  left: 40%;
  margin: -100px 0 0 -150px;
 }
</style>
</head>
<body bgcolor="green"><br><br><br><br><br><br><br><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="../images/clap.gif" style="width:304px;height:228px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div  id="outPopUp"> <img src="../images/border.gif" class="cors"/><img src="../images/correct-animated.gif" class="cor"/> </div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="../images/bulb.gif" style="width:304px;height:228px;">
<audio autoplay loop>
  <source src="../sounds/cheer.mp3" type="audio/mp3">
</audio>
<audio autoplay>
  <source src="../sounds/win.mp3" type="audio/mp3">
</audio>

<?php
			
			header('Refresh: 3; URL=../play/lvl3.php');
			$link=mysqli_connect("localhost","root","","project");
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
		$sql="UPDATE info SET points=points+2";
		$cnt="UPDATE music SET count=count+1";
		 
		         if($rsl=mysqli_query($link,$cnt))	
		       {	if($result=mysqli_query($link,$sql))
			{
				
			
			}
			else
			{
				echo"<br>";
				echo "<h3>Unsuccessful registration<h3>".mysqli_error($link);
			}
		         }
			
			
				mysqli_close($link);
			?>
</body>
</html>