<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style/style.css" type="text/css">
    <link rel="stylesheet" href="Style/style4.css" type="text/css">
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

    <div class="box1">
				<div id="users-tab">
					<h2 class="h2s">Users-List</h2>
					<?php
						$dbc = mysqli_connect('localhost', 'root','', 'Login') or die("Gabim gjat lidhjes.");

						$query = "SELECT * FROM users";
						$result=mysqli_query($dbc,$query); ?>
						<div id="log-div"class="options " >
                          <ul class="ul-log" >
                          <li class="cont-li"><p class="p-li">Username</p></li>
                        <li class="cont-li"><p class="p-li">Password</p></li>
                        <li class="cont-li"><p class="p-li">Role</p></li>
                        </ul>
                        <hr>
                        </div>
						<?php
						while ($row = mysqli_fetch_array($result)) {
							echo "<div class=\"list-item\">
									<span class=\"rows\">".$row['Username']."</span>
                                    <span  class=\"rows\">".$row['Password']."</span>
									<span  class=\"rows\">".$row['role']."</span>
                                    <hr/>
								</div>";
						}
					?>
				</div>
    </div>
    <div class="box2">
				<div id="users-tab">
					<h2 class="h2s">Contact Info</h2>
					<?php
						$dbc = mysqli_connect('localhost', 'root','', 'login') or die("Gabim gjat lidhjes.");

						$query = "SELECT * FROM contact";
						$result=mysqli_query($dbc,$query); ?>
						<div id="log-div"class="options " >
                          <ul class="ul-log" >
                          <li class="cont-li"><p class="p-li">Name</p></li>
                          <li class="cont-li"><p class="p-li">Username</p></li>
                        <li class="cont-li"><p class="p-li">Number</p></li>
                        <li class="cont-li"><p class="p-li">Email</p></li>
                        <li class="cont-li"><p class="p-li">Comment</p></li>
                        </ul>
                        <hr>
                        </div>
						<?php
						while ($row = mysqli_fetch_array($result)) {
							echo "<div class=\"list-item\">
                                    <span class=\"rows2\">".$row['Name']."</span>
									<span class=\"rows2\">".$row['Username']."</span>
                                    <span  class=\"rows2\">".$row['Number']."</span>
                                    <span class=\"rows2\">".$row['Email']."</span>
									<span  class=\"rows2\">".$row['Comment']."</span>
                                    <hr/>
								</div>";
						}
					?>
				</div>
    
    

    <div id="log-div" class="options hidden">
        <ul class="ul-log" >
            <li class="cont-li"><p class="p-li">Username</p></li>
            <li class="cont-li"><p class="p-li">Password</p></li>
        </ul>
        <hr>
        <ul class="ul-log">
            <li><p id="usern-p1" class="p-li"></p></li>
            <li><p id="pass-p1" class="p-li"></p></li>
        </ul>
        <hr>
        <ul class="ul-log">
            <li><p id="usern-p2" class="p-li"></p></li>
            <li><p id="pass-p2" class="p-li"></p></li>
        </ul>
        <hr>
    </div>
   
    <div id="cont-div" class="options hidden">
        <ul id="ul-cont">
            <li class="cont-li"><p class="p-li">Name</p></li>
            <li class="cont-li"><p class="p-li">Username</p></li>
            <li class="cont-li"><p class="p-li">Password</p></li>
            <li class="cont-li"><p class="p-li">Email</p></li>
            <li class="cont-li"><p class="p-li">Comment</p></li>

        </ul>
        <hr>
       
    </div>
    <script src="js/dashboardchange.js"></script>
</body>
</html>