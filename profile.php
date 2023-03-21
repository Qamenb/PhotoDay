<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PhotoDay</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
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
            <a class="hight-nav-item" href="tel:+79534964431"> <img src="Img\icons\phone.png" style="width: 14px" /> +7(953)-496-44-31</a>
            <a class="hight-nav-item" href="#map"> <img src="Img\icons\map.png" style="width: 14px" />    г. Наб. Челны, пр. Мусы Джалиля, 12</a>
            <a class="hight-nav-item" href="skype:genius.gell35?chat"> <img src="Img\icons\skype.png" style="width: 14px" />   ukitskype</a>
            <a class="hight-nav-item" href="mailto:genius.gell35@gmail.com"> <img src="Img\icons\letter.png" style="width: 14px" />   support@ukit.com</a>
            <div class="socium">
                <a class="soc" href="https://vk.com/"><img src="Img\vk.png" style="width: 14px" /></a>
                <a class="soc1" href="https://twitter.com/?lang=ru"><img src="Img\twitter.png" style="width: 14px" /></a>
                <a class="soc2" href="https://www.instagram.com/"><img src="Img\instagram.png" style="width: 14px" /></a>
                <a class="hight-nav-item" href="profile.php">  <?= $_SESSION['user']['full_name'] ?></a>

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

                <div class='nav' style="margin-bottom: 5px;">
                    <a class='nav-item' href="profile.php" >ГЛАВНАЯ</a>
                    <a class='nav-item' href="#price">УСЛУГИ</a>
                    <a class='nav-item' href="service.php">ПРАЙС</a>
                    <a class='nav-item' href="gallary/index.html">ПОРТФОЛИО</a>
                    <a class='nav-item' href="news.php">НОВОСТИ</a>
                    <a href="jopa.html" style=" text-decoration: none; color: #000000;text-decoration: none;transition: color 0.3s linear;;">ЗАПИСАТЬСЯ</a>
                    <a class='nav-item' href="otz.html" style="padding-left: 35px;">ОТЗЫВЫ</a>
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- EasyWeek Appointment Widget: https://easyweek.ru/ -->
<script src="https://widget.easyweek.io/widget.js"></script>
<script>var ewWidget = new EasyWeekWidget({url: 'https://widget.easyweek.io/photoday', button: { text: 'Онлайн-запись', showText: true, color: '#ffffff', background: '#36ab48', textColor: '#383868', textBackground: '#ffffff' }})</script>

    <div class="all">
        <input checked type="radio" name="respond" id="desktop"><a name="main" ></a>
        <article id="slider">
            <input checked type="radio" name="slider" id="switch1">
            <input type="radio" name="slider" id="switch2">
            <input type="radio" name="slider" id="switch3">
            <input type="radio" name="slider" id="switch4">
            <input type="radio" name="slider" id="switch5">
            <div id="slides">
                <div id="overflow">
                    <div class="image">
                        <article> <img src="Img\cam.jpg"></article>
                        <article> <img src="Img\man.jpg" /></article>
                        <article> <img src="Img\lox4.jpg" /></article>
                        <article> <img src="Img\lox5.jpg" /></article>
                        <article> <img src="Img\lox6.jpg" /></article>
                    </div>
                </div>
            </div>
            <div id="controls">
                <label for="switch1"></label>
                <label for="switch2"></label>
                <label for="switch3"></label>
                <label for="switch4"></label>
                <label for="switch5"></label>
            </div>
            <div id="active">
                <label for="switch1"></label>
                <label for="switch2"></label>
                <label for="switch3"></label>
                <label for="switch4"></label>
                <label for="switch5"></label>
            </div>
        </article>
    </div>

    <section class="gallery" ><a name="port" style="padding-top: 140px; margin-top: -140px;"></a>
        <div class="gallery">

            <div class="gallery-list">
                <a href="Img\beetle.jpg" class="gallery-item">
                    <img src="Img\beetle.jpg" alt="alt">
                </a>
                <a href="Img\liberty.jpg" class="gallery-item">
                    <img src="Img\liberty.jpg" alt="alt">
                </a>
                <a href="Img\lighthouse.jpg" class="gallery-item">
                    <img src="Img\lighthouse.jpg" alt="alt">
                </a>

            </div>
            <div class="gallery-list">
                <a href="Img\minimalismo.jpg" class="gallery-item">
                    <img src="Img\minimalismo.jpg" alt="alt">
                </a>
                <a href="Img\salad.jpg" class="gallery-item">
                    <img src="Img\salad.jpg" alt="alt">
                </a>
                <a href="Img\shutterbug.jpg" class="gallery-item">
                    <img src="Img\shutterbug.jpg" alt="alt">
                </a>

            </div>
            <div class="txt">
                <p>
                    <h1>У меня есть камера</h1><span style="font-style: italic;">
                        Я — человек у которого есть камера. Иногда люблю потыкать на кнопку затвора.
                    </span>
                    <br>
                    <br>Довольно часто из этого получаются отличные фото и даже целые выставки. Фотография — это наша жизнь, наша страсть.
                </p>
            </div>
        </div>


        <div class="cards"><a name="news" style="padding-top: 40px; margin-top: -40px;"></a>
            <div class="container">
                <div class="cards-holder">
                    <div class="tex"><h1 style="text-align: center;">Спецпредложение от нашей фотостудии!</h1><br>Почувствуйте себя главным героем, увидьте себя по-новому. Три часа славы в студии, у вас дома или на улице. 50 фотографий, обработка всех удачных снимков, запись на DVD</div>
                    <div class="card">
                        <div class="card-image">
                            <img class="card-img" src="Img\card.png" />
                        </div>
                        <div class="card-title">Мастерство</div>
                        <div class="card-desc" style="text-align: center;">
                            Мы — профессиональные фотографы. Обожаем нажимать на кнопку своего фотоаппарата.
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img class="card-img" src="Img\tr.jpg" />
                        </div>
                        <div class="card-title">Профессионализм</div>
                        <div class="card-desc" style="text-align: center;">
                            Мы — профессиональные фотографы. Обожаем нажимать на кнопку своего фотоаппарата.
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="box">
            <h1 style="text-align:center;">
                Спецпредложение от нашей
                фотостудии!<br>
                
            </h1>
            <p style="text-align:center;">
                <br>
                "Почувствуйте себя главным героем, увидьте себя по-новому. Три часа славы в студии, у вас дома или на улице."
                <br>"50 фотографий, обработка всех удачных снимков, запись DVD"
            </p>
        </div>





        <div class="services" ><a name="price"></a>
            <div class="container2">
                <div class="tex1"><h1 style="text-align: center;">Услуги</h1></div>
                <div class="services-holder">
                    <div class="service">

                        <div class="service-image">
                            <img class="services-img" src="Img\lox3.jpg" />
                        </div> 
                            <div class="service-title">Свадебная </div>
                            <div class="service-desc" style="text-align: left;">
                                <div class="den"><b>Цена: 2000.00 руб.</b><br></div>
                                Печать 10 фотографий за каждый час мероприятия (15x23), прекрасное настроение, отличные фотографии, обработка всех удачных снимков, запись на DVD
                            </div>
                          <div class="button-buy" ><a href="jopa.html" style="text-decoration: none; color: black;">Записаться</a></div>
                          </div>

                    <div class="service">
                        <div class="service-image">
                            <img class="services-img" src="Img\lox.jpg" />
                        </div>
                        <div class="service-title">Прогулка</div>
                        <div class="service-desc" style="text-align: left;">
                            <div class="den"><b>Цена: 3400.00 руб.</b><br></div>
                            Трёхчасовая прогулочная фотосессия с вами и вашими друзьями. Хорошая погода, прекрасное настроение, отличные фотографии, обработка всех удачных снимков, запись на DVD
                        </div>

                        <div class="button-buy"><a href="jopa.html" style="text-decoration: none;color: black;">Записаться</a></div>
                    </div>

                    <div class="service">
                        <div class="service-image">
                            <img class="services-img" src="Img\lox2.jpg" />
                        </div>
                        <div class="service-title">Портрет</div>
                        <div class="service-desc" style="text-align: left;">
                          <div class="den">  <b>Цена: 2900.00 руб.</b><br></div>
                            Почувствуйте себя главным героем, увидьте себя по-новому. Три часа славы в студии, у вас дома или на улице. 50 фотографий, обработка всех удачных снимков, запись на DVD
                        </div>
                        <div class="button-buy"><a href="jopa.html" style="text-decoration: none; color: black;">Записаться</a></div>
                    </div>

                </div>
            </div>
        </div>

