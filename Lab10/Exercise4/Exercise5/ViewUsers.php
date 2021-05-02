<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "stevenhu", "jeech7wa", "stevenhu");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else{
    $query = "SELECT * from Users";
    if ($result = $mysqli->query($query)) {
    /* fetch associative array */
    echo "User Table <br>";
    while($row = $result->fetch_assoc()){
        printf ("%s ", $row["user_id"]);
        echo "<br>";
    }
    }
    $result->free();
    }
    $mysqli->close();
?>