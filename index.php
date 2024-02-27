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
  padding:250px;
  background:url("images/alu.jpeg");
  background-repeat: no-repeat;
  background-size: 100%  100%;
  border-radius:5px;
  height:700px;
   border-radius:10px;
    text-align:left;
   font-size:35px;
   color:#ffffff;
}
</style>
</head>
<h2 class="me">STUDENT MENTOR MENTEE PROCESS</h2>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a class="active" href="index.php"><strong>Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="admin.php"><strong>Admin login</a></li>
 	<li><a href="#">&nbsp;</a></li>
  <li><a href="stud.php"><strong>Student Login</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="alumni.php"><strong>Alumni Login</a></li>
 
</ul>
<br />
<br />


<div id="bg1"></div>


<div> &nbsp;</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer"></div>
