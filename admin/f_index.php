<?php
include("session.php");
include("connect.php");
$title = $description = $keywords = $c_name = $c_motto = $c_description = $s_id = $s_name = $s_function = $s_email = $s_photo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = test_input($_POST["title"]);
    $description = test_input($_POST["description"]);
    $keywords = test_input($_POST["keywords"]);
    $c_name = test_input($_POST["c_name"]);
    $c_motto = test_input($_POST["c_motto"]);
    $c_description = test_input($_POST["c_description"]);
    update_main($title, $description, $keywords, $c_name, $c_motto, $c_description, $conn);
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>