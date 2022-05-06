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
        }
        #container{padding: 2%;}
        h1{margin: 1%;}
        p{margin: 1%;}
        #box{
            border: solid black 1px;
            border-radius: 20px;
            margin: 2% 20%;
            padding: 2%;
        }
        #box p {
            text-align: left;
            margin: 3%;
        }
        img{
            width: 30%;
            height: 30%;
            margin: 1%;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Welcome!</h1>
        <p>Hello there! We are extremely happy to have you with us and hope you to have a great experience throughout your time here, Enjoy!</p>
        <img src="../Images/IMG1.png">
        <div id="box">
            <p>Full Name: <?php echo "<span style='color:#5A54FF; font-weight: bold;'>" .$_SESSION["userName"] 
            ."</span>"; ?></p>
            <p>Email: <?php echo "<span style='color:#5A54FF; font-weight: bold;'>" .$_SESSION["userEmail"] 
            ."</span>"; ?></p>
            <p>Mobile: <?php echo "<span style='color:#5A54FF; font-weight: bold;'>" .$_SESSION["userMobile"] 
            ."</span>"; ?></p>
        </div>
    </div>
</body>
</html>