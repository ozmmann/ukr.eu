<?php
    use yii\helpers\Url;
?>
<header class="header">
	<div class="top-line">
		<div class="container-fluid">
			<div class="row">
				<div class="hidden-lg hidden-md hidden-sm col-xs-12">
					<div class="h-contact clearfix">
						<div class="icon-wrap"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
						</div>
						<a href="tel:0 800 214 513" class="number"> 0 800 214 513</a>
							<select name="lang" class="lang">
								<option value="ua">ua</option>
								<option value="ru">ru</option>
								<option value="en">en</option>
							</select>
					</div>
				</div>
				<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
					<a href="<?= Url::to(['/site/index'])?>" class="logo">
						<img src="../img/logo.png" alt="Logo">
					</a>
					<nav class="h-nav">
						<a href="" class="touch-menu"><i class="fa fa-list" aria-hidden="true"></i></a>
						<ul class=" h-menu">
							<li><a href="<?= Url::to(['/site/domains-management'])?>">Керування доменом</a></li>
							<li><a href="<?= Url::to(['/site/hosting'])?>">Хостинг</a></li>
							<li><a href="<?= Url::to(['/site/faq'])?>">FAQ</a></li>
							<li><a href="<?= Url::to(['/site/docs'])?>">Документи</a></li>
							<li><a href="<?= Url::to(['/site/contact'])?>">Контакти</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-3 col-sm-3 hidden-xs">
                    <a href="<?= Url::to(['/site/index'])?>" class="logo">
                        <img src="../img/logo.png" alt="Logo">
					</a>
				</div>
				<div class="col-md-6 col-sm-5 hidden-xs">
					<nav class="h-nav">
						<ul class="clearfix">
                            <li><a href="<?= Url::to(['/site/domains-management'])?>">Керування доменом</a></li>
                            <li><a href="<?= Url::to(['/site/hosting'])?>">Хостинг</a></li>
                            <li><a href="<?= Url::to(['/site/faq'])?>">FAQ</a></li>
                            <li><a href="<?= Url::to(['/site/docs'])?>">Документи</a></li>
                            <li><a href="<?= Url::to(['/site/contact'])?>">Контакти</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-3 col-sm-4 hidden-xs">
					<div class="h-contact clearfix">
						<div class="icon-wrap"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
						</div>
						<a href="tel:0 800 214 513" class="number"> 0 800 214 513</a>
						<select name="lang" class="lang">
							<option value="ua">ua</option>
							<option value="ru">ru</option>
							<option value="en">en</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="domen-name-selection">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="domen-name">
						<form action="">
							<input type="text"  placeholder="Оберіть своє краще доменне ім’я">
							<span class="ukr-copy">ukr.eu</span>
							<button>перевірити</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="status-panel">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="status-panel-default sp-active">
						Доменне  ім'я  у  зонi  <span>ukr.eu</span>  всього  від  3  євро  на  рік*.
					</div>
				</div>
			</div>
		</div>				
	</div>
</header>  