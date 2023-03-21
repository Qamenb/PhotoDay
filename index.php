<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/lol.css">
</head>
<body class="auth">

<!-- Форма авторизации -->
<div class="control">      

        <form action="vendor/signin.php" method="post">
            <h1 style="margin-bottom: 40px;">Войти в аккаунт</h1>
            <input type="text" name="login" placeholder="Введите логин">
            <input type="password" name="password" placeholder="Введите пароль">
            <button type="submit">Войти</button>
            <p style="text-align: right;">
                 <a href="/register.php">Создать аккаунт</a>
            </p>
<?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
?>
        </form>

</div>

</body>
</html>