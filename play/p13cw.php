<?php
			
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			$a='$_POST[uname]';
			if((strcmp($_POST[uname],"noonetoblame"))==0)
			{
				header('Refresh: 0; URL=../ra/ra13.php');
			}
			else
			{
				header('Refresh: 0; URL=../wa/wa13.php');
			}
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