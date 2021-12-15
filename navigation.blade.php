<header>
    <div class="header_block">
        <div class="navigations_block">

            <div class="logo-home">
                <a href="{{ route('index') }}" class="logo-home_img"><img src="{{ asset('assets/img/logo/logo.png') }}"
                                                                        alt="{{ config('app.name') }} &ndash; Логотип"></a>
            </div>

            <div class="navigations-block__content">

                <a href="tel:+38 096 381 93 23" class="content-number">
                    <div class="icon-call"><img src="{{ asset('assets/img/icons/call 1.png') }}"></div>
                    <div class="phone-number">096 381 93 23</div>
                </a>

                <div class="content-button">
                    <div><a href="#">Главная</a></div>
                    <div><a href="#">Услуги</a></div>
                    <div><a href="#">Прайс</a></div>
                    <div><a href="#">Специалисты</a></div>
                    <div><a href="#">Косметика</a></div>
                    <div><a href="#">До и после</a></div>
                    <div><a href="#">Пациенту</a></div>
                    <div><a href="#">Оборудование</a></div>
                    <div><a href="#">Контакты</a></div>
                </div>

            </div>
        </div>

        <div class="header-slider_info">
            <div class="header-slider">
                <div class="slider-text">
                    <div class="slider-text-left">
                        <div class="about-slider">
                            <ul class="about-slider-content">
                                <li>
                                    <h4 class="about-slider-content__header bold-text">1 Клиника эстетической медицины Face lab</h4>
                                    <p class="description-text about-slider-content__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                </li>
                                <li>
                                    <h4 class="about-slider-content__header bold-text">2 Клиника эстетической медицины Face lab</h4>
                                    <p class="description-text about-slider-content__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                </li>
                                <li>
                                    <h4 class="about-slider-content__header bold-text">3 Клиника эстетической медицины Face lab</h4>
                                    <p class="description-text about-slider-content__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                </li>
                                <li>
                                    <h4 class="about-slider-content__header bold-text">4 Клиника эстетической медицины Face lab</h4>
                                    <p class="description-text about-slider-content__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                                </li>
                            </ul>
                            <div class="about-slider-indicator">
                                <span class="slider__active-slide-index">1</span><i>|</i><span class="slider__all-items-count"></span>
                                <span class="slider-arrow arrow-prev icon-arrow-left"><img src='https://image.ibb.co/h2WX0a/arrow_left.png'></span>
                                <ul class="individual-indicators">
                                    <span class="about-active-indicator"></span>
                                    <li class="slide" id="1"></li>
                                    <li class="slide" id="2"></li>
                                    <li class="slide" id="3"></li>
                                    <li class="slide" id="4"></li>
                                </ul>
                                <span class="slider-arrow arrow-next icon-arrow-right"><img src="https://image.ibb.co/bESGRF/arrow_right.png" alt="arrow_right" border="0"></span>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                var aboutSlider = $('.about-slider-content');
                                $('.about-slider-content').slick({
                                    // dots: true
                                    infinite: true,
                                    arrows: false,
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    mobileFirst: true,
                                    autoplay: true,
                                    autoplaySpeed: 5000,
                                    // prevArrow: "<img src='https://image.ibb.co/h2WX0a/arrow_left.png'>",
                                    // nextArrow: "<img src='../img/background/arrow-right.png'>"
                                });

                                $(".arrow-next").on("click", function() {
                                    $('.about-slider-content').slick("slickNext");
                                    //$(".individual-indicators .slide").removeClass("about-slider-active");
                                    var currentSlideIndex = $(".about-slider-content").slick("slickCurrentSlide")
                                });
                                $(".arrow-prev").on("click", function() {
                                    $(".about-slider-content").slick("slickPrev");
                                    //$(".individual-indicators .slide").removeClass("about-slider-active");
                                    var currentSlideIndex = $(".about-slider-content").slick("slickCurrentSlide");
                                });

                                $('.about-slider-content').on('afterChange', function(event, slick, direction){
                                    var left_val, li_wid = parseInt($(".individual-indicators .slide").css("width"));
                                    var currentSlideIndex = $(".about-slider-content").slick("slickCurrentSlide");
                                    //$(".individual-indicators .slide").removeClass("about-slider-active");
                                    //var currentSlideIndex = $("li.slick-acitve").attr('id');
                                    left_val = currentSlideIndex*li_wid+0;
                                    $(".about-active-indicator").animate({
                                        left: left_val
                                    });
                                    // left
                                });
                            })


                            let sliderItems = 0;

                            $('.about-slider-content li').each(function(index){
                                $(this).attr('data-index', index+1);
                                sliderItems++;
                            });

                            $('.slider__all-items-count').text(sliderItems);

                            setInterval(function(){

                                document.querySelector('.slider__active-slide-index').textContent = document.querySelector('.slick-active').getAttribute('data-index');

                            }, 100);

                        </script>
                    </div>
                    <div class="slider-text-right">
                        <div class="slider-block_info">
                            <span class="info-arrow">
                                <img src="{{ asset('assets/img/icons/arrow.png') }}"></i>
                            </span>
                            <div class="info-instagram">
                                <i><img src="{{ asset('assets/img/icons/instagram.png') }}"></i>
                            </div>
                            <div class="info-text_button">
                                <span>Акции и Новинки</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-content_block">
        <div class="block-container">
            <div class="content-container">
                    <div class="top_block">
                        <span>Выбрать услугу</span>
                        <i><img src="{{ asset('assets/img/icons/file.png') }}"></i>
                    </div>
                    <div class="bottom_block"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p></div>
            </div>
            <div class="content-container">
                    <div class="top_block">
                        <span>Найти доктора</span>
                        <i><img src="{{ asset('assets/img/icons/doctor.png') }}"></i>
                    </div>
                    <div class="bottom_block"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p></div>
            </div>
            <div class="content-container">
                    <div class="top_block">
                        <span>Найти решение</span>
                        <i><img src="{{ asset('assets/img/icons/target.png') }}"></i>
                    </div>
                    <div class="bottom_block"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p></div>
            </div>
            <div class="content-container">
                    <div class="top_block">
                        <span>Записаться на прием</span>
                        <i><img src="{{ asset('assets/img/icons/telephone.png') }}"></i>
                    </div>
                    <div class="bottom_block"><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p></div>
            </div>
        </div>
    </div>
