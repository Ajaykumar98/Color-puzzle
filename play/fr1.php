<!DOCTYPE>	
<html>
<!--oncontextmenu="return false"-->

  <frameset framespacing="0" cols="0%, 50%" framespacing="0" frameborder=no>
    <frame frameborder="0" src="sounds.html" scrolling="no" noresize="1" />
    <frame frameborder="0" src="../home1.php"/>
  </frameset>
<?php
			$link=mysqli_connect("localhost","root","","project");
			$s1="SELECT count FROM music";
			$l1=mysqli_query($link,$s1);
			$f1=mysqli_fetch_assoc($l1);
			$a1=$f1['count'];
			if($a1==3)
			{
				$b1="UPDATE music SET count=0";
				$c1=mysqli_query($link,$b1);
				header('Refresh: 0; URL=fr2.php');
			}


?>
</html>