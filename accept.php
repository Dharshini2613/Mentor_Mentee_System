<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
	$id=$_GET['id'];
	

$qry=mysqli_query($connect,"update alumni set status='accepted' where id =$id");
if($qry){?>
		 <script> alert('Accepted successfully')
window.location.href=("valumni.php");</script>
<?php }  ?>