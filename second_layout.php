<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Clear+Sans+Thin">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <section id="s-menu">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid navmenu">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>


                    <div class="collapse navbar-collapse navmenu" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="second_layout.php">Полезная информация</a></li>
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Отзывы</a></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="h-m-block">
                                <div class="form-group s-form">
                                    <input id="s-input-h" type="text" class="form-control" placeholder="Поиск">
                                </div>
                                <div class="form-group s-form">
                                    <button id="s-button" type="submit" class="btn btn-default"></button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </section>
    <section id="header-content">
        <div class="container">
            <div class="col-lg-3 h-content">
                <img id="h-logo" src="image/logo.png" alt="alt">
            </div>
            <div class="col-lg-6 h-content">
                <p id="h-onmarket">НА РЫНКЕ СТРАХОВАНИЯ С 1997 года</p>
                <div id="h-content-info" class="col-xs-12 no-padding">
                    <ul>
                        <li>
                            <p class="h-cont-p no-margin">ЧАСТНЫМ КЛИЕНТАМ</p>
                        </li>
                        <li>
                            <p class="h-cont-p no-margin" >КОРПОРАТИВНЫМ КЛИЕНТАМ</p>
                        </li>
                        <li>
                            <p class="h-cont-p no-margin" >ОБ АГЕНСТВЕ</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 h-content">
                <div id="h-cont-al-ds">
                    <span id="d-sp-p">+7(473)</span><span id="d-sp">239 31 07</span>
                </div>
                <p class="office_n no-margin">+7 (906) 584 28 26</p>
                <p class="saleoffice no-margin">Офис продаж</p>
            </div>
        </div>
    </section>
