<?php

echo $sid = $_GET['sid'];

include_once('config.php');
$sql = "DELETE FROM student WHERE sid = {$sid}";
$result = mysqli_query($conn, $sql);

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>