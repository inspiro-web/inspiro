<!-- Footer -->
<footer id="footer">
    <div class="container foorow-1 foorow">
        <div class="row">
            <div class="col-md-8 col-sm-6">
                <h4><small class="white">О проекте</small></h4>
                <p class="fabout">
                    Мы - молодая веб-студия, только-только набирающая обороты, но имеющая большой потенциал, благодаря соотношению цена/качество. Мы делаем качественные продукты, размещаем их у надежных хостеров, либо на Ваших серверах, что гарантирует безопасность и целостность информации. Работаем индивидуально с каждым клиентом.
                </p>
            </div>
            {{--<div class="col-md-3 col-sm-6">
                <h4><small>Последние работы</small></h4>
                <ul class="recentworks clearfix">
                    <li>
                        <a class="fancybox" data-rel="gallery1" href="{{ asset('front/img/footer/1-full.jpg') }}" title="Mellentesque habitant morbi tristique senectus et netus et malesuada"><img alt="" src="{{ asset('front/img/footer/1.jpg') }}"/></a>
                    </li>
                    <li>
                        <a class="fancybox" data-rel="gallery1" href="{{ asset('front/img/footer/2-full.jpg') }}" title="Mellentesque habitant morbi tristique senectus et netus et malesuada"><img alt="" src="{{ asset('front/img/footer/2.jpg') }}"/></a>
                    </li>
                    <li>
                        <a class="fancybox" data-rel="gallery1" href="{{ asset('front/img/footer/3-full.jpg') }}" title="Mellentesque habitant morbi tristique senectus et netus et malesuada"><img alt="" src="{{ asset('front/img/footer/3.jpg') }}"/></a>
                    </li>
                    <li>
                        <a class="fancybox" data-rel="gallery1" href="{{ asset('front/img/footer/4-full.jpg') }}" title="Mellentesque habitant morbi tristique senectus et netus et malesuada"><img alt="" src="{{ asset('front/img/footer/4.jpg') }}"/></a>
                    </li>
                    <li>
                        <a class="fancybox" data-rel="gallery1" href="{{ asset('front/img/footer/5-full.jpg') }}" title="Mellentesque habitant morbi tristique senectus et netus et malesuada"><img alt="" src="{{ asset('front/img/footer/5.jpg') }}"/></a>
                    </li>
                </ul>
            </div>--}}
            <div class="col-md-4 col-sm-6">
                <h4><small>Дополнительно</small></h4>
                <ul class="links">
                    <li><a href="{{ route('front.cabinet') }}">Личный кабинет</a></li>
                    <li><a href="#">Партнерам</a></li>
                    <li><a href="#">Поддержка</a></li>
                    <li><a href="#">Конфиденциальность</a></li>
                    <li><a href="#">Правила сервиса</a></li>
                </ul>
            </div>
            {{--<div class="col-md-3 col-sm-6">
                <h4><small>Недавние записи</small></h4>
                <ul>
                    <li><p><a href="#">Mellentesque habitant morbi tristique senectus et netus et malesuada</a><br><span>12 December 2014</span></p></li>
                    <li><p><a href="#">Aenean habitant morbi tristique sed justo tincidunt, vulputate nisi</a><br><span>12 December 2014</span></p></li>
                </ul>
            </div>--}}
        </div>
    </div>
    <hr>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 footer-menu">
                <span class="pull-left">Copyright © {{ now()->year }} <a class="copyrights" href="#">{{ config('app.name') }}</a>. All Rights Reserved.</span>
                <span class="pull-right">
                    <a href="#home-content">Главная</a>
                    <a href="#about">О нас</a>
                    <a href="#sp_block">Особенности</a>
                    <a href="#services">Услуги</a>
                    <a href="#process">Техпроцесс</a>
                    {{--<a href="#our-work">Портфолио</a>--}}
                    {{--<a href="#blog">Блог</a>--}}
                    <a href="#contacts">Контакты</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                    <a href="{{ route('login') }}">Вход</a>
                </span>
            </div>
        </div>
    </div>
    <div id="scroll-container">
        <a href="#home-content" class="scroll-top"><span id="scroll-arrow"></span></a>
    </div>
</footer>
<!-- End Footer -->
