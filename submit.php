<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="Style/style.css" type="text/css">
</head>
<body>
    <div id="header">
        <img src="Photos/icon.PNG" alt="icon">
        <ul id="ul1">
            <li class="li"><a href="index.php">Home</a></li>
            <li class="li"><a href="collections.php">Collections </a></li>
            <li class="li"><a href="bestsellers.php">Bestsellers</a></li>
            <?php if(isset($_COOKIE['logedInUser'])&&strpos($_COOKIE['logedInUser'], '1') !== false) 
           {?>
            <li class="li"><a href="./dashboard.php">Dashboard</a></li>
             <?php }?>
           
            <li class="li"><a href="about_us.php">About </a></li>
            <li class="li"><a href="contact_us.php">Contact</a></li>
        </ul>
        <ul id="ul2">
        <?php if(!isset($_COOKIE['logedInUser'])) {?><li class="li"><a href="Login.php">Login</a></li><?php }?>
        </ul>
    </div>
    <h1 id="h1-c">Your Contact info has been registered!</h1>
    <button id="button2"><a href="index.php"><b>Home</b></a></button>
    <script src="js/main.js"></script>   
</body>
</html>