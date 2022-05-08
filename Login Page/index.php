<?php
session_start();
// print_r($_SESSION["usersData"]);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $LoginEmail= $_POST["LoginEmail"];
    $LoginPassword= $_POST["LoginPassword"];

    if(empty($LoginEmail)){
        $LoginEmailReq= "<span style='color: red;'> Please enter your email </span>";
        echo $LoginEmailReq;
    }
    else if(empty($LoginPassword)){
        $LoginPasswordReq= "<span style='color: red;'> Please enter your password </span>";
        echo $LoginPasswordReq;
    }else{
        foreach ($_SESSION["usersData"] as $key => $value) {
            if($LoginEmail == $value["email"] && $LoginPassword == $value["password"] && $value["admin"] == true){
                header('Location: ../Admin Page/index.php');
            }
            if($LoginEmail == $value["email"] && $LoginPassword == $value["password"] && $value["admin"] == false){
                $_SESSION["userEmail"]= $value["email"];
                $_SESSION["userName"]= $value["name"];
                $_SESSION["userMobile"]= $value["mobile"];
                $_SESSION["usersData"][$key]["Last-Login-Date"]= date("d-m-Y - h:i:sa");
                $_SESSION["usersData"];
                header('Location: ../Welcome Page/index.php');
            }else if($LoginEmail == $value["email"] && $LoginPassword != $value["password"]){
                echo "<span style='color: red;'> The Email or password is wrong </span>";
                break;
            }
        }
    }


    if(!empty($LoginEmail)) $x5= $LoginEmail;

}


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
    <title>Login</title>
    <style>
        body{
            text-align: center;
            font-size: 20px;
            font-family: 'Josefin Sans', sans-serif;
        }
        div{padding: 5%;}
        h1{margin: 2%;}
        #p1{margin: 2%;}
        label{
            margin-top: 2%;
        }
        #LoginEmailLabel{
            position: relative;
            left: -11%;
        }
        #LoginPasswordLabel{
            position: relative;
            left: -10%;
        }
        input{
            width: 25%;
            height: 5vh;
            margin-bottom: 2%;
            font-size: 20px;
            font-family: 'Josefin Sans', sans-serif;
        }
        input::placeholder {
            font-size: 18px;
            font-family: 'Josefin Sans', sans-serif;
        }
        button{
            width: 25%;
            height: 6vh;
            border-radius: 25px;
            margin-top: 2%;
            border: solid black 1px;
            background-color: #F54E4E;
            color: white;
            font-size: 20px;
            font-family: 'Josefin Sans', sans-serif;
        }
        a{
            text-decoration: none;
            font-weight: bold;
            color: black;
        }
        @media (min-width:2000px)
        {
            body{font-size: 30px;}
            h1{font-size: 50px;}
            input{font-size: 30px;}
            input::placeholder {font-size: 28px;}
            button{font-size: 30px;}
        }
        @media (max-width:1000px)
        {
            input{width: 30%;}
        }
        @media (max-width:700px)
        {
            body{font-size: 16px;}
            h1{font-size: 32px;}
            input{font-size: 16px;}
            input::placeholder {font-size: 14px;}
            button{font-size: 16px;}
        }
        @media (max-width:380px)
        {
            body{font-size: 12px;}
            h1{font-size: 28px;}
            input{font-size: 12px;
                width: 35%;
            }
            input::placeholder {font-size: 10px;}
            button{font-size: 12px;}
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="" method="post">
            <p id="p1">Welcome back! Login with your credentials.</p>

            <label for="LoginEmail" id="LoginEmailLabel">Email</label> <br>
            <input type="text" id="LoginEmail" name="LoginEmail" placeholder="abc@gmail.com" 
            value="<?php if(isset($x5)) echo $x5;?>"> <br>

            <label for="LoginPassword" id="LoginPasswordLabel">Password</label> <br>
            <input type="password" id="LoginPassword" name="LoginPassword"> <br>

            <button type="submit">Login</button> <br>
        </form>
        <p id="p2">Don't have an account?<a href="../Sign Up Page/index.php">Sign Up</a></p>
    </div>
</body>
</html>