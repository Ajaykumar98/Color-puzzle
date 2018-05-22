<!DOCTYPE >
<html >
<head>
	<title>Color puzzle</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../colormatch.css" />
<style type="text/css">
</style></head>

<body oncontextmenu="return false">
<div id="page"> 
    <div id="header">
    	<div class="title"><marquee>Inception puzzle</marquee></div>
        <div class="subText">By DOM COBB</div>
    </div>
    <div id="bar">
        <div class="menuLink"><!--<a href="../home.html">Logout</a>--></div>
    </div>
    <div id="pageContent">
    
   <div class="articleTitle">
<p align="left">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  WAIT WHILE LOADING
<?php
			header('Refresh:4; URL=load2.php');
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			$u1="TRUNCATE TABLE info";
			$l1=mysqli_query($link,$u1);
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());

			}
			$s1="SELECT count FROM music";
			$l1=mysqli_query($link,$s1);
			$f1=mysqli_fetch_assoc($l1);
			$a1=$f1['count'];
			if($a1<9)
		{
			$sql="UPDATE info SET points=points+1";
			$result=mysqli_query($link,$sql);
			$cnt="UPDATE music SET count=count+1";
		 
		        $rsl=mysqli_query($link,$cnt);
		}
		if($a1==9){	
				
		      	echo '
<script type="text/javascript">
   parent.window.location.reload(true);
</script>
';
			}
			
			mysqli_close($link);?>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<!--<img id="slide" src="../images/3.png" alt="" style="width:48px;height:48px;">-->



</p><br>

</div>



        
        
      <div class="articleContent">
    <!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="../images/maroonw.jpg" align="center"><br><br><br><br>-->

	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="../images/load.gif">
   
	</div>
    </div>

</div>

    <div id="footer">DEVELOPED BY AJAY</a></div>
        
</body>
</html>
