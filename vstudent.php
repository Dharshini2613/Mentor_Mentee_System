<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
?> 
<html>
<title>AWP</title>
<style>
p
{
       color:#000000;
	text-align: center;
	text-transform: uppercase;
	 font-size:35px;
}
ul {
	padding:30px;
	
  list-style-type: none;
  overflow: hidden;
  background:#99ccff;
   background-repeat: no-repeat;
   background-size: 1420px  200px;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:0px;
}
li {
  float: left;
}                                                                                                                              @import url(https://fonts.googleapis.com/css?family=Varela+Round);


.me {
  margin-top: 0px;
  margin-bottom: 10px;
  font-family: sans-serif;
  font-size: 3rem;
  text-align:center;
  background: linear-gradient(to right, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da, #43a047, #eeff41, #f9a825, #ff5722);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

li a {
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover {
  background-color: #99ff33;
}
.active {
  background-color: #99ff33;
}
#footer {
  padding: 30px;
  background: #99ccff;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {
  padding:150px;
  background:url("images/1.png");
  background-repeat: no-repeat;
  background-size: 1420px  300px;
  border-radius:5px;
   border-radius:10px;
    text-align:left;
   font-size:35px;
   color:#ffffff;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<h2 class="me">STUDENT MENTOR MENTEE PROCESS</h2>
<ul>
	
 	 	<li><a href="#">&nbsp;</a></li>
  <li><a  href="valumni.php"><strong>View Alumni</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="vstudent.php"><strong>View Student</a></li>

   <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php"><strong>Logout</a></li>
</ul>
<br />
<br />
<div class="row">
  <div class="column" style="background-color:#fff;">
   
 <img src="images/admin.jpg" width="50%"/>  
  </div>
    <div class="column" style="background-color:#fff;">
  <h2 align="center">All Student Details</h2>
<table align="center" border="1" width="100%">
	   
	   <tr><th>Sl.no </th><th>Student Name </th>  <th>Profile</th>  <th>Year</th><th> Dept </th><th>Email </th><th>Phone </th> </tr>
	   <?php
	 $qt=mysqli_query($connect,"select * from register  ORDER BY reg ASC");
	 $i=1;
	while($rw=mysqli_fetch_array($qt))
	{
		?>
	<tr align="center"><td><?php echo $i;?></td><td><?php echo $rw['name'];?></td>
	<td><img src="upload/<?php echo $rw['image'];?>" style="width:100px;height:100px;>"</td><td><?php echo $rw['year'];?> </td><td> <?php echo $rw['dept'];?></td><td><?php echo $rw['email'];?></td><td><?php echo $rw['phone'];?></td></tr>
 
    <?php

	$i++;
	}
?>
	   
         
       
         
	  </table>

</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer"></div>
