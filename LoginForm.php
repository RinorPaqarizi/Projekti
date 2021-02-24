<?php
$username = $_POST ['username'];
$password =$_POST['password'];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "Login";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $query = "SELECT * FROM users where Username='$username' and Password='$password'";
    if ($result = $conn->query($query)) {
        $res;
        while($obj = $result->fetch_object()) {
            $res = $obj->role;
            $userId = $obj->UserID;
        }

        if (isset($res) && $res == '1') {
            setcookie("logedInUser", $userId, time()+3600, '/');
            header('Location: ./dashboard.php');
        } elseif( isset($res) && ($res == '0')) {
            setcookie("logedInUser", $userId, time()+3600, '/');
            header('Location: ./index.php');
        } else {
            echo "<div class=\"non-login-screen\">";
            echo "<p>Please enter valid username and password</p>";
            echo "<button onclick=\"window.location.href='./Login.php'\">Go Back</button>";
            echo "</div>";
        }
        $result->close();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error. `
             <button onclick=\"window.location.href='./Login.php'\">Go Back</button>"
        `;
    }
    $conn->close();
}
?>