<?php
$name = $_POST ['name'];
$username = $_POST['username'];
$number=$_POST['number'];
$email=$_POST['email'];
$comment=$_POST['comment'];

function dataPrint($data = null) {
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
} 

if (!empty($name) || !empty($username) || !empty($number) ||!empty($email) ||!empty($comment) ) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "login";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $dataP= dataPrint();
        $INSERT = "INSERT INTO contact (Name , Username, Number,Email,Comment) VALUES ('$name','$username','$number','$email','$comment')";
        if ($conn->query($INSERT) === TRUE) {
            header('Location: ./index.php');
        } else {
            echo "Error: " . $INSERT . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
?>