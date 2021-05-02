<?php
$name = $_POST["checkbox"];


$mysqli = new mysqli("mysql.eecs.ku.edu", "stevenhu", "jeech7wa", "stevenhu");
foreach($_POST['checkbox'] as $val){
    echo $val ." should be deleted<br>";
    $query = "DELETE FROM Posts WHERE post_id = $val ";
    if($result = $mysqli->query($query)){
        echo "Success: Post with ID ".$val." deleted<br>";
    }
}
$result->free();
$mysqli->close();
?>