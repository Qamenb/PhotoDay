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
<body>

    <!-- Форма регистрации -->
<div class="regcontrol">
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        
        <h1 style="margin-bottom: 40px;">Регистрация</h1>

        <input type="text" name="full_name" placeholder="Введите свое полное имя">

        <input type="text" name="login" placeholder="Введите свой логин">

        <input type="email" name="email" placeholder="Введите адрес своей почты">


        <input type="password" name="password" placeholder="Введите пароль">

        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p style="text-align: right;">
         <a href="/">Авторизоваться</a>

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