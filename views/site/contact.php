<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aada6e3add603300969df0efa9bf357bdf63fd793db879b4309c1c2cbef996151&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Задайте вопрос</h2>
        </div>
        <div class="col-lg-8">
            <?php $form = ActiveForm::begin(['id' => 'contactForm',
                                             'class' => 'form-contact contact_form']); ?>   
                <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <?= $form->field($model, 'body')->textarea(['rows' => 9, 'cols' => '30', 'class' => 'form-control w-100', 'placeholder' => 'Введите текст писма'])->label(false) ?>    
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $form->field($model, 'name')->textInput(['class' => 'form-control',
                                                                    'placeholder' => 'Введите имя'])->label(false) ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?= $form->field($model, 'email')->textInput(['class' => 'form-control',
                                                                    'placeholder' => 'Введите почтовый адрес'])->label(false) ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <?= $form->field($model, 'subject')->textInput(['class' => 'form-control',
                                                                    'placeholder' => 'Введите тему писма'])->label(false) ?>
                    </div>
                </div>
                </div>
                <div class="form-group mt-3">
                    <?= Html::submitButton('Отправить сообщение', ['class' => 'button button-contactForm btn_4 boxed-btn', 'name' => 'contact-button']) ?>
                    
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Россия, Самара.</h3>
              <p>Стара-загора, 195</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+7 (960) 808-81-40</h3>
              <p>С 9:00 до 16:00.</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>Kazzi85@mail.ru</h3>
              <p>Пишите в любое время!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->