<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playrena</title>
    <style>
        html,body{
            margin: 0;
            padding: 0;
        }
        #mainbody{
            color: aliceblue;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            background: rgb(255,145,0);
            background: radial-gradient(circle, rgba(255,145,0,1) 0%, rgba(235,150,12,1) 21%, rgba(194,155,38,1) 64%, rgba(255,132,0,1) 100%);
        }
        #qrcode{
            height: 500px;
            width: fit-content;
            box-shadow: 10px 10px 10px rgb(0, 0, 0);
            border: 5px solid black;
            border-radius: 20px;
        }
        #ordersummary{
            margin: 10px;
            display: flex;
            background-color: chocolate;
            color: aliceblue;
            width: 40vw;
            align-items: center;
            justify-content: center;
            box-shadow: 10px 10px 10px rgb(0, 0, 0);
            border: 5px solid black;
            border-radius: 10px;
        }
        #tidsection{
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            gap: 5px;
            background-color: chocolate;
            box-shadow: 10px 10px 10px black;
            border: 3px solid black;
            border-radius: 10px;
            justify-content: center;
            align-items: center;
            #tid{
                width: 60%;
                border-radius: 5px;
                height: 100%;
                background-color: rgba(128, 128, 128, 0.258);
                color: aliceblue;
            }
            #submit{
                border-radius: 4px;
                font-size: large;
                background-color: gray;
                color: aliceblue;
            }
        }
    </style>
</head>
<body>
    <?php 
        $pid = $_GET['pid'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "playrena";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT *FROM games where id ='$pid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc(); 
    ?>
    <div id="mainbody">
        <div>
            <img id="qrcode" src="./img/PAYQR.jpg" alt="">
        </div>
        <div id="ordersummary">
            <h1>Order Summary -</h1><h2> Total amount: Rs. <?php echo $row['price'];?></h2>
        </div>
        <form action="purchase.php" method="post">
            <h1>SCAN QR AND PAY THE TOTAL AMOUNT!</h1><br/>
            <input type="hidden" name="id" value="<?php echo isset($_GET['pid']) ? $_GET['pid'] : '';?>"/>
            <h1>Enter The Transaction Id after  Payment:</h1>
            <div id="tidsection">
                <input id="tid" type="text" name="tid"  placeholder="Transaction ID"> <br><br>
                <input id="submit" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>