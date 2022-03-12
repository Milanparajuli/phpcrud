<?php
include "../config.php";
$id = $_GET['id'];
$deletesql = "DELETE FROM student WHERE id='$id'";
$result = mysqli_query($conn,$deletesql);
if($result){
    echo "deleted";
}else{
    echo "not deleted";
}
header("Location:list.php");
?>
