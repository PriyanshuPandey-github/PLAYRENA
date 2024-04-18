<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLAYRENA</title>
    <style>
        body,html{
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }
        #bgv{
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
}
        #navbar {
            position: relative;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            width: 98vw;
            height: 10vh;
            background-color: aliceblue;
            border-bottom: 4px solid black;
        }
        .navbuttons{
            display: flex;
            min-width: 10vw;
            height: 100%;
            a{
                text-decoration: none;
                color: black;
                font-size: 20px;
                font-weight: bold;
                display: flex;
                justify-content: center;
                align-items: center;
                &:hover{
                    color: rgb(255, 94, 0);
                    text-shadow: 0px 0px 1px black;
                    
                }
            }
        }
        #user{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            weight: 98vw;
        }
        #centerbox{
            height: 80vh;
            width: 75vw;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
        }
        #editb{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            width: 75px;
            color: aliceblue;
            background-color: chocolate;
            font-weight: bold;
            border-radius: 7px;
            box-shadow: 2px 2px 10px black inset;
            &:hover{
                cursor: pointer;
                background-color: rgb(119, 56, 11);
            }
        }
        #changepassb{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            width: max-content;
            color: aliceblue;
            background-color: chocolate;
            font-weight: bold;
            border-radius: 7px;
            box-shadow: 2px 2px 10px black inset;
            &:hover{
                cursor: pointer;
                background-color: rgb(119, 56, 11);
            }
        }
        #userinfo{
            display: flex;
            flex-direction: column;
            height: 30vh;
            width: 50%;
            border: 4px solid black;
            border-radius: 20px;
            background-color: aliceblue;
            box-shadow: 5px 5px 10px black;
            align-items: center;
            justify-content: space-around;
            div{
                display: flex;
                align-content: center;
                justify-content: center;
                width: 100%;
                label{
                    display: block;
                }
                .rdonly{
                    margin-left: 10px;
                    display: flex;
                    width: 60%;
                    height: 100%;
                    background-color: rgba(136, 135, 135, 0.333);
                    color: rgb(0, 0, 0);
                }
                #submitb{
                    display: none;
                    width: 70%;
                    border: 2px solid black;
                    border-radius: 10px;
                    color: rgb(0, 0, 0);
                    text-shadow: 0px 0px 2px rgb(254, 254, 254);
                    background-color: rgb(0, 255, 42);
                    &:hover{
                        cursor: pointer;
                        background-color: greenyellow;
                    }
                }
            }
        }
        #changepassword{
            display: none;
            flex-direction: column;
            height: 30vh;
            width: 50%;
            border: 4px solid black;
            border-radius: 20px;
            background-color: aliceblue;
            box-shadow: 5px 5px 10px black;
            align-items: center;
            justify-content: space-around;
            div{
                display: flex;
                align-content: center;
                justify-content: center;
                width: 100%;
                label{
                    display: block;
                }
                input{
                    margin-left: 10px;
                    display: flex;
                    width: 60%;
                    height: 100%;
                    background-color: rgba(136, 135, 135, 0.333);
                    color: rgb(0, 0, 0);
                }
                #changeb{
                    width: 70%;
                    border: 2px solid black;
                    border-radius: 10px;
                    color: rgb(0, 0, 0);
                    text-shadow: 0px 0px 2px rgb(254, 254, 254);
                    background-color: rgb(0, 255, 42);
                    &:hover{
                        cursor: pointer;
                        background-color: greenyellow;
                    }
                }
            }
        }
        #library{
            height: 100vh;
            width: 100vw;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
            flex-wrap: wrap;
            .gc{
                height: 40%;
                width: max-content;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content:center;
                .gcicon{
                    display: flex;
                    height: 300px;
                    width: auto;
                }
            }
        }
        #library::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>
    <?php 
        // $uid = $_GET["uid"];
        $uid = 0;
        $ids = array();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "playrena";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql1 = "SELECT *FROM users where uid = $uid";
        $result1 = $conn->query($sql1);
            $row1 = $result1->fetch_assoc();
        $sql2 = "SELECT pid FROM user_$uid";
        $result2 = $conn->query($sql2);
        for ($i = 0; $i < $result2->num_rows; $i++) {
            $result->data_seek($i);
            $row2 = $result2->fetch_assoc();
            $ids[$i] = $row2["pid"];
          }
    ?>
    <video id="bgv" autoplay loop muted src="./assets/yellowbgv.webm"></video>
    <nav id="navbar">
        <div class="navbuttons">
            <a href="../index.html">HOME</a>
        </div>
        <div class="navbuttons">
            <a href="#library">LIBRARY</a>
        </div>
        <div class="navbuttons">
            <a href="#user">PROFILE</a>
        </div>
    </nav>
    <div id="user">
        <div id="centerbox">
            <button onclick="editDetails()" id="editb">Edit</button>
            <form id="userinfo" action="editinfo.php" method="POST">
            <input type="number" value="<?php echo $uid?>" name="uid" hidden>
                <div><label for="fname">FIRST NAME</label>
                    <input class="rdonly" type="text" name="fname" value="<?php echo $row1['fname'] ?>" readonly></div>
                <div><label for="lname">LAST NAME</label>
                    <input class="rdonly" type="text" name="lname" value="<?php echo $row1['lname'] ?>" readonly></div>
                    <div><label for="age">AGE</label>
                        <input class="rdonly" type="number" name="age" value="<?php echo $row1['age'] ?>" readonly></div>
                        <div><label for="emai">EMAIL</label>
                            <input class="rdonly" type="text" name="email" value="<?php echo $row1['email'] ?>" readonly></div>
                            <div><input id="submitb" type="submit" value="SAVE CHANGES" ></div>
            </form>
            <button onclick="changePass()" id="changepassb">Change Password</button>
            <form id="changepassword" action="changepass.php" method="POST">
            <input type="number" value="<?php echo $uid?>" name="uid" hidden>
                <div><label for="cp">Current Password</label>
                    <input type="text" placeholder="Current Password" name = "pass"></div>
                    <div><label for="np">New Password</label>
                        <input type="text" placeholder="New Password"></div>
                        <div><label for="cp">Confirm New Password</label>
                            <input type="text" placeholder="confirm new Password"></div>
                <div><input id="changeb" type="submit" value="CHANGE PASSWORD"></div>
            </form>
        </div>
    </div>
    <div id="library">
        <div class="gc">
            <a class="downloadb" download href="../gameshop/gamesassets/THE WITCHER/tw31.jpeg"><img class="gcicon" src="../gameshop/gamesassets/THE WITCHER/tw31.jpeg" alt=""></a>
        </div>
    </div>
    <script>
        function changePass(){
            let x = document.getElementById('changepassword');
            if(x.style.display=="none")
            {
                x.style.display="flex";
            }
            else{
                x.style.display="none";
            }
        }
        function editDetails(){
            let x = document.getElementsByClassName('rdonly');
            let y = document.getElementById('submitb');
            if(y.style.display="none")
            {
                for(let i=0;i<x.length;i++)
                x[i].removeAttribute('readonly');
                y.style.display="flex";
            }
            else{
                for(let i=0;i<x.length;i++)
                x[i].setAttribute('readonly','readonly');
                y.style.display="none";
            }
        }
    </script>
</body>
</html>