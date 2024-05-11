<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashbord</title>
    <style>
        /* CSS untuk styling navbar */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body{
            background: url(https://upload-os-bbs.hoyolab.com/upload/2023/03/03/258122144/5fcb5b7238144e58a3feb870298f600d_6032664643475452325.gif);
            background-size: cover;
        }

        .navbar {
            background-color: transparent;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: aqua;
            color: black;
            transition: 0.5s;
            border-radius: 40px;
        }
        .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    span{
        float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
    }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#home">Home</a>
    <div class="dropdown">
        <span>Tugas</span>
        <div class="dropdown-content">
            <a href="nilai.php">Link 1</a>
            <a href="#">Link 2</a>

        </div>
    </div>
</div>
<h1><?= ($k);?></h1>
</body>
</html>