</header>
<section id="slider-section">
    <!--
    <div class="container">
        <div class="col-lg-4">
            <p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
            <p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
            <span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
            <span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
            <button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
        </div>
    </div>
    -->
    <div style="width: 100%" id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--autoslide off data-interval="false" -->
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0"><a style="display: none" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"></a></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <!--
                <img id="slider_bg_img" src="image/slider_bg.png">
                -->
                <!--
                <div class="carousel-caption">
                -->
                <div class="container">
                    <div class="col-xs-4">
                        <p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
                        <p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
                        <span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
                        <span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
                        <button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
                    </div>
                </div>
                <!-- </div>-->
            </div>
            <div class="item">
                <div class="container">
                    <div class="col-xs-4">
                        <p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
                        <p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
                        <span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
                        <span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
                        <button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="col-xs-4">
                        <p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
                        <p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
                        <span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
                        <span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
                        <button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section id="main-content">
    <div class="container">
        <!--
        <div id="buttons-m-c" style="padding: 30px;" class="row">
            <div  class="col-lg-3 t-elign-c">
                <img id="b-f-b" src="image/b_people.png">
            </div>
            <div class="col-lg-3 t-elign-c">
                <button id="b-money" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">ВОПРОС<br>СПЕЦИАЛИСТУ</p></button>
            </div>
            <div class="col-lg-3 t-elign-c">
                <button id="b-tool" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СТРАХОВОЙ<br>СЛУЧАЙ</p></button>
            </div>
            <div class="col-lg-3 t-elign-c">
                <button id="b-agent" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СВЯЗАТЬСЯ С<br>АГЕНТОМ</p></button>
            </div>
        </div>
        <div id="c-services" style="padding: 30px;" class="row">
            <div class="col-xs-4">
                <div  class="col-lg-12 c-s-b-transport">

                </div>
            </div>
            <div class="col-xs-4">
                <div class="col-lg-12 c-s-b-medical">
                    <button id="s-s-detail"><p>УЗНАТЬ ПОДРОБНОСТИ >>></p></button>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="col-lg-12 c-s-b-insurance">

                </div>
            </div>
        </div>
        -->
        <div class="row">
            <div id="breadcrams" class="col-xs-12">
                <ol class="breadcrumb layout">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Частным клиентам</a></li>
                    <li class="active">Зеленая карта</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div id="cont-line-layout2" class="col-xs-11">

            </div>
        </div>
        <div class="row">
            <div  class="col-xs-11 center">
                <div class="col-xs-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <p style="color: rgb(52,52,52);font-size: 30px">PAGE TITLE</p>
                        </div>
                    </div>
                    <div style="padding: 20px 0px;" class="row">
                        <div class="col-lg-12">
                            <img id="c-layout-i" src="image/image_layout2.png" alt="alt">
                        </div>
                    </div>

                    <table class="table-full">
                        <tr>
                            <td colspan="2">
                                <p class="c-about-comp">ЭГИДА - современная страховая компания, которая применяет в своей работе новейшие технологии<br>
                                    и лучшие международные пратики в сфере управления процессами. Компания входит в глобальную страховую
                                    группу Liberty Mutual, которая успешно работает на страховом рынке с 1912 года и являеться одной из крупнейших в мире.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p class="c-about-comp">
                                    В своей работе на российском рынке мы следуем стандартам и принципам работы Liberty Mutual, главной из которых -
                                    правильное и ответственное отношение к клиентам, деловым партнерам, сотрудникам и делу, которым мы занимаемся.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 21px;vertical-align: top">
                                <span class="dot"></span>
                            </td>
                            <td>
                                <p class="c-about-comp">
                                    Мы сотрудничаем с ведущими страховыми компаниями и банками России
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 21px;vertical-align: top">
                                <span class="dot"></span>
                            </td>
                            <td>
                                <p class="c-about-comp">
                                    Мы непредвзято относимся к страховщикам и банкам объективно показываем<br>
                                    вам как преимущества, так и недостатки того или иного продукта в разных компаниях
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 21px;vertical-align: top">
                                <span class="dot"></span>
                            </td>
                            <td>
                                <p class="c-about-comp">
                                    Мы - это опытная команда страховых, финансовых специалистов и юристов, которая
                                    обеспечивает поддержку на всех этапах заказа или просчета услуги
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p class="c-about-comp">
                                    Мы стремимся быть лучшими страховыми партнерами для наших клиентов: предлагать лучьшие продукты, лучшие цены и, конечно,
                                    лучший уровень обслуживания. Судя по оценкам, которые мы получаем от наших клиентов, у нас это получается.
                                    Мы будем рады,если и вы оцените нашу работу: вы можете позвонить в Центр контроля качества, отправить информацию через сайт или обратиться
                                    в любой из наших офисов. Мы работаем для вас и отвечаем для вас и отвечаем зв результат. И мы будем рады разделить наши успехи и
                                    достижения вместе с вами.
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="second_layout_menu" class="col-xs-4">
                    <button id="layout_f_b">ПРОВЕРИТЬ СВОЙ ПОЛИС</button>
                    <button id="layout-topmenu">ЧАСТНЫМ КЛИЕНТАМ</button>
                    <ul id="layout_menu">
                        <li>
                            <a href="#">ЗЕЛЕНЫЕ КАРТЫ</a>
                        </li>
                    </ul>
                    <button id="layout-bottommenu">КОРПОРАТИВНЫМ КЛИЕНТАМ</button>
                </div>
            </div>
        </div>
    </div>
    <div id="call-b-bg" class="col-xs-12">
        <div style="padding: 30px;text-align: center" class="col-lg-8 center">
            <p style="font-size: 30px;color: white">
                Один номер для любого вопроса <b>+7(473) 239 31 07</b>
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <a id="a-tech" href="#"><span id="technologi"></span>Обратный звонок</a>
                </div>
                <div class="col-lg-6">
                    <a id="a-map" href="#"><span id="map_b"></span>Обратный звонок</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Section -->
<!--
<section>

    <div  style="min-height: 500px"  class="col-lg-5 col-lg-offset-1">
        <div class="col-xs-12">
            <p style="font-size: 30px">Новости</p>
        </div>
        <div class="col-xs-6">
            <button class="news-button">ПОДРОБНЕЕ >></button>
        </div>
        <div class="col-xs-6">
            <button class="news-button">ПОДРОБНЕЕ >></button>
        </div>
    </div>
    <div style="background: rgb(235,234,230);min-height: 500px" class="col-lg-6">
        <div class="col-lg-11">
            <div class="col-xs-12">
                <p style="font-size: 30px">Полезная информация</p>
            </div>
            <div class="col-xs-12 no-padding">
                <div class="col-xs-6">
                    <button class="news-button">ПОДРОБНЕЕ >></button>
                </div>
                <div class="col-xs-6">
                    <button class="news-button">ПОДРОБНЕЕ >></button>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<section>
    <div class="container">
        <!--
        <div style="text-align: center;padding: 10px" class="col-xs-12">
            <img id="ou-clients" src="./image/clients.png" alt="alt">
        </div>
        -->
            <div style="padding: 20px" class="col-lg-12">
                <div  class="col-lg-3 t-elign-c">
                    <img id="b-f-b" src="image/b_people.png">
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-money" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">ВОПРОС<br>СПЕЦИАЛИСТУ</p></button>
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-tool" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СТРАХОВОЙ<br>СЛУЧАЙ</p></button>
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-agent" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СВЯЗАТЬСЯ С<br>АГЕНТОМ</p></button>
                </div>
            </div>
    </div>
    <div id="orange-line" class="col-lg-12">

    </div>
