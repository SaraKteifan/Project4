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
    <title>Admin</title>
    <style>
        body{
            text-align: center;
            font-size: 20px;
            font-family: 'Josefin Sans', sans-serif;
        }
        div{padding: 5%;}
        h1{margin: 1%;}
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        table{
            margin: auto;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>
    
    <div>
        <h1>Users Data</h1>
       <table> 
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Account Cration Date</th>
            <th>Last Login Date</th>
        </tr>
        <?php
        $id= 1;
        foreach ($_SESSION["usersData"] as $value) {
            echo "<tr>
                    <td>".$id."</td>
                    <td>".$value["name"]."</td>
                    <td>".$value["email"]."</td>
                    <td>".$value["password"]."</td>
                    <td>".$value["Cration_Date"]."</td>
                    <td>".$value["Last-Login-Date"]."</td>
                </tr>";
            $id++;
        }
        ?>
    </table>
</div>
</body>
</html>