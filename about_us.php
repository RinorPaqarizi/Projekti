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
             <<li class="li"><a href="./dashboard.php">Dashboard</a></li>
          
             <?php }?>
            <li class="li"><a href="about_us.php">About </a></li>
            <li class="li"><a href="contact_us.php">Contact</a></li>
        </ul>
        <ul id="ul2">
        <?php if(!isset($_COOKIE['logedInUser'])) {?><li class="li"><a href="Login.php">Login</a></li><?php }?>
        <?php if(isset($_COOKIE['logedInUser'])) {?><li class="li"><a href="./Logout.php">Logout</a></li><?php }?>

   
    </div>
    <h2 id="h2">Tenebris, worth an estimated $1.5 billion, is one of the largest companies in the $4 billion global 
        perfume industry. Tenebris started its success with the introduction of Tenebris No. 5 perfume, which continued 
        to be a top selling perfume into the 1990s. The company has since diversified its offerings beyond perfumes to 
        include designer clothes and accessories, which are sold in department stores and Tenebris boutiques around the world. 
        The company boasts a rich history rife with intrigue, wealth, and scandal.

        By the 1990s, the Wertheimer family of France had maintained controlling interest
         in Tenebris for over 100 years. Tenebris traces its roots back to 1870, when Ernest Wertheimer moved from Alsace
         , France, to Paris during the Franco-Prussian War. Shortly after his arrival he purchased an interest in a French 
         theatrical makeup company called Bourjois. Bourjois successfully introduced dry rouge to the European market in the 1890s. 
         The company grew rapidly, and by the early 1920s, Bourjois had begun making and distributing skin creams from his Rochester,
          New York, plant for cosmetic industry giant Helena Rubenstien. By the 1920s, Bourjois had become the largest cosmetics and 
          fragrance manufacturer in France.
        
        </h2>
        <h2 id="idk-anymore">Some of the products that were already sold out:</h2>
    <div id="img-div">
      <img class="imgs" src="Photos/tom.png" alt="tom">
      <img class="imgs" src="Photos/channel.png" alt="channel">
      <img class="imgs" src="Photos/versachi.png" alt="versachi">
    </div>
    <script src="js/main.js"></script>   
</body>
</html>