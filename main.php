<?php
session_start();
print_r($_SESSION);

if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('location:login.php');
    //Teste de funcionamento sessão abaixo
    // print_r('<br>');
    // print_r('não há sessão ativa');
    // print_r('<br>');
} else {
    $logged = $_SESSION['username'];
    //Teste de funcionamento sessão abaixo
    // print_r('<br>');
    // print_r('há sessão ativa');
    // print_r('<br>');
    // print_r($logged);
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
    <header>
        <ul style="list-style-type: none;; background-color: #ff000a;">
            <li style="text-align: end"><a href="logout.php" class="logout">Logout</a></li>
            <li>
                <h3 style="color: #C0C0C0">
                    <?php
                    echo "Bem vindo, " . $logged;
                    ?>
                </h3>
            </li>
    </header>
    <h1>tela do sistema</h1>
    <a href="login.php"><button>Login</button></a>
</body>

</html>

<!--     // 16:31 #2                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 -->