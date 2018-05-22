<!DOCTYPE >
<html >
<head>
	<title>Color puzzle</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../colormatch.css" />
<style type="text/css">
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 3px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
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
<?php
			
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
			$cnt="UPDATE music SET count=count+1";
		 
		        $rsl=mysqli_query($link,$cnt);	
			
			$sql="select points from info;";
			$result=mysqli_query($link,$sql);
			$row=mysqli_fetch_array($result);
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYOUR SCORE:".$row['points']."/30";
			mysqli_close($link);?>
<br><br>
<center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLEADERBOARD</center>
	


<!--<a href="board1.php"><button type="button" class="button" style="margin-left:9.5em">REGISTER</button></a>
<br><br><br><br>

<form action="board2.php">
<input type="text" class="ani" style="margin-left:24em" ><br><br>
<input type="submit" class="tool" style="margin-left:16em"  value="SAVE">
</form>-->
</div>      
      <div class="articleContent">



	</div>



    </div>
<table>
<tr>
<th>POSITION</th>
<th>NAME</th>
<th>AGE</th>
<th>SEX</th>
<th>EMAIL ID</th>
<th>PHONE</th>
<th>USERNAME</th>
<th>SCORE</th>
<?php
			
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
			$m0="SELECT username FROM info";
			$l0=mysqli_query($link,$m0);
			$f0=mysqli_fetch_assoc($l0);
			$a0=$f0['username'];
			$m1="SELECT points FROM info";
			$l1=mysqli_query($link,$m1);
			$f1=mysqli_fetch_assoc($l1);
			$m2="SELECT points FROM final WHERE username='$a0';";
			$l2=mysqli_query($link,$m2);
			$f2=mysqli_fetch_assoc($l2);
			$a1=$f1['points'];
			$a2=$f2['points'];
			if ( $a2 > $a1 )
			{
				$max=$a2;
			}
			else {
				$max=$a1;
			}
			$up1="UPDATE final SET points='$max' WHERE username='$a0';";
			$li1=mysqli_query($link,$up1);
			mysqli_free_result($l1);
			mysqli_free_result($l2);
			mysqli_free_result($l0);
			
			$table="SELECT * FROM final ORDER BY points DESC";
			$records=mysqli_query($link,$table);
			$i=0;
			while($user=mysqli_fetch_assoc($records)){
			$i++;
			if($i<6)
			{
			echo "<tr>";	
			echo "<td>"."<div style='text-align:center;color:#800000;font-weight:bold'>". $i."</div>"."</td>";
			echo "<td>"."<div style='text-align:center;color:#800000;font-weight:bold'>".$user['name']."</td>";
			echo "<td>"."<div style='text-align:center;color:#800000;font-weight:bold'>".$user['age']."</td>";
			echo "<td>"."<div style='text-align:center;color:#800000;font-weight:bold'>".$user['sex']."</td>";
			echo "<td>"."<div style='color:#800000;font-weight:bold'>".$user['email_id']."</td>";
			echo "<td>"."<div style='text-align:center;color:#800000;font-weight:bold'>".$user['phonenumber']."</td>";
			echo "<td>"."<div style='text-align:center;color:#800000;font-weight:bold'>".$user['username']."</td>";
			echo "<td>"."<div style='text-align:center;color:#800000;font-weight:bold'>".$user['points']."</div>"."</td>";
			echo "</tr>";
			}
			else
			{
			echo "<tr>";	
			echo "<td>"."<div style='text-align:center;'>". $i."</div>"."</td>";
			echo "<td>"."<div style='text-align:center;'>".$user['name']."</td>";
			echo "<td>"."<div style='text-align:center;'>".$user['age']."</td>";
			echo "<td>"."<div style='text-align:center;'>".$user['sex']."</td>";
			echo "<td>".$user['email_id']."</td>";
			echo "<td>"."<div style='text-align:center;'>".$user['phonenumber']."</td>";
			echo "<td>"."<div style='text-align:center;'>".$user['username']."</td>";
			echo "<td>"."<div style='text-align:center;'>".$user['points']."</div>"."</td>";
			echo "</tr>";
			}
			}
			mysqli_free_result($records);
			mysqli_close($link);?>
</table>
<br><br>
<!--<a href="load1.php"><button type="button" class="button" style="margin-left:2em">RETRY</button></a>-->
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="load2.php"><button type="button" class="tool" style="margin-left:2em">BACK TO HOME</button></a>

</div>
<div id="footer">DEVELOPED BY AJAY</div>
    
  </body>
</html>
