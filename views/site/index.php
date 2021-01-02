<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-9">
                    <div class="slider_text">
                        <h3>Привет, я Владимир <br>
                            <span>Web-разработчик</span></h3>
                        <?= Html::a('Работы', ['site/works'], ['class' => 'boxed-btn3-line']) ?>
                    </div>
                </div>
                <div class="my_img d-none d-lg-block">
                    <img src="img/about/my_img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<div class="download_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-10">
                <div class="download_text">
                    <h3>Я web-разработчик фрилансер, специализирующийся на создании сайтов для малого и среднего бизнеса.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="download_left">
                    <p>Вы - начинающий бизнесмен, предприниматель, или просто занимаетесь небольшим, домашним бизнесом? Если вашего бизнеса нет в интернете, вас нет в бизнесе.
                    </p>
                    <p>Даже если вы совершенно ни чего не понимаете в интернете, и сайтах, моя задача объяснить вам, что будет максимально полезно для вашего бизнеса в сети. Я создаю сайты, и группы в соц-сетях, в которых вы сможете публиковать ваши предложения, и на которые вы сможете запустить рекламу. Как следствие, о вас узнают все, кто ищет услуги, подобные вашим и вы получите намного больше заказов от новых клиентов! Свой сайт - это самый важный инструмент развития бизнеса в современном обществе.</p>
                    <!--<a href="#" class="boxed-btn3-line">Download CV</a>-->
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="progress_skills">
                    <div class="single_progress">
                        <div class="label d-flex justify-content-between">
                            <span>Создание сайтов</span>
                            <span>90%</span>
                        </div>
                            <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                    </div>
                    <div class="single_progress">
                        <div class="label d-flex justify-content-between">
                            <span>Создание групп</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar " role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="single_progress">
                        <div class="label d-flex justify-content-between">
                            <span>Оформление в едином стиле</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- service_area start  -->
<div class="service_area">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title mb-50">
                <h3>Мои услуги</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="single_service text-center">
                <div class="icon">
                    <img src="img/svg_icon/2.svg" alt="">
                </div>
                <h3>
                        Адаптивные сайты
                </h3>
                <p>Создание сайтов на базе самых современных шаблонов с использованием лучщей системы управления контентом Wordpress</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single_service text-center">
                <div class="icon">
                    <img src="img/svg_icon/1.svg" alt="">
                </div>
                <h3>
                        Создание групп в соц-сетях
                </h3>
                <p>Создание групп в соц-сетях для вашего бизнеса. </p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single_service text-center">
                <div class="icon">
                    <img src="img/svg_icon/3.svg" alt="">
                </div>
                <h3>
                        Единый дизайн   
                </h3>
                <p>Дизайн ваших групп в едином стиле с вашим сайтом.</p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- service_area end  -->

<!-- gallery_area start  -->
<div class="gallery_area">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title mb-50">
                <h3>Мои работы</h3>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/1.png" alt="">
                        </div>
                        <div class="gallery_heading">
                            <span>Mobile App</span>
                            <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                        </div>
                    </div>
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/2.png" alt="">
                        </div>
                        <div class="gallery_heading">
                            <span>Mobile App</span>
                            <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/3.png" alt="">
                        </div>
                        <div class="gallery_heading">
                            <span>Mobile App</span>
                            <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                        </div>
                    </div>
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="img/gallery/4.png" alt="">
                        </div>
                        <div class="gallery_heading">
                            <span>Mobile App</span>
                            <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_works">
                        <?= Html::a('Больше работ', ['site/works'], ['class' => 'boxed-btn3-line']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- gallery_area end  -->

<!-- testimonial_area  -->
<div class="testimonial_area ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title">
                    <h3>Что говорят мои клиенты</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="row">
                            <div class="col-xl-9 col-md-9">
                                <div class="single_testmonial">
                                    <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form by injected humour or randomised words
                                        which don’t look even slightly believable. If you are going to use a passage.
                                    </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="web/img/case/testmonial.png" alt="">
                                        </div>
                                        <div class="author_name">
                                            <h3>Kalvin Piterson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row">
                            <div class="col-xl-9 col-md-9">
                                <div class="single_testmonial">
                                    <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form by injected humour or randomised words
                                        which don’t look even slightly believable. If you are going to use a passage.
                                    </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="img/case/testmonial.png" alt="">
                                        </div>
                                        <div class="author_name">
                                            <h3>Kalvin Piterson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row">
                            <div class="col-xl-9 col-md-9">
                                <div class="single_testmonial">
                                    <p>“There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form by injected humour or randomised words
                                        which don’t look even slightly believable. If you are going to use a passage.
                                    </p>
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                            <img src="img/case/testmonial.png" alt="">
                                        </div>
                                        <div class="author_name">
                                            <h3>Kalvin Piterson</h3>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->