</section>

<section style="background: rgb(247,247,247)">
    <div class="container">
        <div style="padding: 40px" class="row">
            <div class="col-lg-6">
                <div class="col-lg-12">
                    <p style="color:rgb(68,66,67)"><b>УСЛУГИ СТРАХОВАНИЯ ДЛЯ ФИЗИЧЕСКИХ ЛИЦ</b></p>
                </div>
                <div class="col-lg-6">
                    <p class="f-h-text"><b>Автостахование</b></p>
                    <p class="f-text">КАСКО</p>
                    <p class="f-text">ОСАГО</p>
                    <p class="f-text">Диагностическая карта</p>
                    <p class="f-text">Зеленые карты</p>
                    <p class="f-text">Проведение независимой<br>экспертизы при ДТП</p>
                    <p class="f-text">Выезд эксперта-техника на дом</p>
                    <p class="f-h-text"><b>Личное страхование</b></p>
                    <p class="f-text">Страхование туристов</br>выезжающих за рубеж</p>
                    <p class="f-text">Страхование детей</p>
                </div>
                <div class="col-lg-6">
                    <p class="f-h-text"><b>Страхование имущества</b></p>
                    <p class="f-text">Квартиры</p>
                    <p class="f-text">Ипотека</p>
                    <p class="f-text">Дома,таунхаусы</p>
                    <p class="f-text">Дачи</p>
                    <p class="f-text">Гражданская ответсвенность</p>
                    <p class="f-h-text"><b>Оформление купли продажы</b></p>
                    <p class="f-text">Автомобили</p>
                    <p class="f-text">Мотоциклы</p>
                    <p class="f-text">Сельхозтехника</p>
                    <p class="f-text">Дачи</p>
                    <p class="f-text">Маломерные суда</p>
                    <p class="f-text">Утилизация</p>
                </div>
            </div>
            <div  class="col-lg-6">
                <div id="f-t-inst" class="col-lg-12">
                    <div class="col-lg-12">
                        <p style="color:rgb(68,66,67);"><b>УСЛУГИ СТРАХОВАНИЯ ДЛЯ ЮРИДИЧЕСКИХ<br>ЛИЦ И ИНДИВИДУАЛЬНЫХ ПРЕДПРИНИМАТЕЛЕЙ</b></p>
                    </div>
                    <div class="col-lg-6">
                        <p class="f-h-text"><b>Авто страхование</b></p>
                        <p class="f-text">КАСКО</p>
                        <p class="f-text">ОСАГО</p>
                        <p class="f-text">Диагностическая карта</p>

                    </div>
                    <div class="col-lg-6">
                        <p style="color:rgb(68,66,67);font-family: 'Century Gothic';margin-top: 20px"><b>Имущество</b></p>
                        <p class="f-text"><b>Грузоперевозки</b></p>
                        <p class="f-text"><b>Ответственность</b></p>
                        <p class="f-text"><b>Опасные объекты</b></p>
                    </div>
                </div>
                <div id="f-info-body" class="col-lg-12">
                    <p class="f-text">Есть вопрос? Звоните:</p>
                    <p id="f-c-number">+7 (473) 239 31 07</p>
                    <p class="f-text">Воронеж, Красноармейская, 62<br>vor_golas@email.reso.ru</p>
                </div>
            </div>
        </div>
    </div>
    <div id="grey-line" class="col-lg-12">

    </div>
    <div style="padding: 10px;text-align: center" class="col-lg-12">
        <img id="creatby" src="image/creatby.png" alt="alt">
    </div>
</section>



</body>
</html>