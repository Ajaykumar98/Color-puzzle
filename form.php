<!DOCTYPE >
<html >
<head>
	<title>Color puzzle</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="colormatch.css" />
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
<script src="form.js">
function red(){
windows.location.assign("r.html");

}
</script>
<body oncontextmenu="return false">
<div id="page"> 
    <div id="header">
    	<div class="title"><marquee>Inception puzzle</marquee></div>
        <div class="subText">By Ajay kumar</div>
    </div>
    <div id="bar">
       
    </div>
    <div id="pageContent">
    
    <center><div class="articleTitle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUSER PROFILE<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="images/pop2.png" style="width:228px;height:228px;"></div></center>
  <table>
<?php
			/*create table info(name varchar(50),DOB varchar(20),age int,sex varchar(10),
			email_id varchar(20),phonenumber varchar(15),username varchar(20),password varchar(20));*/
			$link=mysqli_connect("localhost","root","","project");
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
			$sql="insert into info VALUES('$_POST[name]','$_POST[dob]','$_POST[age]','$_POST[gender]','$_POST[email]','$_POST[pnum]','$_POST[uname]','$_POST[password]',0)";
			if(mysqli_query($link,$sql))
			{
						
			$s1="SELECT name FROM info";
			$l1=mysqli_query($link,$s1);
			$f1=mysqli_fetch_assoc($l1);
			$a1=$f1['name'];
			$s2="SELECT DOB FROM info";
			$l2=mysqli_query($link,$s2);
			$f2=mysqli_fetch_assoc($l2);
			$a2=$f2['DOB'];
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
			$i=1;
			while($i<7){
			if($i==1)
			{
			$i1="INSERT INTO profile"."(field,info)". "VALUES('NAME','$a1')";
			$li1=mysqli_query($link,$i1);
			}
			if($i==2)
			{
			$i1="INSERT INTO profile"."(field,info)". "VALUES('DOB','$a2')";
			$li1=mysqli_query($link,$i1);
			}
			if($i==3)
			{
			$i1="INSERT INTO profile"."(field,info)". "VALUES('SEX','$a3')";
			$li1=mysqli_query($link,$i1);
			}
			if($i==4)
			{
			$i1="INSERT INTO profile"."(field,info)". "VALUES('EMAIL ID','$a4')";
			$li1=mysqli_query($link,$i1);
			}
			if($i==5)
			{
			$i1="INSERT INTO profile"."(field,info)". "VALUES('MOBILE NUMBER','$a5')";
			$li1=mysqli_query($link,$i1);
			}
			if($i==6)
			{
			$i1="INSERT INTO profile"."(field,info)". "VALUES('USERNAME','$a6')";
			$li1=mysqli_query($link,$i1);
			}
			$i++;
			}
			mysqli_free_result($l1);
			mysqli_free_result($l2);
			mysqli_free_result($l3);
			mysqli_free_result($l4);			
			mysqli_free_result($l5);			
			mysqli_free_result($l6);
						echo"<br>";
			$table="SELECT * FROM profile";
			$records=mysqli_query($link,$table);
			while($user=mysqli_fetch_assoc($records)){
			
			echo "<tr>";	
			echo "<td>"."<div style='text-align:center;color:#800000;font-weight:bold'>". $user['field']."</div>"."</td>";
			echo "<td>"."<div style='text-align:center;color:#800000'>".$user['info']."</td>";
			echo "</tr>";
			
			}
			}
			else
			{
				echo"<br>";
				echo "<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUnsuccessful registration<h3>".mysqli_error($link);
			}
			
			$tr="TRUNCATE profile";
			$rt=mysqli_query($link,$tr);
			mysqli_close($link);?>
</table>
<br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"ONCE YOU START PLAYING, THE CHALLENGE WILL GO ON AND YOU CANNOT STOP IN THE MIDDLE OR GO BACK"<br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="play/part1.php"><button type="button" class="round" style="margin-left:2em"><span>PLAY</span></button></a>
  </div>
	
</div>
        
    <div id="footer">DEVELOPED BY AJAY</a></div>
        
</body>
</html>
