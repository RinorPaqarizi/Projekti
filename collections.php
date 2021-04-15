<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style/style.css" type="text/css">
    <link rel="stylesheet" href="Style/style3.css" type="text/css">
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
    <div id="slider-div">
        <div id="main-div" class="slides active">
            <div id="div1">
                <p id="p-am">AMBER</p>
            </div>
            <div id="div2">
                <img class="pic" src="Photos/amber-bond.jpg" alt="amber">
                <p class="price-info">125$</p>
                
                    <a href="Purch-end.php" class="a-P">Purchase</a>
                    <p class="p-users">|Diamant Shala|</p>
                
                
            </div>
        </div>
        <div id="main-7"  class="slides not-active">
            <div id="div3">
                <p id="p-as">AMETHYST</p>
            </div>
            <div id="div4">
                <img class="pic" src="Photos/amethyst-bond.jpg" alt="Amethyst">
                <p class="price-info">110$</p>
                
                   
                    <a href="Purch-end.php" class="a-P">Purchase</a>
                    <p class="p-users">|Rinor Paçarizi|</p>
                
            </div>
        </div>
        <div id="main-div3"  class="slides not-active">
            <div id="div5">
                <p id="p-b">BLACK</p>
            </div>
            <div id="div6">
                <img class="pic" src="Photos/black-bond.jpg" alt="black" style="margin-left: 27vw;">
                <p class="price-info">150$</p>
                
                    <a href="Purch-end.php" class="a-P">Purchase</a>
                    <p class="p-users">|Diamant Shala|</p>
                
            </div>
        </div>
        <div id="main-div4"  class="slides not-active">
            <div id="div7">
                <p id="p-bl">BLUE</p>
            </div>
            <div id="div8">
                <img class="pic" src="Photos/blue-bond.jpg" alt="Blue" style="margin-left: 26vw;">
                <p class="price-info">120$</p>
                
                    <a href="Purch-end.php" class="a-P">Purchase</a>
                    <p class="p-users">|Rinor Paçarizi|</p>
                
            </div>
        </div>
        <div id="main-div5" class="slides not-active">
            <div id="div9">
                <p id="p-j">JADE</p>
            </div>
            <div id="div10">
                <img class="pic" src="Photos/jade-bond.jpg" alt="Jade" style="margin-left: 28vw;">
                <p class="price-info">130$</p>
                
                    <a href="Purch-end.php" class="a-P">Purchase</a>
                    <p class="p-users">|Diamant Shala|</p>

            </div>
        </div>
        <div id="main-div6" class="slides not-active">
            <div id="div11">
                <p id="p-r">RUBY</p>
            </div>
            <div id="div12">
                <img class="pic" src="Photos/ruby-bond.jpg" alt="ruby" style="margin-left: 28vw;">
                <p class="price-info" style="margin-left: 570px;">139$</p>
                <a href="Purch-end.php" class="a-P" style="margin-left: 545px;">Purchase</a>
                <p class="p-users">|Rinor Paçarizi|</p>
                
            </div>
        </div>

        <a class="prev"><</a>
        <a class="next">></a>
    </div> 

        <script src="js/slider.js"></script>
        <script src="js/main.js"></script>   
</body>
</html>