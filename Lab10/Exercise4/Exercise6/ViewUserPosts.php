<?php
$name = $_POST["Users"];

echo "$name<br>";


$mysqli = new mysqli("mysql.eecs.ku.edu", "stevenhu", "jeech7wa", "stevenhu");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else{
    $query = "SELECT * from Posts";
    if($result = $mysqli->query($query)){
        while($row = $result->fetch_assoc()){
            $post = $row["content"];
            $author =$row["author_id"];
            echo "<table>";
            if($name == $author){
                echo "<tr>".$post."</tr>";
            }
            echo "</table>";
        }
    }
    $mysqli->close();
}
?>