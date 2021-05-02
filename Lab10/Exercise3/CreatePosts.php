<?php
$name = $_POST["name"];
$post = $_POST["post"];


$mysqli = new mysqli("mysql.eecs.ku.edu", "stevenhu", "jeech7wa", "stevenhu");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else if($post ==""){
    echo "<p>Post is empty</p>";
}
else{
    $query = "INSERT INTO Posts(author_id,content) VALUES('$name','$post')";
    if($mysqli->query($query)){
        echo "<p>Post Created.</p>";
    }
    else{
        echo "<p>User doesn't exist</p>";
    }
}

$mysqli->close();
?>