<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
    <?php include '-header.php'; ?>
    <div class="container-fluid">
        <div class="row eq">
            <div class="col-md-3 col-sm-3 hidden-xs aside">
                <?php include_once '-aside.php'; ?>
            </div>
            <div class="col-md-9 col-sm-9">
                    <?= $content ?>
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-12 aside">
                <?php include '-aside.php'; ?>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3 hidden-xs">
                <div class="f-copyright">
                    Copyright &copy; 2014-2017 UKR.EU <br>
                    Всі права захищені.
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <nav class="f-nav">
                    <ul class="clearfix">
                        <li><a href="#">Керування доменом</a></li>
                        <li><a href="#">Хостинг</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Документи</a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="f-contact">
                    <div class="icon-wrap"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    </div>
                    <span> 0 800 214 513</span>
                    <a class="facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 hidden-lg hidden-md hidden-sm">
                <div class="f-copyright">
                    Copyright © 2014-2017 UKR.EU <br>
                    Всі права захищені.
                </div>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
