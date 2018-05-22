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
<script src="login.js">
function red(){
windows.location.assign("r.html");

}
</script>
<body>
<div id="page"> 
    <div id="header">
    	<div class="title">Color puzzle</div>
        <div class="subText">By Ajay kumar</div>
    </div>
    <div id="bar">
        <div ></div>
    </div>
    <div id="pageContent">
    
    <center><div class="articleTitle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUSER PROFILE</div></center>
<table>
<?php
			$link=mysqli_connect("localhost","root","","project");
			$address='login.html';
			if($link==false)
			{
				die("ERROR:Could not connect.".mysqli_connect_error());
			}
			$sql="select name from final where username='$_POST[uname]' and password='$_POST[password]';";
			if($result=mysqli_query($link,$sql))
			{
				if(mysqli_num_rows($result)>0)
				{
					if($row=mysqli_fetch_array($result))
					{
			$s1="SELECT name FROM final where username='$_POST[uname]' and password='$_POST[password]';";
			$l1=mysqli_query($link,$s1);
			$f1=mysqli_fetch_assoc($l1);
			$a1=$f1['name'];
			$s2="SELECT DOB FROM final where username='$_POST[uname]' and password='$_POST[password]';";
			$l2=mysqli_query($link,$s2);
			$f2=mysqli_fetch_assoc($l2);
			$a2=$f2['DOB'];
			$s3="SELECT sex FROM final where username='$_POST[uname]' and password='$_POST[password]';";
			$l3=mysqli_query($link,$s3);
			$f3=mysqli_fetch_assoc($l3);
			$a3=$f3['sex'];
			$s4="SELECT email_id FROM final where username='$_POST[uname]' and password='$_POST[password]';";
			$l4=mysqli_query($link,$s4);
			$f4=mysqli_fetch_assoc($l4);
			$a4=$f4['email_id'];
			$s5="SELECT phonenumber FROM final where username='$_POST[uname]' and password='$_POST[password]';";
			$l5=mysqli_query($link,$s5);
			$f5=mysqli_fetch_assoc($l5);
			$a5=$f5['phonenumber'];
			$s6="SELECT username FROM final where username='$_POST[uname]' and password='$_POST[password]';";
			$l6=mysqli_query($link,$s6);
			$f6=mysqli_fetch_assoc($l6);
			$a6=$f6['username'];
			$s7="SELECT age FROM final where username='$_POST[uname]' and password='$_POST[password]';";
			$l7=mysqli_query($link,$s7);
			$f7=mysqli_fetch_assoc($l7);
			$a7=$f7['age'];
			$s8="SELECT password FROM final where username='$_POST[uname]' and password='$_POST[password]';";
			$l8=mysqli_query($link,$s8);
			$f8=mysqli_fetch_assoc($l8);
			$a8=$f8['password'];
			$i1="INSERT INTO info"."(name,DOB,age,sex,email_id,phonenumber,username,password,points)". "VALUES('$a1','$a2',$a7, '$a3', '$a4', '$a5', '$a6','$a8',0)";
			$li1=mysqli_query($link,$i1);
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
					mysqli_free_result($result);
				}
				else
				{
					header('Refresh: 0; URL=log3.php');
				}
			}
			else
			{
				header('Refresh: 0; URL=log3.php');
			}
			
			
			$tr="TRUNCATE profile";
			$rt=mysqli_query($link,$tr);
			mysqli_close($link);?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="play/p1.php"><button type="button" class="round" style="margin-left:2em"><span>PLAY</span></button></a>

   </div>

</div>
			
    <div id="footer">MAGIC COLOR STUDIOS </a></div>
        
</body>
</html>
