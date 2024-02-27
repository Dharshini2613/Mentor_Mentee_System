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
            	$max_qry = mysqli_query($connect,"select max(Id) from alumni");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(Id)']+1;
		$qry=mysqli_query($connect,"insert into alumni values('$id','$name','$gender','$age','$year','$dept','$desig','$email','$phone','$uname','$psw','','$img')");
	if($qry)
	{
	?>
<script>alert('welcome to Alumni Login page');
</script>
<?php
header("location:alumni.php");
	
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
  <li><a href="stud.php"><strong>Student Login</a></li>
   <li><a href="#">&nbsp;</a></li>
  <li><a class="active" href="alumni.php"><strong>Alumni Login</a></li>


</ul>
<br />
<br />
<body>
<script>
  function name()
{
  var name=/^[a-zA-Z ]{3,20}$/;
   if(document.f1.name.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.name.focus();
	 return false;
	 }
	}
		 function age()
{
  var age=/^[0-9]{1,3}$/;
   if(document.f1.age.value.search(age)==-1)
    {
	 alert("enter correct age");
	 document.f1.age.focus();
	 return false;
	 }
	} 
		 function phone()
{
  var phone=/^[0-9]{10}$/;
   if(document.f1.phone.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.phone.focus();
	 return false;
	 }
	} 
	function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.email.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.email.focus();
	 return false;
	 }
	}
		function address()
{
 	var address=/^[a-zA_Z0-9 ,#]{5,100}$/;
   if(document.f1.address.value.search(address)==-1)
    {
	 alert("enter correct address");
	 document.f1.address.focus();
	 return false;
	 }
	} 
		 function loc()
{
  var loc=/^[a-zA-Z ]{3,20}$/;  
   if(document.f1.loc.value.search(loc)==-1)
    {
	 alert("enter correct Location");
	 document.f1.loc.focus();
	 return false;
	 }
	} 
		  function uname()
{
  var uname=/^[a-zA_Z0-9]{3,100}$/;
   if(document.f1.uname.value.search(uname)==-1)
    {
	 alert("enter correct name");
	 document.f1.uname.focus();
	 return false;
	 }
	}
		function psw()
{
 	var psw=/^[a-zA_Z0-9]{5,100}$/;
   if(document.f1.psw.value.search(psw)==-1)
    {
	 alert("enter correct address");
	 document.f1.psw.focus();
	 return false;
	 }
	} 
	function vali()
	{
	var name=/^[a-zA-Z ]{3,20}$/;  
	var age=/^[0-9]{1,3}$/;
	var phone=/^[0-9]{10}$/;
	var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	var loc=/^[a-zA-Z ]{3,20}$/;
	var address=/^[a-zA_Z0-9 ,#]{5,100}$/;
	var psw=/^[a-zA_Z0-9]{3,100}$/;
	var uname=/^[a-zA_Z0-9]{3,100}$/;
	 //var mesg=/^[a-zA_Z0-9]{10,300}$/;
   if(document.f1.name.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.name.focus();
	 return false;
	 }
	 	  else if(document.f1.age.value.search(age)==-1)
    {
	 alert("enter correct Age");
	 document.f1.age.focus();
	 return false;
	 }
	  else if(document.f1.phone.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.phone.focus();
	 return false;
	 }
		 else if(document.f1.email.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.email.focus();
	 return false;
	 }
		  else if(document.f1.loc.value.search(loc)==-1)
    {
	 alert("enter correct Location");
	 document.f1.loc.focus();
	 return false;
	 }
	 
	  else if(document.f1.address.value.search(address)==-1)
    {
	 alert("enter correct address");
	 document.f1.address.focus();
	 return false;
	 }
	 	  if(document.f1.uname.value.search(uname)==-1)
    {
	 alert("enter correct user name");
	 document.f1.uname.focus();
	 return false;
	 }
	 	  else if(document.f1.psw.value.search(psw)==-1)
    {
	 alert("enter correct password");
	 document.f1.psw.focus();
	 return false;
	 }
		 else
	 	 {
	 return true;
	 }
	}
	</script>
	
	
	<div class="row">
  <div class="column" style="background-color:#fff;">
   
 <img src="images/admin.jpg" width="50%"/>  
  </div>
    <div class="column" style="background-color:#fff;">
<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()" enctype="multipart/form-data">
  <table width="35%" border="0" align="center">
	    <tr>
          <td colspan="2"  align="center" ><div class="style5"><h3>New Alumni Registration</h3></div></td>
    </tr>
	    <tr>
           <td width="40%" height="57">Name</td>
      <td width="60%"><input name="name" type="text" id="name" required />
      </td>
          </tr>
	    <tr>
           <td height="60">Gender</td>
      <td><input name="gender" type="radio" value="male" required />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
         </tr>
	    <tr>
           <td height="53">Age</td>
      <td>
        <input name="age" type="text" id="age" required  />
      </td>
         </tr>
	 <tr>
      <td height="62">Passed Out Year</span></td>
      <td><input name="year" type="text" id="year" required /></td>
          </tr>
   	  <tr>
      <td height="62">Department</span></td>
      <td><input name="dept" type="text" id="dept" required /></td>
          </tr>
	 <tr>
      <td height="62">Designation </span></td>
      <td><input name="desig" type="text" id="ocup" required /></td>
      
    </tr>
	 <tr>
      <td height="55">Email Id</td>
      <td><input name="email" type="text" id="email" required /></td>
    </tr>
	 <tr>
      <td height="55">Phone</td>
      <td><input name="phone" type="text" id="phone"  required/></td>
    </tr>
	
	
	 <tr>
      <td height="62">Upload Profile</td>
      <td><input name="img" type="file" required /></td>
    </tr>
	
	
	
	    <tr>
      <td height="62">User Name</td>
      <td><input name="uname" type="text" id="uname"  required/></td>
    </tr>
	   <tr>
     <td height="57">Password</td>
      <td><input name="psw" type="password" id="psw" required /></td>
    </tr>
	<tr>
      <td height="75">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>

</div>
</div>
<br/>
<br/>
<br>
<br>

