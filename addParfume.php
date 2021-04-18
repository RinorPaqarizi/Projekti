<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

function idSet($data = null) {
		    $data = $data ?? random_bytes(16);
		    assert(strlen($data) == 16);
		    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
		    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
		    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
		}

$dataP = idSet();


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	
$name = $_POST['name'];
$price = $_POST['price'];
$creator = addslashes($_POST['creator']);
$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
$INSERT = "INSERT INTO collections (id, name, photo, price, creator) VALUES ('$dataP','$name','$photo','$price','$creator')";
	if ($conn->query($INSERT) === TRUE) {
		header('Location: ./collections.php');
	} else {
		echo "Error: " . $INSERT . "<br>" . $conn->error;
	}
	$conn->close();
?>