<div class="button-all" style="margin:auto;"><a href="service.php" style="text-decoration: none; color: black;" >Показать все услуги</a></div>
    </section>

<div id="map" name="map"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa07f3f2179822d86aa56a492d7c58c48f173dc76085e1089ec7af242990b4532&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>
<div class="footer">

    <div class="about"  style="width: 33.33333333%; z-index: 5; padding-top: 35px;"><h2 >Немного обо мне </h2><br>Сайт писался специально для курсовой работы. Надеюсь,<br> что я смог его сдать. Если что иходник сайта можно получить у меня</div>

    <div class="cont" id="co" style="width: 33.33333333%;"><h2 class="h21">Контакты</h2><br>
        <ul>
            <li><a class="hight-nav-item" href="tel:+79534964431" style="padding-bottom: 15px" > <img src="Img\icons\phone.png" style="width: 14px; " />  +7(953)-496-44-31 </a></li>            
            <li><a class="hight-nav-item" href="#map"> <img src="Img\icons\map.png" style="width: 14px" /> г. Наб. Челны, пр. Мусы Джалиля, 12</a></li>
            <li><a class="hight-nav-item" href="skype:genius.gell35?chat"> <img src="Img\icons\skype.png" style="width: 14px" />ukitskype</a></li>
            <li><a class="hight-nav-item" href="mailto:genius.gell35@gmail.com"> <img src="Img\icons\letter.png" style="width: 14px" />   support@ukit.com</a></li>
        </ul>
    </div>

        <form style="" name="form" action="mail.php" method="post" id="form_message">
        <h2 style="text-align: left; ">Напиши мне(угроза)</h2><br>

        <p> <div class="titles"></div> <input class="input" name="name" type="text" placeholder="Ваше имя*"/> </p>

        <p> <div class="titles"></div> <input class="input" name="email" type="text" placeholder="E-mail" /> </p>

        <p> <div class="titles"></div> <input class="input" name="subjects" type="text"placeholder="Тема сообщения"/> </p>
        
        <p> <div class="titles"></div><textarea name="message" cols="22" rows="5"  /></textarea></p><br>
        <p><input id="submit" value="Отправить" type="submit" style="background-color: orange; " /></p>
        </form>
 
</div>



<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script>
        $(".gallery-list").magnificPopup({
            delegate: "a",
            type: "image",
            gallery: {
                enabled: true
            }
        });
    </script>

    <script>
        jQuery(document).ready(function() {
        jQuery(".nav-item").click(function () {
        elementClick = jQuery(this).attr("href")
        destination = jQuery(elementClick).offset().top - 100;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
        return false;
        });
        });
        </script>
</body>

</html>