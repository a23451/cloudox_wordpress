<?php 
if($_GET){
    // var_dump($_GET);
    // echo "hidstring";

}

$con = new mysqli("localhost","root","root","wordpress");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
if(isset($_SESSION['userName'])){
  $name=$_SESSION['userName'];
}else{
  $name='defaultName';
}
$sid=$_GET['uniqid'];
$pageid=$_GET['pageid'];
$a=$_GET['action'];//1 打开页面 2关闭页面
$m=$_GET['move'];
$os=$_GET['os'];
$mobile=$_GET['mobile'];
$href=$_GET['href'];
$time=time();
if ($a==2) {
  $sql="update wp_test set timeout=".$time.",move=".$m." where pageid=".$pageid;
}
else{
  $sql="insert into wp_test (storageId,href,name,action,move,timein,pageid,os,mobile)values(".$sid.",'".$href."','".$name."','".$a."',".$m.",".$time.",'".$pageid."','".$os."','".$mobile."')";
}

echo "<hr>".$sql."<hr>";
if ($con->query($sql))
  {
  echo "Database created,insert ok";
  }
else
  {
  echo "Error creating(insert) database: " . $con->error();
  }

$con->close();
?>

<!-- 数据库time字段等提取时再算  time=timeout-timein -->