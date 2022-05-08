<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Josefin+Sans:wght@300&family=Playfair+Display:ital@1&family=Raleway:wght@200;400&family=Ramaraja&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    <title>Welcome</title>
    <style>
        body{
            text-align: center;
            font-size: 20px;
            font-family: 'Josefin Sans', sans-serif;
            background-color: #5A54FF; 
        }
        #container{
            margin: 1%; 
            padding: 2%;
            background-color: white; 
            display: flex;
            height: 88vh;
            align-items: center;
            justify-content: center;
        }
        h1{margin:5% 1%;}
        p{
            margin:5% 1%;
            text-align: left;
        }
        #welcomeP{
            margin-bottom: 10%;
        }
        #box{
            width: 80%;
        }
        #insideDiv{
            width:70%;
            position: relative;
            left: 20%;
        }
        img{
            width: 90%;
            margin: 5%;
        }
        #logouta{
            text-decoration: none;
            color: #5A54FF;
            font-weight: bold;
        }
        @media (min-width:2000px)
        {
            body{font-size: 30px;}
            h1{font-size: 50px;}
        }
        @media (max-width:1000px)
        {
            #box{margin: 2% 15%;}
        }
        @media (max-width:700px)
        {
            body{font-size: 16px;}
            h1{font-size: 32px;}
            #box{margin: 2% 10%;}
            img{
            width: 40%;
            height: 40%;
            }
        }
        @media (max-width:380px)
        {
            body{font-size: 12px;}
            h1{font-size: 28px;}
            img{
            width: 50%;
            height: 50%;
            }
        }
        
    </style>
</head>
<body>
    <div id="container">
        <div id="box">
            <div id="insideDiv">
            <h1>Welcome!</h1>
            <p id="welcomeP">Hello there! We are extremely happy to have you with us and hope you to have a great experience throughout your time here, Enjoy!</p>
        
            <p>Full Name: <?php echo "<span style='color:#F54E4E; font-weight: bold;'>" .$_SESSION["userName"] 
            ."</span>"; ?></p>
            <p>Email: <?php echo "<span style='color:#F54E4E; font-weight: bold;'>" .$_SESSION["userEmail"] 
            ."</span>"; ?></p>
            <p>Mobile: <?php echo "<span style='color:#F54E4E; font-weight: bold;'>" .$_SESSION["userMobile"] 
            ."</span>"; ?></p>
            </div>
            <a id="logouta" href="../index.html">Log Out</a>
        </div>
        <div id="box2">
            <img src="../Images/IMG1.png">
        </div>
    </div>
</body>
</html>