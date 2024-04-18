<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAYRENA</title>
    <link rel="icon" href="./assets/Vector-Game-Controller-Transparent.png">
    <link rel="stylesheet" href="./assets/css/product.css">
</head>
<body>
    <?php 
        $username = "Admin";
        $uid = "001";
        $pid = $_GET['id'];
        // $pid = "1";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "playrena";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT *FROM games where id ='$pid'";
        $result = $conn->query($sql);
            $row = $result->fetch_assoc();
    ?>
    <div id="nav">
        <div class="navb"><a class="btn" href="./index.html"><img id="backto" class="navimg" src="./assets/backto.png" alt=""></a></div>
        <div class="navb"><a class="btn" href="../index.html"><img id="playrena" class="navimg" src="./assets/playrenalogo.gif" alt=""></a></div>
        <div class="navb"><a class="btn" id="logbtn" href="../userauth.php">Login/Signup</a></div>
    </div>
    <div id="pbody">
        <video id="bgv" autoplay loop muted src="./assets/yellowbgv.webm"></video>
        <div id="content">
            <div id="title">
                <img id="gicon" src="<?php echo $row['title'];?>" alt="GameIcon">
                <!-- <h2 id="gtitle">GAME : TITLE</h2> -->
            </div>
            <div id="desc">
                <h3><?php echo $row['description'];?></h3>
            </div>
            <div id="product">
                <div class = "product-imgs">
                    <div class = "img-display">
                      <div class = "img-showcase">
                        <img class="simg" src = "<?php echo $row['image1'];?>" alt = "THE WITHER 3">
                        <iframe class="simg" width="50vw" height="50vh" src="<?php echo $row['trailer'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <img class="simg" src = "<?php echo $row['image2'];?>" alt = "THE WITHER 3">
                        <img class="simg" src = "<?php echo $row['image3'];?>" alt = "THE WITHER 3">
                        <img class="simg" src = "<?php echo $row['image4'];?>" alt = "THE WITHER 3">
                    </div>
                    </div>
                    <div class = "img-select">
                      <div class = "img-item">
                        <a href = "#" data-id = "1">
                          <img src = "<?php echo $row['image1'];?>" alt = "Game image">
                        </a>
                      </div>
                      <div class = "img-item">
                        <a href = "#" data-id = "2">
                          <img src = "<?php echo $row['thumbnail'];?>" alt = "Game image">
                        </a>
                      </div>
                      <div class = "img-item">
                        <a href = "#" data-id = "3">
                          <img src = "<?php echo $row['image2'];?>" alt = "Game image">
                        </a>
                      </div>
                      <div class = "img-item">
                        <a href = "#" data-id = "4">
                          <img src = "<?php echo $row['image3'];?>" alt = "Game image">
                        </a>
                      </div>
                      <div class = "img-item">
                        <a href = "#" data-id = "5">
                          <img src = "<?php echo $row['image4'];?>" alt = "Game image">
                        </a>
                      </div>
                    </div>
                </div>
                <div id="product-info">
                    <h1>Rating :⭐<?php echo $row['rating'];?>(<?php echo $row['ratedby'];?>)</h1>
                    <h2>RELEASE DATE : <?php echo $row['releasedate'];?></h2>
                    <h2>DEVELOPER : <?php echo $row['developer'];?></h2>
                    <h2>PUBLISHER : <?php echo $row['publisher'];?></h2>
                    <p>TAGS : <?php echo $row['tags'];?></p>
                    <h1>PRICE : ₹ <?php echo $row['price'];?></h1>
                    <div id="pdbuttons">
                        <!-- <a id="cart" class="my-button" href="#">Add To Cart<span></span></a>
                        <a class="my-button" href="#">Gift</a>
                        <a class="my-button" href="#">Redeem</a> -->
                        <a class="my-button" href="./checkout.php?pid=<?php echo $row['id']; ?>">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./product.js"></script>
</body>
</html>