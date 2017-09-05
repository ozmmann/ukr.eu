<?php  use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<main>
    <?php $form = ActiveForm::begin(); ?>
        <div class="reg-mail-form">
            <div class="form-title">Реєстрація поштової скриньки</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="reg-mail-input">
                        <?= $form->field($userReg,'user_email',['inputOptions'=>['class'=>'e']])->input('email',['placeholder' => "Email*"])->label(false); ?>
                        <span class="ukr-copy">@ukr.eu</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($userReg,'password',['inputOptions'=>['class'=>'e']])->input('password',['placeholder' => "Пароль*"])->label(false); ?>
                    <span>Мінімум 8 знаків. Букви і цифри латиницею.</span>
                </div>
                <div class="col-md-4">
                    <?= $form->field($userReg,'password',['inputOptions'=>['class'=>'e']])->input('password',['placeholder' => "Підтвердіть пароль*"])->label(false); ?>
                    <input type="password" placeholder="Підтвердіть пароль*">
                </div>
                <div class="col-md-4">
                    <input type="email" placeholder="Запасний E-mail*">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" placeholder="Ім‘я*">
                    <span style="color: #e82d24">*Ці поля є обов’язковими для заповнення </span>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Прізвище*">
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Телефон*">
                    <span>У  форматі +38 (0ХХ) ХХХ ХХ ХХ</span>
                </div>
                <div class="col-md-12" style="text-align: center; margin-top:10px">
                    <button class="red-button">перейти до оплати</button>
                </div>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
    <div class="payment-container">
        <div class="col-md-7">
            <div class="infoPayment">
                <p>*Вартість за перший рік, далі п’ять євро на рік. Для громадських<br>
                    організацій та державних установ вартість незмінна - три євро на рiк.</p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="infoPayment">
                <p class="pay-sub-title">Увага, вартість послуги електронної пошти<br>
                    складає 1 євро на рік. Місце на сервері 1,5 Гб.</p>
            </div>
        </div>
    </div>
</main>
