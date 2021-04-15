<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="Style/style.css" type="text/css">
<link rel="stylesheet" href="Style/style5.css" type="text/css">
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
        <?php if(isset($_COOKIE['logedInUser'])) {?><li class="li"><a href="./Logout.php">Logout</a></li><?php }?>
            
        </ul>
    </div>
   
     <form id="form-style" class="mainForm3" action="./contactInput.php" method="POST"  onsubmit="return validateFormm()">
     <label for="">Name:</label>
        <input class="input" name="name"type="text">
        <label for="">Username:</label>
        <input class="input" name="username" type="text">
        <label for="">Number:</label>
        <input class="input" name="number" type="number">
        <label for="">Email:</label>
        <input class="input" name="email" type="text">
        <label for="">Koment?</label>
        <textarea id="lastInput"  name="comment" type="text"></textarea>
        <button id="button"><a href="submit.php"><b>Submit</b></a></button>
       
    </form>
    
    <script src="js/main.js"></script>   
</body>
</html>