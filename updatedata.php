<?php 

echo $sid = $_POST['sid'];
echo $sname = $_POST['sname'];
echo $saddress = $_POST['saddress'];
echo $sclass = $_POST['sclass'];
echo $sphone = $_POST['sphone'];

include_once('config.php');
$sql = "UPDATE student SET sname = '{$sname}', saddress = '{$saddress}', sclass = '{$sclass}', sphone = '{$sphone}' WHERE sid = {$sid}";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>