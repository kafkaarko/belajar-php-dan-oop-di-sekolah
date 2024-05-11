<?php
session_start();

// Mengecek apakah pengguna sudah login, jika iya, redirect ke halaman utama
if(isset($_SESSION['is_login'])) {
    header("Location: dashboard.php");
    exit();
}

// Mengeset nama pengguna dan kata sandi yang benar
$correct_username = "u";
$correct_password = "p";

// Pesan kesalahan
$error = '';

// Memeriksa apakah form login sudah disubmit
if(isset($_POST['submit'])) {
    // Mendapatkan nilai dari form
    $username = $_POST['username'];
    $password = $_POST['pw'];

    // Memeriksa apakah nama pengguna dan kata sandi yang dimasukkan benar
    if($username === $correct_username && $password === $correct_password) {
        // Menyimpan nama pengguna di sesi
        $_SESSION['username'] = $username;
        
        // Redirect ke halaman utama
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Nama pengguna atau kata sandi salah.";
    }
}

$pengguna = [
    [ 'username' => 'kafka',
        'pw' => 'g'
    ]
];

function login($username , $password){
    global $pengguna;

    foreach($pengguna as $user){
        if($user['username'] == $username && $user['pw'] == $password){
            return true;
        }
    }
    return false;
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['pw'];

    if(login($username,$password)){
        $_SESSION['username'] = $username;
        echo"login berhasil. selamat datang" . $username;
        header('Location: dashbord.php');
        exit();
    }else{
        echo"login gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Nama Pengguna:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Kata Sandi:</label><br>
        <input type="password" id="password" name="password"><br>
        <button type="submit" name="submit">Login</button>
    </form>
    <?php if($error): ?>
    <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
