<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
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
                            <li><a href="#">Полезная информация</a></li>
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
    <div class="container">
        <div class="col-lg-4">
            <p id="s-sec-1">СТРАХОВАНИЕ<br>ВАШЕГО</p>
            <p id="s-sec-2"><b>АВТОМОБИЛЯ</b></p>
            <span class="s-sec-3">КАСКО</span><span class="s-sec-4">Диагностическая карта</span>
            <span class="s-sec-5" >ОСАГО</span><span class="s-sec-4">Зеленые карты</span>
            <button id="b-more-info"><span>УЗНАТЬ ПОДРОБНОСТИ >>></span></button>
        </div>
    </div>
</section>
<section id="main-content">
    <div class="container">
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
            <div class="col-lg-4">
                <div  class="col-lg-12 c-s-b-transport">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-12 c-s-b-medical">
                    <button id="s-s-detail"><p style="font-family: 'Century Gothic';font-size: 12px;margin-bottom: 0px">УЗНАТЬ ПОДРОБНОСТИ >>></p></button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-12 c-s-b-insurance">

                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>