<?php 

echo $sname = $_POST['sname'];
echo $saddress = $_POST['saddress'];
echo $class = $_POST['class'];
echo $sphone = $_POST['sphone'];

include_once('config.php');
$sql = "INSERT INTO student (sname, saddress, sclass, sphone) VALUE ('{$sname}', '{$saddress}', '{$class}', '{$sphone}')";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>