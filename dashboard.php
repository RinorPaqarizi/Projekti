<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style/style.css" type="text/css">
    <link rel="stylesheet" href="Style/style4.css" type="text/css">
</head>
<body>
    <div id="header">
        <img src="Photos/icon.PNG" alt="icon">
        <ul id="ul1">
            <li class="li"><a href="index.html">Home</a></li>
            <li class="li"><a href="collections.html">Collections </a></li>
            <li class="li"><a href="bestsellers.html">Bestsellers</a></li>
            <li class="li"><a href="about_us.html">About </a></li>
            <li class="li"><a href="contact_us.html">Contact</a></li>
            
        </ul>
        <ul id="ul2">
            <li class="li"><a href="Login.html">Login</a></li>
            
        </ul>
    </div>

    <div id="list-div">
        <ul id="ul-l">
            <li class="li-s"><a onclick="changeOption(0)">Shto Parfum</a></li>
            <li class="li-s"><a onclick="changeOption(1)">Userat</a></li>
            <li class="li-s"><a onclick="changeOption(2)">Contact From</a></li>
        </ul>
        
    </div>
    
    <div id="log-div"class="options " >
        <ul class="ul-log" >
            <li class="cont-li"><p class="p-li">Username</p></li>
            <li class="cont-li"><p class="p-li">Password</p></li>
        </ul>
        <hr>
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