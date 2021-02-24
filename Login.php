<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="Style/style2.css" type="text/css">
</head>
<body>
<?php setcookie('logedInUser', null, 0, '/')?>
 <div id="header">
        <img src="Photos/icon.PNG" alt="icon">
        <ul id="ul1">
            <li class="li"><a href="index.php">Home</a></li>
            <li class="li"><a href="collections.php">Collections </a></li>
            <li class="li"><a href="bestsellers.php">Bestsellers</a></li>
           
              
            <li class="li"><a href="about_us.php">About </a></li>
            <li class="li"><a href="contact_us.php">Contact</a></li>


        </ul>
        <ul id="ul2"> 
        <?php if(!isset($_COOKIE['logedInUser'])) {?><li class="li"><a href="Login.php">Login</a></li><?php }?>
            
        </ul>
    </div>
  <div class="container">
    <div class="link-container">
      <a id="firstA" href="#"onclick="changeForm(0)" >Sign In</a>
      <a id="register" href="#"onclick="changeForm(1)">Register</a>
    </div>
    <form class="mainForm" action="./LoginForm.php" method="POST">
      <div class="login forms form-style">
        <label for="username" >Username:</label>
        <input type="text"  name="username"class="input" />
        <label for="password" >Password:</label>
        <input type="password" name="password" class="input" />
        <input id="submit" type="submit" class="input submit" />
      </div>
      </form>
      <form class="mainForm2" action="./registerInput.php" method="POST" onsubmit="return validateForm()"> 
      <div class="register forms hidden">
        <label for="">Name:</label>
        <input type="text" class="input" name="username"/>
        <label for="">Password:</label>
        <input type="password" name="password" class="input"/>
        <label for="">Confirm Password:</label>
        <input type="password" name="password1" class="input" />
        <button id="submit1" type="submit" class="input submit"/>Submit</button>
      </div>
    </form>
  </div>

    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
</body>
</html>