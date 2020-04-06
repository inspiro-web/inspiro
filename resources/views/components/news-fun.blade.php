<!--newsfun -->
<section id="news">
    <div class="container">
        <div class="col-lg-12 text-center ">
            <h2>Latest News & Fun</h2>
            <hr>
            <p class="lead">Continuously creating daring digital solutions. View some of the our latest <br>work we have crafted with love. </p>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4 ">
                <article class="news-wrapper clearfix">
                    <img src="{{ asset('front/img/news/1.jpg') }}" alt="" class="bg_hover_image"/>
                    <a href="News-single.html">
                        <div class="date">30/10/2014</div>
                        <h4>Pellentesque turpis ligula urna placerat</h4>
                        <p>Aenean in magna aliquet maecenas ligula urna placerat in lectus pulvinar pellentesque turpis eleifend quam eget rutrum massa.Maecenas... </p>
                        <p class="news-link"><strong>Read more</strong></p>
                    </a>
                </article>
            </div>
            <div class="col-md-4 col-sm-4">
                <article class="news-wrapper clearfix">
                    <img src="{{ asset('front/img/news/2.jpg') }}" alt="" class="bg_hover_image"/>
                    <a href="News-single.html">
                        <div class="date">30/10/2014</div>
                        <h4>Maecenas ligula urna placerat pulvinar</h4>
                        <p>Maecenas ligula urna placerat in lectus pulvinar maecenas ligula urna placerat in lectus pulvinar pellentesque turpis pellentesque rutr turpis...</p>
                        <p class="news-link"><strong>Read more</strong></p>
                    </a>
                </article>
            </div>
            <div class="col-md-4 col-sm-4">
                <article class="news-wrapper clearfix">
                    <img src="{{ asset('front/img/news/3.jpg') }}" alt="" class="bg_hover_image"/>
                    <a href="News-single.html">
                        <div class="date">See more...</div>
                        <h4>In our BLOG</h4>
                        <div class="text-center">
                            <span class="icon icon-next"></span>
                        </div>
                    </a>
                </article>
            </div>
        </div>

        <div class="text-center">
            <a href="news-list.html" class="btn btn-default margintop">Read all news</a>
        </div>
    </div>

    <!-- Subscribe -->
    <div class="leave-email clearfix">
        <div class="cd-form-wrapper cd-container">
            <form class="cd-form">
                <label class="cd-label" for="cd-email">Newsletter</label>
                <input type="email" id="cd-email" class="cd-email" name="cd-email" placeholder="Enter your email address">
                <input type="submit" class="cd-submit" value="Submit">
                <div class="cd-loading"></div>
            </form>

            <div data-type="message" class="cd-response cd-response-error">Ops! Error message here</div>
            <div data-type="message" class="cd-response-success"><p>Great! Success message here</p></div>
            <div data-type="message" class="cd-response cd-response-notification">Hey! Please try again!</div>
        </div>
        <!-- End Subscribe -->
    </div>
    <!-- End Subscribe -->

</section>
<!-- End News & fun -->
