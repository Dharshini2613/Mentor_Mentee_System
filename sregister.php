<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
	
	
if(isset($_POST['btn']))
{


$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);
$img=$file_name;
    	$max_qry = mysqli_query($connect,"select max(Id) from register");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(Id)']+1;
$qry=mysqli_query($connect,"insert into register values('$id','$name','$gender','$dob','$email','$phone','$dept','$year','$reg','0','$img')");
	if($qry)
	{
	echo "<script>alert('Registered sucessfully')</script>";
		}
	else
	{
	echo "failed";
	}
}
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
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a  href="index.php"><strong>Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="admin.php"><strong>Admin login</a></li>
 	<li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="stud.php"><strong>Student Login</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a href="alumni.php"><strong>Alumni Login</a></li>
  
</ul>
<br />
<br />
<div class="row">
  <div class="column" style="background-color:#fff;">
   
 <img src="images/student.jpg" width="50%"/>  
  </div>
  <div class="column" style="background-color:#fff;">
 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()" enctype="multipart/form-data">
  <table width="50%" border="0" align="left">	
   <tr>
         <td colspan="2"  align="center" ><div class="style5"><h3>New Student Registration</h></div></td>
          </tr>
	    <tr>
          <td width="44%" height="55"><span class="style6">Student Name</span></td>
      <td width="56%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>    
    </tr>
	
    <tr>    
      <td height="55"><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
          </tr>
	    <tr>
           <td height="48"><span class="style6">Date Of Birth</span></td>
      <td><label>
        <input name="dob" type="date" id="dob" required />
      </label></td>
         </tr>
	    <tr>
            <td height="55">Email Id</td>
      <td><input name="email" type="text" id="email" required/></td>
         </tr>
	  <tr>
            <td height="53">Phone Number </td>
      <td><input name="phone" type="text" id="phone" required/></td>
         </tr>
		<tr>
           <td height="49">Department</td>
      <td><input type="text" name="dept" id="dept" required></td>
         </tr>
  <tr>
          <td height="49">Year</td>
      <td><input type="text" name="year" id="year" required></td>
          </tr>
		   <tr>
      <td height="62">Upload Profile</td>
      <td><input name="img" type="file" required /></td>
    </tr>
	    <tr>
          <td height="59">Register Number</td>
      <td><input name="reg" type="text" id="reg" required></td>
         </tr>
	<tr>
           <td height="51">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
<br>
<br>
</div>
</div>

