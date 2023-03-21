<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>test</title>
    <meta name="author" content="Алмаз Сагиров">
    <meta name="description" content="Сайт">
    <link rel="stylesheet" href="main.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://timeplan.me/js/timeplanme_integration.min.js"></script>
</head>
<body>
    <div class="header">
     <div class="high">
        <div class="hight-nav">
            <a class="hight-nav-item"> <img src="Img\icons\phone.png" style="width: 14px" /> +1(23)-45-67-890</a>
            <a class="hight-nav-item"> <img src="Img\icons\map.png" style="width: 14px" />    г. Наб. Челны, пр. Мусы Джалиля, 12</a>
            <a class="hight-nav-item"> <img src="Img\icons\skype.png" style="width: 14px" />   ukitskype</a>
            <a class="hight-nav-item"> <img src="Img\icons\letter.png" style="width: 14px" />   support@ukit.com</a>

            <div class="socium">
                <a class="soc"><img src="Img\vk.png" style="width: 14px" /></a>
                <a class="soc1"><img src="Img\twitter.png" style="width: 14px" /></a>
                <a class="soc2"><img src="Img\instagram.png" style="width: 14px" /></a>
                <a class="hight-nav-item" href="auth.html">  <?= $_SESSION['user']['full_name'] ?></a>

                <a class="hight-nav-item" href="vendor/logout.php" >Выход</a></a>




            </div>

        </div>

    </div>

    <div class="header">
        <div class=" container">
            <div class="header-line">
                <div class="header-logo">
                   <a href="profile.php"><img src="Img\logo.jpg"></a>
                </div>
                <div class='nav'>
                    <a class='nav-item' href="main.php" >ГЛАВНАЯ</a>
                    <a class='nav-item' href="main.php">УСЛУГИ</a>
                    <a class='nav-item' href="service.php">ПРАЙС</a>
                    <a class='nav-item' href="#port">ПОРТФОЛИО</a>
                    <a class='nav-item' href="news.php">НОВОСТИ</a>
                    <a href='jopa.html' style=" text-decoration: none; color: #000000;text-decoration: none;transition: color 0.3s linear;;">ЗАПИСАТЬСЯ</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
   


 <div class="parent" style=" flex-direction: column; width: 100%; height: 100%;position: fixed; top: 0; left: 0; display: flex;align-items: center; align-content: center; justify-content: center; overflow: auto; ">
    <div>
            <h1>Тут могут быть различные новости! :)</h1><br>
            <img src="Img\Dizayn.gif" alt="" style="display: block;border: none; margin: auto; border-radius: 10px;">
    </div>

</div>

</body>

</html>
