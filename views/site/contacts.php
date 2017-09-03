<?php  use yii\widgets\ActiveForm;
        use yii\helpers\Html;
?>

    <div class="row">
        <div class="col-md-8 col-sm-8">
            <main>
                <?php $form = ActiveForm::begin(); ?>
                    <div class="form-title">форма зворотнього зв’язку</div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <?= $form->field($model,'name',['inputOptions'=>['class'=>'e']])->input('text',['placeholder' => "Ім'я"])->label(false); ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input type="email" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-theme">
                                <?= $form->field($model,'subject',['inputOptions'=>['class'=>'e']])->input('text',['placeholder' => "Тема"])->label(false)?>
                            </div>
                            <div class="form-masage">
                                <textarea placeholder="Текст повідомлення"></textarea>
                            </div>
                            <div class="form-company">
                                <input type="text" placeholder="Керуюча компанія">
                                <?= $form->field($model,'company',['inputOptions'=>['class'=>'e']])->input('text',['placeholder' => "Керуюча компанія"])->label(false) ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4" style="margin-top:10px">
                            <div class="captcha">
                                <div class="g-recaptcha"
                                     data-sitekey="6Lca2CsUAAAAAMwO7o7mKqc4_0cfTGCEgF8uU9Zi"></div>
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8" style="text-align: right; margin-top:10px">
                            <button class="red-button">відправити</button>
                        </div>
                    </div>
                <?php $form = ActiveForm::end(); ?>
            </main>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="cont-img-wrap">
                <div class="img-girl">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 col-sm-7">
            <div class="infoPayment">
                <p class="pay-tile-sub">*Вартість за перший рік, далі п’ять євро на рік. Для громадських<br>
                    організацій та державних установ вартість незмінна - три євро на рiк.</p>
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="infoPayment">
                <p class="pay-sub-title pay-tile-sub">Увага, вартість послуги електронної пошти<br>
                    складає 1 євро на рік. Місце на сервері 1,5 Гб.</p>
            </div>
        </div>
    </div>
