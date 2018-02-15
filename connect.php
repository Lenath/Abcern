<?php
$servername = "192.168.2.10";
$username = "root";
$password = "root";
$dbname = "polcern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function get_page($col, $table, $conn){
    $sql = "SELECT $col FROM $table";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
    }
    return $row;
}

function update_main($h1, $h1p1, $h1p2, $h21, $h21p, $h22, $h22p, $h23, $h23p, $conn){
    $sql = "UPDATE main
    SET h1 = '$h1', h1p1 = '$h1p1', h1p2 = '$h1p2', h21 = '$h21', h21p = '$h21p', h22 ='$h22', h22p = '$h22p', h23 = '$h23', h23p= '$h23p'";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        die();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

function update_about($h11,$h11p1, $h11p2, $h12, $h12p, $conn){
    $sql = "UPDATE about
    SET h11 = '$h11', h11p1 = '$h11p1', h11p2 = '$h11p2', h12 = '$h12', h12p = '$h12p'";
    if ($conn->query($sql) === TRUE) {
        header("Location: about.php");
        die();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?> 