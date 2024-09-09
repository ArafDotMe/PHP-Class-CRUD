<?php 

include 'header.php'; 

if(isset($_POST['deletebtn'])){

    echo $sid = $_POST['sid'];

    include_once('config.php');
    $sql = "DELETE FROM student WHERE sid = {$sid}";
    $result = mysqli_query($conn, $sql);

    header("Location: http://localhost/crud/index.php");

    mysqli_close($conn);

}

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
