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

function get_all($conn, $t_name){
    $sql = "SELECT * FROM $t_name";
    $result = $conn->query($sql);
    return $result;
}

function update_main($title, $description, $keywords, $c_name, $c_motto, $c_description, $conn){
    $sql = "UPDATE main
    SET title = '$title', description = '$description', keywords = '$keywords', c_name = '$c_name', c_motto = '$c_motto', c_description ='$c_description'";
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
