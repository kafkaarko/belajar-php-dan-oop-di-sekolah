<?php

echo"<h1>HEADER</h1>";


echo'<a href="?page=home">home</a>';
echo'<a href="?page=house">house</a>';
echo'<a href="?page=abot">abot</a>';
echo"<br>";


if((isset($_GET['page']))){
    $page = $_GET['page'];
    switch($page){
        case "home":
            include"halaman_1.php";
            break;
        case "house":
            echo"ini houssssssse";
            break;
        case "abot":
            echo"ini abottttt";
            break;
        default:
            echo"gk ada bjiwwwww";
            break;
    }
    
}




echo"<h1>FOOTER</h1>";


?>