<?php
include('db.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select name from consumable where name like '%$q%' order by id LIMIT 10");
while($row=mysql_fetch_array($sql_res))
{
$name=$row['name'];
//$email=$row['email'];
$b_name='<strong>'.$q.'</strong>';
//$b_email='<strong>'.$q.'</strong>';
$final_name = str_ireplace($q, $b_name, $name);
//$final_email = str_ireplace($q, $b_email, $email);

?>
<div class="show" align="left">
<span class="name"><a href="stockusercon.php?name=<?php echo $name ?>"><?php echo $final_name; ?></a></span>
</div>

<?php
}
}
?>