</header>

<div class="home-block_1">
    <div class="block-name">
        <p>О КЛИНИКЕ</p>
    </div>
    <div class="block-content_1">
        <div class="content-block-1_1">
            <div class="content-container_1">
            <img width="550px" src="{{ asset('assets/img/back/фон блок 2г 1.png') }}">
            <div class="bottom-text_1"><span><i><a href="#">Юлия Билоус</a> — главный врач-косметолог и основатель клиники Face lab.</i></span></div>
            </div>
        </div>
        <div class="content-block-2_1">
            <div class="content-container-2_1">
                <div class="content-block-text-2_1">
                    <span>
                        <strong>Клиника эстетической медицины Face lab</strong> — лучшая косметологическая клиника в Киеве,в которой представлены новейшие лазерные и аппаратные методики, работает лучшая команда врачей профессионалови применяются самые эффективныеи современные международные протоколы лечения.<br><br>
                                Косметологическая клиника Face lab предоставляет широкий спектр услуг классической , инъекционной , лазерной и аппаратной косметологии. Since 2012 — мы радуем наших пациентов хорошими и качественными результатами.<br><br>
                                В основе нашей работы лежит принцип ответственности и результативности для каждого пациента.
                    </span>
                </div>
                <a href="#"><div class="content-block-2-button_1"><span>Записаться на прием</span></div></a>
            </div>
        </div>
    </div>
</div>

<div class="home-block_2">
    <div class="block-name">
        <p>Услуги</p>
    </div>
    <div class="block-name_bottom-text">
        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,<br>
              totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</span>
    </div>
    <div class="block-services">
        <div class="services-container">
            <div class="services-content">
                <div class="services-content_img"><img src="{{ asset('assets/img/icons/skin-care 1.png') }}"></div>
                <span>Классическая косметология</span>
            </div>
            <div class="services-content">
                <div class="services-content_img"><img src="{{ asset('assets/img/icons/lifting 1.png') }}"></div>
                <span>Аппаратная косметология лица и тела</span>
            </div>
            <div class="services-content">
                <div class="services-content_img"><img src="{{ asset('assets/img/icons/injection 1.png') }}"></div>
                <span>Инъекционная косметология</span>
            </div>
            <div class="services-content">
                <div class="services-content_img"><img src="{{ asset('assets/img/icons/legs 1.png') }}"></div>
                <span>Лазерное лечение и эпиляция</span>
            </div>
            <div class="services-content">
                <div class="services-content_img"><img src="{{ asset('assets/img/icons/stylist 1.png') }}"></div>
                <span>Обучение врачей и специалистов</span>
            </div>
            <div class="services-content">
                <div class="services-content_img"><img src="{{ asset('assets/img/icons/menu 1.png') }}"></div>
                <span>Все наши услуги</span>
            </div>
        </div>
    </div>
