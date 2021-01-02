<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                <ul id="navigation">
                                        <li><?= Html::a('Главная', ['site/index']) ?></li>
                                        <li><?= Html::a('Работы', ['site/works']) ?></li>
                                        <li><?= Html::a('Услуги', ['site/services']) ?></li>
                                        <!--<li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                    <li><a href="works_details.html">work details</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>-->
                                        <li><?= Html::a('Обо мне', ['site/about']) ?></li>
                                        <!--<li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>-->
                                        <li><?= Html::a('Контакты', ['site/contact']) ?></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <?= Html::a('Давайте обсудим', ['site/contact']) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3><?= Html::encode($this->title) ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->
    
       
<?= Alert::widget() ?>
<?= $content ?>
    


<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="lets_talk">
                        <h3>Хотите сделать заказ? <a href="#">Пишите!</a> </h3>
                        <p>Вы можете написать в одну из моих групп в соц-сетях, или прямо на почту. Я отвечу вам в самое ближайшее время!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="single_links d-flex justify-content-between align-items-center">
                        <span>Behance</span>
                        <a href="#"> <i class="fa fa-behance"></i> </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single_links d-flex justify-content-between align-items-center">
                        <span>Dribbble</span>
                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single_links d-flex justify-content-between align-items-center">
                        <span>Medium</span>
                        <a href="#"> <i class="fa fa-medium"></i> </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single_links d-flex justify-content-between align-items-center">
                        <span>Linkedin</span>
                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
