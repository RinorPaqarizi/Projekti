<?php
setcookie("logedInUser", null, time()-3600, '/');
header('Location: ./Login.php');

?>