</div>

<div class="home-block_3">
    <div class="block-name">
        <p>Наше оборудование</p>
    </div>
    <div class="block-name_bottom-text">
        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,<br>
              totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</span>
    </div>

    <div class="block-equipment">
        <div class="equipment-container">
            <div class="equipment-content">
                <div class="equipment-content_img"><img src="{{ asset('assets/img/back/1.png') }}"></div>
                <span>Nordlys</span>
            </div>
            <div class="equipment-content">
                <div class="equipment-content_img"><img src="{{ asset('assets/img/back/2.png') }}"></div>
                <span>Gentle Laser pro U</span>
            </div>
            <div class="equipment-content">
                <div class="equipment-content_img"><img src="{{ asset('assets/img/back/3.png') }}"></div>
                <span>Сoolsculpting</span>
            </div>
            <div class="equipment-content">
                <div class="equipment-content_img"><img src="{{ asset('assets/img/back/4.png') }}"></div>
                <span>Co2re</span>
            </div>
            <div class="equipment-content">
                <div class="equipment-content_img"><img src="{{ asset('assets/img/back/5.png') }}"></div>
                <span>silkpeel</span>
            </div>
        </div>
        <a href="#" class="equipment-button"><div><span>Узнать больше</span></div></a>
    </div>
</div>










<div class="home-block_4">
    <div class="block-name">
        <p>Наша команда</p>
    </div>
    <div class="block-name_bottom-text">
        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</span>
    </div>

    <div class="block-team">
        <div class="background-text"><p>FACE LAB</p></div>
        <div class="team-container">
            <div class="team-content">
                <div class="team-content_img"><img src="{{ asset('assets/img/back/Rectangle 35.png') }}"></div>
                <div class="team-content_info">
                    <p><a href="#">Билоус Юлия</a></p>
                    <br>
                    <p>Врач дерматолог, косметолог</p>
                </div>
            </div>
            <div class="team-content">
                <div class="team-content_img"><img src="{{ asset('assets/img/back/Rectangle 36.png') }}"></div>
                <div class="team-content_info">
                    <p><a href="#">Куренкова Дарья</a></p>
                    <br>
                    <p>Врач дерматовенеролог, косметолог</p>
                </div>
            </div>
            <div class="team-content">
                <div class="team-content_img"><img src="{{ asset('assets/img/back/Rectangle 37.png') }}"></div>
                <div class="team-content_info">
                    <p><a href="#">Лыс Екатерина</a></p>
                    <br>
                    <p>Врач дерматовенеролог, косметолог</p>
                </div>
            </div>
            <div class="team-content">
                <div class="team-content_img"><img src="{{ asset('assets/img/back/Rectangle 38.png') }}"></div>
                <div class="team-content_info">
                    <p><a href="#">Бондаренко Ольга</a></p>
                    <br>
                    <p>Врач косметолог</p>
                </div>
            </div>

            <a href="#" class="team-button"><div><span>Все специалисты</span></div></a>
        </div>
    </div>
</div>





<div class="home-block_5">
    <div class="block-name">
        <p>Почему именно мы</p>
    </div>
    <div class="block-name_bottom-text">
        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</span>
    </div>
    <div class="block-about">
        <div class="container-about">
                <div class="container-about_img">
                    <img width="730px" height="528" src="{{ asset('assets/img/back/Rectangle 40.png ') }}">
                </div>
                <div class="about_right-block">
                    <div class="about_right-mini_block">
                        <div class="about_text-block">
                            <p>4</p>
                            <span>Клиники в Украине</span>
                        </div>
                    </div>
                    <div class="mini_block-pink">
                        <div class="about_text-block">
                            <p>10 000</p>
                            <span>Довольных пациентов в год</span>
                        </div>
                    </div>
                    <div class="mini_block-pink">
                        <div class="about_text-block">
                            <p>30</p>
                            <span>Видов различных процедур</span>
                        </div>
                    </div>
                    <div class="about_right-mini_block">
                        <div class="about_text-block">
                            <p>10</p>
                            <span>Лет Вместе</span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>


