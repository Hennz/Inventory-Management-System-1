<?php
error_reporting(0);
include 'conn.php';
session_start();
$user=$_SESSION['user'];
if($user==null)
{
	header("location:adminlogin.php");
	
}
else
{
$sql="select *  from admin where username='$user'";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
}

?>
<?php
$c=$_GET['a'];
$sql="select * from admin where id='$c'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
$q=$row['username'];
$w=$row['password'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DashBoard</title>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1358px;
	height: 627px;
	z-index: 1;
	top: 1px;
	left: 3px;
	background-image: url(images/beige_paper.png);
}
#apDiv2 {
	position: absolute;
	width: 1141px;
	height: 91px;
	z-index: 1;
	left: 217px;
	top: 4px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px;
	background-image: url(images/bdy-back.jpg);
}
#apDiv4 {
	position: absolute;
	width: 497px;
	height: 42px;
	z-index: 1;
	font-family: "Agency FB";
	font-size: 10px;
	left: 8px;
	top: -10px;
	color: #0000FF;
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	text-shadow: 1px 0 1px #DDD,
               2px 0 2px #c9c9c9,
                3px 0 3px #EEE,
                4px 0 4px  #b9b9b9,
                5px 0 5px #FFF,
                6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
#apDiv15 {
	position: absolute;
	width: 188px;
	height: 47px;
	z-index: 4;
	left: 942px;
	top: 4px;
}
#apDiv19 {
	position: absolute;
	width: 417px;
	height: 28px;
	z-index: 2;
	left: 35px;
	top: 53px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
	font-size: 24px;
	color:#0000FF;
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	text-shadow:  1px 0 1px #DDD,
               2px 0 2px #c9c9c9,
                3px 0 3px #EEE,
                4px 0 4px  #b9b9b9,
                5px 0 5px #FFF,
                6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
#apDiv1 #apDiv2 #apDiv4 p {
	text-align: center;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-weight: bold;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-weight: normal;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
}
#apDiv16 {
	position:absolute;
	width:162px;
	height:41px;
	z-index:3;
	left: 1186px;
	top: 56px;
}
#apDiv5 {
	position: absolute;
	width: 216px;
	height: 626px;
	z-index: 2;
	left: -1px;
	top: 2px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px;
	border-right-style: ridge;
	border-right-color:#FFC;
}
#fifth {
	position: absolute;
	height: 626px;
	z-index: 2;
	left: -1px;
	top: -1px;
	z-index:3;
	opacity:0.7;
	background-color:#000;
	border-top-left-radius:14px;
	border-bottom-left-radius:14px;
}
.one{position:relative;
	padding-top:10px;
	padding-bottom:15px;
	font-family: Verdana, Geneva, sans-serif;
	text-transform:uppercase;
	font-size:18px;
	text-align:center;
	left:1px;
		z-index:10;
		top:8px;
		height:35px;
		text-decoration:none;
		border-top-style:ridge;
		border-bottom-style:ridge;
		border-color:#FFC;
		border-radius:5px;
		width: 216px;
	
		
		}
		a .class1{
			top:20px;
			
		}

#apDiv6 {
	position: absolute;
	width: 460px;
	height: 233px;
	z-index: 3;
	left: 484px;
	top: 201px;
	font-size: 18px;
	font-weight: bold;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png);
}
#apDiv8 {
	position: absolute;
	width: 432px;
	height: 33px;
	z-index: 4;
	left: 14px;
	top: 2px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	text-align: center;
	color: #ffffff;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-color: #136EAC;
}
#apDiv9 {
	position: absolute;
	width: 430px;
	height: 166px;
	z-index: 5;
	left: 15px;
	top: 48px;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png);
}
#apDiv1 #apDiv5 table {
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
#frame
		{
	position: absolute;
	padding: 0%;
	width: 100%;
	height: 100%;
	border-radius: 1.5%;
	left: 2px;
	top: 3px;
		}
		#apDiv3 {
	position:absolute;
	width:1141px;
	height:35px;
	z-index:4;
	left: 217px;
	top: 593px;
	border-radius: 3px;
	background-color:#069;
}
#apDiv17 {
	position:absolute;
	width:529px;
	height:20px;
	z-index:1;
	top: 11px;
	left: 347px;
	text-align: left;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
