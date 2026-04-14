<?php
$conn = mysqli_connect("localhost","root","","test1");

if(!$conn){
    die("Database Connection Failed");
}

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
        echo "<h2>Login Success</h2>";
    } else {
        echo "<h2>Login Failed</h2>";
    }
}
?>
