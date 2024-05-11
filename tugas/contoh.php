<?php

if(@$_POST['bilangan_pertama'] != "" && @$_POST['bilangan_kedua'] != ""){
    $hasilPangkat = $_POST['bilangan_pertama'] ** $_POST['bilangan_kedua'];
}else{  
    echo"<p style='text-align: center; color :red; margin : 10px 0;'>data harus di isi lengkap</p>";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="" method="post" style="display: flex; justify-content:center; ">
        <table border="1">
            <tr>
                <td><label for="">bilangan pertama</label></td>
                <td><input type="number" name="bilangan_pertama"></td>
            </tr>
            <tr>
                <td><label for="">bilangan kedua</label></td>
                <td><input type="number" name="bilangan_kedua"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">hasilkan</button></td>
            </tr>
        </table>
    </form>
    <p style="text-align: center;">
    <?php
    
    if(isset ($hasilPangkat) != "" && $_POST['bilangan_pertama'] != "" && $_POST ['bilangan_kedua'] != ""){
        echo"hasil pangkat <b>" . $_POST['bilangan_pertama'] . "^" . $_POST['bilangan_kedua'] . "=" .$hasilPangkat . "</b>";
    }
    ?>

</p>
</body>
</html>

    
