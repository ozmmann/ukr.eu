<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Логін';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php //echo Yii::$app->getSecurity()->generatePasswordHash('123')?>
<div class="mang-wrap site-login">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
            <div class="mng-item">
                <?= $form->field($model, 'username',['inputOptions'=>['class'=>'e']])->input('text',['placeholder' => "Логін"])->label(false); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mng-item">
                <?= $form->field($model, 'password',['inputOptions'=>['class'=>'e']])->input('password',['placeholder' => "Пароль"])->label(false); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="btn-mng">
                <?= Html::submitButton('Увійти', ['class' => 'red-button', 'name' => 'login-button']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
