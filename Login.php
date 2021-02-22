
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="Style/style2.css" type="text/css">
</head>
<body>
 <div id="header">
        <img src="Photos/icon.PNG" alt="icon">
        <ul id="ul1">
            <li class="li"><a href="index.php">Home</a></li>
            <li class="li"><a href="collections.php">Collections </a></li>
            <li class="li"><a href="bestsellers.php">Bestsellers</a></li>
            <?php
              session_start();
              if(isset($_SESSION['role'])&& $_SESSION['role']==0){
                ?>
                <li class="li"><a href="dashboard.php">Dashboard</a></li>
                <?php
              }
            ?>
                
              
              
            <li class="li"><a href="about_us.php">About </a></li>
            <li class="li"><a href="contact_us.php">Contact</a></li>


        </ul>
        <ul id="ul2"> 
            <li class="li"><a href="Login.php">Login</a></li>
            
        </ul>
    </div>
  <div class="container">
    <div class="link-container">
      <a id="firstA" href="#"onclick="changeForm(0)" >Sign In</a>
      <a id="register" href="#"onclick="changeForm(1)">Register</a>
    </div>
    <form id="mainForm" action="LoginInfo.php" method="POST">
      <div class="login forms form-style">
        <label for="" >Username:</label>
        <input type="text"  name="username1"class="input" />
        <label for="" >Password:</label>
        <input type="password" name="password1" class="input" />
        <input id="submit" type="submit" class="input submit" value="Login" onclick="validate(0);Javascript:refresh(6000)" />
      </div>
      <div class="register forms hidden">
        <label for="">Name:</label>
        <input type="text" class="input" placeholder="username..." />
        <label for="">Password:</label>
        <input type="password" class="input"/>
        <label for="">Confirm Password:</label>
        <input type="password" class="input" />
        <input id="submit1" type="submit" name="login-btn" class="input submit" value="Login" onclick="validate(1); refresh(10000)" />
      </div>
    </form>
  </div>

    <script src="js/main.js"></script>
</body>
</html>