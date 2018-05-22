<!DOCTYPE>	
<html>
<!--oncontextmenu="return false"-->
<?php
			$link=mysqli_connect("localhost","root","","project");
			$s1="SELECT count FROM music";
			$l1=mysqli_query($link,$s1);
			$f1=mysqli_fetch_assoc($l1);
			$a1=$f1['count'];
			if($a1==6)
			{
				$b1="UPDATE music SET count=0";
				$c1=mysqli_query($link,$b1);
				header('Refresh: 0; URL=fr3.php');
			}


?>
  <frameset framespacing="0" cols="0%, 50%" framespacing="0" frameborder=no>
    <frame frameborder="0" src="sounds2.html" scrolling="no" noresize="1" />
    <frame frameborder="0" src="lvl2.php"/>
  </frameset>

</html>