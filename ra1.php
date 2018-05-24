<?php
			
			$link=mysqli_connect("localhost","root","","project");
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
		$sql="UPDATE MARKS SET SCORE=SCORE+1";
			
			if($result=mysqli_query($link,$sql))
			{
			echo $result;	
			
			}
			else
			{
				echo"<br>";
				echo "<h3>Unsuccessful registration<h3>".mysqli_error($link);
			}
			mysqli_close($link);
			?>