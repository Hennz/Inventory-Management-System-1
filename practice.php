<?php
include 'conn.php';
session_start();
$id=$_SESSION['id'];
$sql="select fullname from empregisterform where employeeid=$id";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
$a=$_GET['consumableitem'];

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1107px;
	height: 716px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	width: 1095px;
	height: 101px;
	z-index: 1;
	left: 8px;
	top: 7px;
}
#apDiv3 {
	position: absolute;
	width: 731px;
	height: 46px;
	z-index: 2;
	left: 361px;
	top: 117px;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv4 {
	position: absolute;
	width: 838px;
	height: 49px;
	z-index: 1;
	left: 173px;
	top: 5px;
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
}
#apDiv5 {
	position: absolute;
	width: 562px;
	height: 32px;
	z-index: 2;
	left: 306px;
	top: 61px;
	font-size: 24px;
	text-align: center;
}
#apDiv6 {
	position: absolute;
	width: 241px;
	height: 88px;
	z-index: 3;
	left: 9px;
	top: 138px;
}
#apDiv7 {
	position: absolute;
	width: 402px;
	height: 115px;
	z-index: 4;
	left: 405px;
	top: 308px;
}
#apDiv8 {
	position: absolute;
	width: 842px;
	height: 39px;
	z-index: 2;
	left: 245px;
	top: 237px;
}
#apDiv9 {
	position: absolute;
	width: 173px;
	height: 27px;
	z-index: 1;
	text-align: left;
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
	top: 5px;
	left: 3px;
}
#apDiv10 {
	position: absolute;
	width: 187px;
	height: 27px;
	z-index: 2;
	left: 645px;
	top: 5px;
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
#apDiv11 {
	position: absolute;
	width: 849px;
	height: 407px;
	z-index: 4;
	left: 235px;
	top: 279px;
}
#apDiv12 {
	position: absolute;
	width: 132px;
	height: 26px;
	z-index: 1;
	top: 10px;
	left: 10px;
	text-align: center;
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
}
#apDiv13 {
	position: absolute;
	width: 176px;
	height: 27px;
	z-index: 2;
	left: 160px;
	top: 9px;
	text-align: center;
	font-size: 18px;
}
#apDiv14 {
	position: absolute;
	width: 183px;
	height: 29px;
	z-index: 3;
	left: 464px;
	top: 8px;
	text-align: center;
	font-size: 18px;
}
#apDiv15 {
	position: absolute;
	width: 170px;
	height: 28px;
	z-index: 4;
	left: 667px;
	top: 8px;
	text-align: center;
	font-size: 18px;
}
#apDiv16 {
	position: absolute;
	width: 837px;
	height: 340px;
	z-index: 5;
	left: 9px;
	top: 58px;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv2">
    <div id="apDiv4">DEPUTY COMMISIONEER OFFICE,DIBRUGARH </div>
    <div id="apDiv5">INVENTORY CONTROL SYSTEM</div>
  </div>
  <div id="apDiv3">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a class="MenuBarItemSubmenu" href="home.php">Requistion</a>
        <ul>
          <li><a href="consumable.php">Consumable</a></li>
          <li><a href="nonconsumable.php">Non Consumable</a></li>
        </ul>
      </li>
      <li><a href="#" class="MenuBarItemSubmenu">Deposition</a>
        <ul>
          <li><a href="#">item 1</a></li>
          <li><a href="#">item 2</a></li>
        </ul>
      </li>
      <li><a href="#">View Stock</a></li>
      <li><a href="#">View Profile</a>      </li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  <div id="apDiv6">
    <table width="240" height="81">
      <tr>
        <td>EMPLOYEE ID: <?php echo $id ?></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>EMPLOYEE NAME: <?php echo $rs[0] ?></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    
  </div>
  <div id="apDiv11">
  <form>
    <table width="843" height="171">
      <tr>
        <td>Serial No.</td>
        <td>Item Name</td>
        <td>Quantity</td>
        <td>Available</td>
      </tr>
      <?php
  $i=1;
  while($i<=$a)
  {
	  ?>
      <tr>
        <td>&nbsp;</td>
        
        <td><label for="select"></label>
          <select name="<?php echo $i ?>">
        </select></br></br></td>
        
        <td><label for="textfield"></label>
        <input type="text" name="<?php echo $i?>">/pack
        </br></br>
       </td>
        </td>
        <td>&nbsp;</td>
      </tr>
      <?php 
	  $i++;
  }
  ?>
    </table>
    </form>
  </div>
</div>
<div id="apDiv8">
  <div id="apDiv9">Requistion No. :</div>
  <div id="apDiv10">Consumable</div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>