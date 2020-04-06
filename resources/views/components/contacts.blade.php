<!-- Contact Address -->
<section id="contacts">
    <div class="container">
        <div class="col-lg-12 text-center section-title">
            <h2>Свяжитесь с нами</h2>
            <hr>
            <p class="lead">Свяжитесь с нами любым удобным для Вас способом, представленным ниже.<br>Или заполните специальную форму для обратной связи.</p>
        </div>
        <div class="col-md-6 col-contact-form ">
            <h4><i class="fa fa-map-marker"></i> <small>Контактная информация</small></h4>
            <p class="lead">
                <strong>А.</strong> Московская область, г. Лобня, ул. Ленина, д. 1<br>
                <strong>Т.</strong> <a href="tel:+74950055694">+7 (495) 005-56-94</a><br>
                <strong>E.</strong> <a href="mailto:mail@inspiro.site">mail@inspiro.site</a>
            </p>
            {{--<a href="#">Find us on map</a>--}}
            <hr>
            <div class="profile-social-wrapper text-left">
                <a href="https://twitter.com/inspiro_web" class="link" target="_blank">
                    <div class="cube twitter">
                        <div class="front">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="back">
                            <i class="fa fa-twitter"></i>
                        </div>
                    </div>
                </a>
                <a href="https://vk.com/inspiro_web" class="link" target="_blank">
                    <div class="cube vk">
                        <div class="front">
                            <i class="fa fa-vk"></i>
                        </div>
                        <div class="back">
                            <i class="fa fa-vk"></i>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/inspiro_web/" class="link" target="_blank">
                    <div class="cube instagram">
                        <div class="front">
                            <i class="fa fa-instagram"></i>
                        </div>
                        <div class="back">
                            <i class="fa fa-instagram"></i>
                        </div>
                    </div>
                </a>
            </div>
            <hr>
        </div>
        <div class="col-md-6 col-contact-form text-center" id="contact">
            <div id="message"></div>
            <form method="POST" action="{{ route('front.sendFeedback') }}" name="contactform" id="contactform">
                @csrf
                <fieldset>
                    <div class="col-md-12">
                        <input name="name" type="text" id="name" size="30" value="" required placeholder="Имя"/>
                    </div>
                    <div class="col-md-6">
                        <input name="email" type="email" id="email" size="30" value="" required placeholder="Электронная почта"/>
                    </div>
                    <div class="col-md-6">
                        <input name="phone" type="text" id="phone" size="30" value="" placeholder="Номер телефона"/>
                    </div>
                    <div class="col-md-12">
                        <input name="subject" type="text" id="subject" size="30" value="" placeholder="Тема"/>
                    </div>
                    <div class="col-md-12">
                        <textarea name="message" cols="40" rows="5" id="messagetext" required placeholder="Текст сообщения"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="submit" id="submit" value="Отправить" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    {{--<div class="section-scroll">
        <a class="next-section" href="#section-separator-video"><span class="section-arrow"></span></a>
    </div>--}}
</section>
<!-- End Contact Address -->
