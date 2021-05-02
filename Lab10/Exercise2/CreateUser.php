<?php
$name = $_POST["name"];


$mysqli = new mysqli("mysql.eecs.ku.edu", "stevenhu", "jeech7wa", "stevenhu");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else if($name ==""){
    echo "<p>Name is blank</p>";
}
else{
    $query = "INSERT INTO Users(user_id) VALUES('$name')";
    if($mysqli->query($query)){
        echo "<p>User Created.</p>";
    }
    else{
        echo "<p>Name taken</p>";
    }
}

$mysqli->close();
?>