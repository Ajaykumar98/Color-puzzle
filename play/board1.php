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
			$s1="SELECT name FROM info";
			$l1=mysqli_query($link,$s1);
			$f1=mysqli_fetch_assoc($l1);
			$a1=$f1['name'];
			$s2="SELECT age FROM info";
			$l2=mysqli_query($link,$s2);
			$f2=mysqli_fetch_assoc($l2);
			$a2=$f2['age'];
			$s3="SELECT sex FROM info";
			$l3=mysqli_query($link,$s3);
			$f3=mysqli_fetch_assoc($l3);
			$a3=$f3['sex'];
			$s4="SELECT email_id FROM info";
			$l4=mysqli_query($link,$s4);
			$f4=mysqli_fetch_assoc($l4);
			$a4=$f4['email_id'];
			$s5="SELECT phonenumber FROM info";
			$l5=mysqli_query($link,$s5);
			$f5=mysqli_fetch_assoc($l5);
			$a5=$f5['phonenumber'];
			$s6="SELECT username FROM info";
			$l6=mysqli_query($link,$s6);
			$f6=mysqli_fetch_assoc($l6);
			$a6=$f6['username'];
			$s7="SELECT points FROM info";
			$l7=mysqli_query($link,$s7);
			$f7=mysqli_fetch_assoc($l7);
			$a7=$f7['points'];
			$s8="SELECT password FROM info";
			$l8=mysqli_query($link,$s8);
			$f8=mysqli_fetch_assoc($l8);
			$a8=$f8['password'];
			$s9="SELECT DOB FROM info";
			$l9=mysqli_query($link,$s9);
			$f9=mysqli_fetch_assoc($l9);
			$a9=$f9['DOB'];
			$i1="INSERT INTO final"."(name,age,sex,email_id,phonenumber,username,points,password,DOB)". "VALUES('$a1',$a2, '$a3', '$a4', '$a5', '$a6', $a7,'$a8','$a9')";
			$li1=mysqli_query($link,$i1);
			mysqli_free_result($l1);
			mysqli_free_result($l2);
			mysqli_free_result($l3);
			mysqli_free_result($l4);			
			mysqli_free_result($l5);			
			mysqli_free_result($l6);
			mysqli_free_result($l7);
			mysqli_free_result($l8);
			mysqli_free_result($l9);
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
