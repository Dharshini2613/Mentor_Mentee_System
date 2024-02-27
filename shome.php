<?php
include("dbconnect.php");
session_start();
extract($_POST);
 $sid=$_SESSION['sreg'];




$qrt=mysqli_query($connect,"select * from register where reg='$sid'");
$r=mysqli_fetch_array($qrt);
 $sname=$r['name'];


if(isset($_POST['btn']))
{

 date_default_timezone_set("Asia/Calcutta"); 


$max_qry = mysqli_query($connect,"select max(id) from friends");
	$max_row = mysqli_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
	$date=date("d-m-y");
	$t=$date.' / ' .date("h:i.a");
	$qrt=mysqli_query($connect,"insert into friends values('$id','$sid','$sname','','student','$message','$t')");
	if($qrt)
	{
	header("location:shome.php");
	}
	else
	{
	?>
<script language="javascript">
	alert("Commant Not Sent");
	window.location.href="shome.php";
	</script>
	<?php
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

<body style="height:1800px;overflow-y:hidden;background:#f0f2f5;">
<h2 class="me">STUDENT MENTOR MENTEE PROCESS</h2>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a  class="active" href="shome.php"><strong>Home</a></li>
    <li><a href="#">&nbsp;</a></li>
  <li><a href="index.php"><strong>Logout</a></li>
  
</ul>
<br />












 <form action="" method="post" name="form1">
                                      
									
              <div align="center">
                <div style="height:600px;width:900px;border:solid 2px #CCCCCC ;overflow:scroll;overflow-x:hidden;overflow-y:scroll;background:#fff;border-radius:10px;background-image:url('images/wb.jpg')">
                  <table width="80%" border="0" style="margin:20px;" >
				  
				  
				  
				  
				 
				
                    <?php
													$ct=mysqli_query($connect,"select * from friends");
													while($cm=mysqli_fetch_array($ct))
													{ 
													$ssid=$cm['sid'];
													
													
													
													
													
													
													
													$ml=mysqli_query($connect,"select * from register where reg='$ssid'");
													
													
													
													$ml1=mysqli_query($connect,"select * from alumni where Uname='$ssid'");
													
													if(mysqli_num_rows($ml)>0){
													$cmr=mysqli_fetch_array($ml);
													
													}
													
													
													if(mysqli_num_rows($ml1)>0){
													$cmr=mysqli_fetch_array($ml1);
													
													}
													
													?>
                    <tr >
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
					
					
					
					<?php 
					
					if($sid==$ssid){
					
					
					
				?>
					
					
                    <tr>
                      <td width="12%" height="27"><i style='font-size:24px' class='fas'></i></td>
                      <td width="88%" style="font-weight:900;text-align:right;color:#CC0000;postition:absolute;top:10px;">Me<img src="upload/<?php echo $cmr['image'];?>" style="width:50px;height:50px;border-radius:50%;margin-left:5px;border:2px solid black"></td>
					  </tr>
					  
			<?php	
					
					
					
					}else{?>
					
					
                    <tr>
                      <td width="12%" height="27"><i style='font-size:24px' class='fas'></i></td>
                      <td width="88%" style="font-weight:900;"><img src="upload/<?php echo $cmr['image'];?>" style="width:50px;height:50px;border-radius:50%;margin-right:5px;border:2px solid black;"><?php echo $cm['sname'];?>-<?php echo $ssid;?>-<?php echo $cm['type'];?>-<?php
					  
					  if($cm['type']=='mentor'){
					  
					  echo '-'.$cmr['Design'];
					   }  ?>
					 </td>
					  </tr>
					  
			<?php
			
			
			 } 
			
			
			?>		  
					  
					  
					  
                    
                    <tr style="position:relative;top:5px;">
                      <td height="28">&nbsp;</td>
					  
                      <td style="padding:20px 20px;background:#f0f2f5;border-radius:10px;border:1px solid black;"><?php echo $cm['message'];?>...
					  <p style="position:relative;left:220px;top:20px;color:#0033CC;font-size:18px;"><?php echo $cm['status'];?></p>
					  </td>
                    </tr>
                    <?php
													}
													?>
                  </table>
                </div>
             </div>
              <table width="20%" border="0" align="center">
                <tr>
                  <td width="5%">&nbsp;</td>
                  <td width="75%"><label>
                    
                  <div align="right" >
                        <textarea name="message" rows="2" id="message" style="width:850px;height:50px;border:1px soli #ccc;;border;outline:none;font-size:20px;border-radius:20px;text-align:center;padding:10px;"></textarea>
                  </div>
                  </label></td>
                  <td width="18%"><label>
                <img src="images/unnamed.png" style="width:50px;height:50px;position:relative;top:10px;z-index:100px;"> <input  name="btn" value="1"  type="submit" style="background:#FFFFFF;color:#fff;border:1px solid #FFF;">
                  </label></td>
                  <td width="2%">&nbsp;</td>
                </tr>
              </table>
			  </form>



























  
<br>
<br>
</div>
</div>


</body>
</html>