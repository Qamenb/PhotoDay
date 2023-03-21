<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>PhotoDay</title>
    <meta name="author" content="Алмаз Сагиров">
    <meta name="description" content="Сайт">
    <link rel="stylesheet" href="main.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
	<div class="page"><div class="header">
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
                    <a class='nav-item' href="profile.php" >ГЛАВНАЯ</a>
                    <a class='nav-item' href="main.php">УСЛУГИ</a>
                    <a class='nav-item' href="service.php">ПРАЙС</a>
                    <a class='nav-item' href="gallary/index.html">ПОРТФОЛИО</a>
                    <a class='nav-item' href="news.php">НОВОСТИ</a>
                    <a href="jopa.html"  style=" text-decoration: none; color: #000000;text-decoration: none;transition: color 0.3s linear;;">ЗАПИСАТЬСЯ</a>
                </div>
            </div>
        </div>
    </div>
</div>

   <div class="main">
	<table style="width: 85%; margin: auto;">
		<tr><td  colspan="3" align="center"><h2 style="padding: 15px">Перечень услуг фотосалона</h2></td></tr>
	<tr style="font-weight: bold;">
		<td>Категория</td>
		<td>Название услуги</td>
		<td>Цена</td>
	</tr> 
	<tr>
		<td>Видео съемка</td>
		<td>Love Story</td>
		<td>5000 руб / 1 час</td>
	</tr> <tr>
		<td>Фото съемка</td>
		<td>Свадьба</td>
		<td>2000 руб / 1 час</td>
	</tr> <tr>
		<td>Фото съемка</td>
		<td>Прогулка</td>
		<td>3400 руб / 1 час</td>
	</tr> <tr>
		<td>Фото съемка</td>
		<td>Портрет</td>
		<td>2900 руб / 1 час</td>
	</tr> <tr>
        <td>Печать фотографий (оформляется в фотостудии)</td>
        <td>Печать  А4</td>
        <td>60  руб / 0 час</td>
    </tr> <tr>
        <td>Печать фотографий (оформляется в фотостудии)</td>
        <td>Печать 10х15</td>
        <td>10 руб / 0 час</td>
    </tr> <tr>
        <td>Печать фотографий (оформляется в фотостудии)</td>
        <td>Печать А3</td>
        <td>20 руб / 0 час</td>
        </tr>
  </table>
	</div>

<div class="footer">

    <div class="about"  style="width: 33.33333333%; z-index: 5; padding-top: 60px;"><h2 >Немного о нас </h2><br>Приглашаем вас ознакомиться с нашим портфолио и подарить себе незабываемые впечатления, воспользовавшись нашими услугами.</div>

    <div class="cont" id="co" style="width: 33.33333333%; pading-top: 60px"><h2 class="h21">Контакты</h2><br>
        <ul>
            <li><a class="hight-nav-item" href="tel:+79534964431" style="padding-bottom: 15px" > <img src="Img\icons\phone.png" style="width: 14px; " />  +7(953)-496-44-31 </a></li>            
            <li><a class="hight-nav-item" href="#map"> <img src="Img\icons\map.png" style="width: 14px" /> г. Наб. Челны, пр. Мусы Джалиля, 12</a></li>
            <li><a class="hight-nav-item" href="skype:genius.gell35?chat"> <img src="Img\icons\skype.png" style="width: 14px" />ukitskype</a></li>
            <li><a class="hight-nav-item" href="mailto:genius.gell35@gmail.com"> <img src="Img\icons\letter.png" style="width: 14px" />   support@ukit.com</a></li>
        </ul>
   
    </div>

        <form style="" name="form" action="mail.php" method="post" id="form_message">
        <h2 style="text-align: left; ">Напишите нам</h2><br>

        <p> <div class="titles"></div> <input class="input" name="name" type="text" placeholder="Ваше имя*"/> </p>

        <p> <div class="titles"></div> <input class="input" name="email" type="text" placeholder="E-mail" /> </p>

        <p> <div class="titles"></div> <input class="input" name="subjects" type="text"placeholder="Тема сообщения"/> </p>
        
        <p> <div class="titles"></div><textarea name="message" cols="22" rows="5"  /></textarea></p><br>
        <p><input id="submit" value="Отправить" type="submit" style="background-color: orange; " /></p>
        </form>
 
</div>

</div>


</body>

</html>