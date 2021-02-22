<?php

session_start();
    $username=$_POST['username1'];
    $password=$_POST['password1'];
    $db=mysqli_connect("localhost", "root", "");
    mysqli_select_db($db,"login");

    $result = mysqli_query($db,"select * from users where Username='$username' and Password='$password'") or die("Wrong users".mysqli_error());

    $row=mysqli_fetch_array($result);

    


    if($row['Username']==$username && $row['Password']==$password){
            header("Location:index.php");
            $_SESSION['role']=$result['role'];
        }
        else{
            header("Location:Login.php");
        }
  


?>