.styled-button-3 {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:#ffffff;
	background-color:#FA2;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:32px;
	width:190px;
	padding:4px 16px;
	
}
.styled-button-3:hover{
     height:32px;
	 cursor:pointer;
    -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	
    color:#fff;}
	.styled-button-3:active{
    position:relative;
    top:1px;
    background:#fec354;
    background:-webkit-gradient(linear,left top,left bottom,color-stop(#fec354,0),color-stop(#fecd61,1));
    background:-webkit-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-moz-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-o-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:linear-gradient(top, #fec354 0%, #fecd61 100%);
    filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec354', endColorstr='#fecd61',GradientType=0 );
    border-color:#d29a3a #cc9436 #c89133;
    text-shadow:0 1px 0 #fee1a0;
    -webkit-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    -moz-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
}
a:link {color:;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {color:red;
	text-decoration: none;
}
a:active {color:#FFF;
	text-decoration: none;
}
.txtGen{
	border: 1px solid #B9C4CF;
	background: #FFFFFF;
	margin: 5px 30px 0px 30px;
	border-radius:5px;
	padding: 9px;
	display:block;
	font-size:13px;
	width:60%;
	background: 
		-webkit-gradient(
			linear,
			left top,
			left 25,
			from(#FFFFFF),
			color-stop(4%, #fff),
			to(#FFFFFF)
		);
	background: 
		-moz-linear-gradient(
			top,
			#FFFFFF,
			#fff 1px,
			#fff 25px
			);
	-moz-box-shadow: 0px 0px 3px #fff;
	-webkit-box-shadow: 0px 0px 3px #fff;
	box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.1), 0px 2px 3px rgba(104, 122, 144, 0.25) inset;

}
.txtGen:focus{
	background:#fff;
	 -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	text-shadow:0px 1px 1px rgba(0,0,0,0.2);
}
#apDiv7 {
	position:absolute;
	width:173px;
	height:33px;
	z-index:2;
	top: 125px;
}
</style>

</head>

<body>
<?php
$error="";
$q=$_POST['username'];

$w=$_POST['password'];
$c=$_POST['id'];
$d="update admin set username='$q',password='$w' where id =$c";
$sql=mysql_query($d);
if ($sql==1)
{
$_SESSION['id']=$w;
header("location:updateadmin.php");
}
else
{

		
		$error="Update Successful!!!";
}

?>
<div id="apDiv1">
  <div id="apDiv2">
   <div id="apDiv15"><img src="niclogo.png" width="186" height="45" /></div>
    <div id="apDiv4">
    <p>INVENTORY CONTROL SYSTEM</p> </div>
    <div id="apDiv19">ADMINISTRATOR LOGIN</div>
  </div>
  <div id="apDiv16">
<ul id="MenuBar2" class="MenuBarHorizontal">
        <li><a class="MenuBarItemSubmenu" href="#">Notification</a>
          <ul>
            <?php
	  $sql=mysql_query("select * from empregisterform where status='0'");

      $num_row=mysql_num_rows($sql);
	  $sql1=mysql_query("select * from notification where status='unchecked'");
      $num_row1=mysql_num_rows($sql1);
	  ?>
            <li><a href="add new_user.php">New User Registration (<?php echo $num_row ?>)</a></li>
            <li><a href="notification.php">Item Report (<?php echo $num_row1 ?>)</a></li>
          </ul>
        </li>
</ul>
  </div>
 <div id="apDiv5">
       <div id="fifth"><div class='one'><a href="admin_login_main.php" class='class1' style="color:#FFF">ADMIN</a></div> 
      <div class='one'><a href="employee.php" class='class1' style="color:#FFF">EMPLOYEE</a></div>
      
       <div class='one'><a href="adminconsumable.php" class='class1' style="color:#FFF">CONSUMABLE ITEMS</a></div>
     <div class='one'><a href="adminnonconsumable.php" class='class1' style="color:#FFF">NON CONSUMABLE ITEMS</a></div>
     <div class='one'><a href="adminorder.php" class='class1' style="color:#FFF">ORDERS</a></div>
      <div class='one'><a href="adminmainstock.php" class='class1' style="color:#FFF">MAIN STOCK</a></div>
     <div class='one'><a href="adminstock.php" class='class1' style="color:#FFF">CURRENT STOCK</a></div>
        
     <div class='one'><a href="admindeposition.php" class='class1' style="color:#FFF">DEPOSITION</a></div>
    <div class='one'><a href="adminlogout.php" class='class1' style="color:#FFF">LOGOUT</a></div>
      </div>
</div>

  <div id="apDiv6">
    <div id="apDiv9">
   <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
      <table width="429" height="165">
       <tr>
        <td width="195"style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;text-align: center;">Username</td>
        <td width="17" style="font-weight: 600; text-align: center;">:</td>
        <td width="199" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;text-align: center;"><input type="text" name="username" class="txtGen" required='required' value="<?php echo $q ?>"></td>
      </tr>
      <tr>
        <td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;text-align: center;">Password</td>
        <td style="font-weight: 600; text-align: center;">:</td>
        <td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;text-align: center;"><input type="text" name="password" class="txtGen" required='required' value="<?php echo $w?>"></td>
      </tr>
        <tr>
        <td><div id="apDiv7"><?php echo $error ?></div></td>
          <td>&nbsp;</td>
          <td><input type="hidden" name="id" value="<?php echo $c ?>"><input type="submit" name="button2" class="styled-button-3" id="button2" value="Update" /></td>
        </tr>
      </table>
      </form>
    </div>
    <div id="apDiv8">Admin Profile</div>
  </div>
  <div id="apDiv3">
    <div id="apDiv17">Copyright &copy NIC,Dibrugarh | Powered By:Rajdeep Banerjee</div>
  </div>
  
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>