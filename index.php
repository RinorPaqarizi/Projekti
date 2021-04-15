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
                <?php if(isset($_COOKIE['logedInUser'])) {?><li class="li"><a href="./Logout.php">Logout</a></li><?php }?>

            </ul>
        </div>
        <h1>Welcome to Tenebris</h1>
        <div id="under-header">
            <h3>The world of Perfumes</h3>
            <h3>This world is filled with different smells</h3>
            <h4>Different sensations</h4>
            <h4>Each and every single one of them better then the other</h4>
        </div>
        <div class="main-div">
            <div id="main">
                <img src="Photos/david-off.png" alt="David-Off" id="david">
                <p id="text-p1">Cool Water by Davidoff is a Aromatic Aquatic fragrance for men. ... 
                    Cool Water is fresh and sharp, simple and very masculine. Top notes include mint and green nuances, lavender,
                     coriander and rosemary.
                     The heart notes include geranium, neroli, jasmine and sandalwood.</p>
                     <p id="p1">Price: 60$</p>
                     <p id="user1">|Diamant Shala|</p>
            </div>
            <div id="main-2">
                <img src="Photos/boss-yellow.png" alt="boss-yellow" id="boss-yellow">
                <p id="text-p2">The fragrance delivers an energising hit of fresh, 
                    crisp green apple, twisted with vibrant herbal aromas and the smoky, earthy scents of a wild forest. 
                    An optimistic scent for a liberated soul, 
                    HUGO Man is presented in a sleek flask with a strapped-on cap, designed for men on the move.</p>
                    <p id="p2">Price: 120$</p>
                    <p id="user2">|Rinor Paçarizi|</p>
            </div>
            <div id="main-3">
                <img src="Photos/bananas.png" alt="banana" id="banana">
                <p id="text-p3">An amber Banana - a rare, yet rich baroque-style composition - a blend of jasmine and candied bananas.
                     Violet flowers, slightly bitter, overlaid with nutmeg, raw and biting, create the sensation of the banana skin.</p>
                     <p id="p3">Price: 59$</p>
                     <p id="user3">|Diamant Shala|</p>
            </div>
        </div>    
        <script src="js/main.js"></script>   
</body>
</html>
