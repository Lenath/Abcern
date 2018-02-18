<?php include("connect.php"); ?>
<?php
session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
    exit;
}
$username = $password = "";
$username_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = 'Proszę podać nazwę użytkownika';
    } else{
        $username = trim($_POST["username"]);
    }
    if(empty(trim($_POST['password']))){
        $password_err = 'Proszę podać hasło';
    } else{
        $password = trim($_POST['password']);
        $password = md5($password);
    }
    if(empty($username_err) && empty($password_err)) {
        $sql = "SELECT username FROM user WHERE username='$username' and password='$password'";
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                session_start();
                echo "1";
                $_SESSION['username'] = $username;
                $_SESSION['last_activity'] = time();
                header("location: index.php");
            } else{
                $password_err = 'Podano błędne dane';
            }
    } else{
        $username_err = 'Podano błędne dane';
    }
}
?>
<?php include("head.php"); ?>
<form action="login.php" method="post">
    <div class="form-group col-xs-8 col-xs-offset-2 col-md-4  col-md-offset-4">
        <label for="usr">Nazwa użytkownika:</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group col-xs-8 col-xs-offset-2 col-md-4  col-md-offset-4">
        <label for="pwd">Hasło:</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="centered col-xs-8 col-xs-offset-2 col-md-4  col-md-offset-4">
        <button type="submit">
            Zalouj
        </button>
    </div>
</form>