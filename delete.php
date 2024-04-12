<?php
include 'db.php';
$id  = $_GET['uuid'];
echo($id);
$query = "DELETE FROM student WHERE id = '$id'";
if(mysqli_query($conn, $query)){
    echo "student deleted successfully";
}else{
    echo "student with this $id is not found";
}


?>