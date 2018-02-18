<?php
session_start();
if(!isset($_SESSION['username']) || isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 600) || !isset($_SESSION['last_activity'])){
    session_unset();
    session_destroy();
    header("location: login.php");
    exit;
}
$_SESSION['last_activity'] = time();
?>