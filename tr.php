<?php
			
			$link=mysqli_connect("localhost","root","","project");
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
		$sql="SELECT SCORE FROM MARKS";
			
			if($result=mysqli_query($link,$sql))
			{
			
					if($row=mysqli_fetch_array($result))
					{
					echo "&nbspSCORE:".$row['SCORE'];

					}	
			
			}
			else
			{
				echo"<br>";
				echo "<h3>Unsuccessful registration<h3>".mysqli_error($link);
			}
			if($row['SCORE']==7)
			{
				header('Location: https://www.google.co.in', true, 301);
				die();
				exit;
			}
			mysqli_close($link);
			?>