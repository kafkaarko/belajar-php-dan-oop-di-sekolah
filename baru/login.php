<?php
session_start();
if(isset($_SESSION['is_login'])){
        header("Location: dashbord.php");
        exit();
}

$username = "k";
$password = "p";
$pesan = "";
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pw = $_POST['pw'];

    if($user === $username && $pw === $password){
        $_SESSION['username'] = $user;
        header("Location: dashbord.php");
        exit();
    }else{
        $pesan = "pw atau username salah";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background: url(https://i.pinimg.com/originals/1a/a2/00/1aa2008c04d15f46d38b797cb1452ed4.gif);
            background-size: cover;
        }
        .from{
            justify-content: center;
            display: flex;
            margin-top: 6cm;
        }
        *{
    padding:0;
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
    }
    input[type=text],input[type=password]{
    font-family: Arial, Helvetica, sans-serif;
    font-size:20px;
    border-radius: 5px;
    background: transparent;
}
        .btn{
            margin-right: 40px;
        }
        .button{
            border: none;
            background: aqua;
            width: 70px;
            height: 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.5s;
            font-weight: bold;
        }
        .button:hover{
            background: palegreen;
            transition: 0.5s;
        }
        label{
            font-size: 20px;
            font-weight: bold;
        }
        p{
            justify-content: center;
            display: flex;
            color:red;
            font-weight: bold;
            margin-top:20px;
        }
        
    </style>
</head>
<body>
    <div class="from">
        <form action="login.php" method="post" >
            <div class="username">
                <label for="log">login</label>
                <br>
                <input type="text" name="username" id="log">
            </div>
            <div class="pw">
                <label for="pw">password</label>
                <br>
                <input type="password" name="pw" id="pw">
            </div>
            <br>
            <div class="btn">
                <button type="submit" name="submit" class="button">login!!</button>
            </div>
        </form>
    </div>
    <?php if($pesan) :?>
    <p><?= $pesan?></p>
    <?php endif; ?>
</body>
</html>