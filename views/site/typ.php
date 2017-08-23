<?php $this->registerJs('var slides = document.querySelectorAll("#slides .slide");
                                var currentSlide = 0;
                                var slideInterval = setInterval(nextSlide, 5000);

                                function nextSlide() {
                                    slides[currentSlide].className = "slide";
                                    currentSlide = (currentSlide + 1) % slides.length;
                                    slides[currentSlide].className = "slide showing";
                                }', $this::POS_READY,'slide');?>

    <div class="girl-second">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <main>
                    <div class="thanks-item">
                        <h1 class="title-thaks">
                            Дякуємо Вам
                        </h1>
                        <h3 class="sub-title-thanks">
                            за ваше замовлення та оплату!<br>
                            Приємного користування.
                        </h3>
                        <p class="thanks">
                            Вам було відправлено листа з усіма подробицями.
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <div class="row push-bottom">
            <div class="col-md-7 col-sm-7">
                <div class="infoPayment">
                    <p>*Вартість за перший рік, далі п’ять євро на рік. Для громадських
                        організацій та державних установ вартість незмінна - три євро на рiк.</p>
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="infoPayment">
                    <p class="pay-sub-title">Увага, вартість послуги електронної пошти
                        складає 1 євро на рік. Місце на сервері 1,5 Гб.</p>
                </div>
            </div>
        </div>
    </div>


