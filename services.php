<?php
include_once('include/_head.php');
include_once('include/_loading.php');
?>
<header id="menu" class="menu fixed-top menu-black">
    <div class="container">
        <div class="menu-inner">
            <div class="menu__logo">
                <a href="/"><img class="menu__logo-w" src="img/logo-white.svg" alt=""></a>
                <a href="/"><img class="menu__logo-b" src="img/logo.svg" alt=""></a>
            </div>
            <div class="menu__nav">
                <ul class="d-flex align-items-end align-items-md-center">
                    <li data-aos="fade-up"><a class="text--gray" href="works">Works</a></li>
                    <li data-aos="fade-up" class="active" data-aos-delay="100"><a href="services">Services</a></li>
                    <li data-aos="fade-up" data-aos-delay="200"><a class="text--gray" href="contact">Contact</a></li>
                </ul>
                <div class="menu-social d-block d-md-none">
                    <div class="d-flex justify-content-between">
                        <a href="www.be.net/PitStudio">
                            <i class="pit-icon-behance"></i>
                        </a>
                        <a href="www.dribbble.com/PitStudio">
                            <i class="pit-icon-dribbble"></i>
                        </a>
                        <a href="https://www.facebook.com/pitstudio.co">
                            <i class="pit-icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/pitstudio_co">
                            <i class="pit-icon-twitter"></i>
                        </a>
                        <a href="www.instagram.com/pit.studio">
                            <i class="pit-icon-instagram"></i>
                        </a>
                    </div>
                    <p class="my-3 text--center text--black-support">© 2020, Pit Studio</p>
                </div>
                <i class="menu-close pit-icon-close d-block d-md-none text--white fs--30"></i>
            </div>
            <div class="menu__btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<section class="wapper">
    <div class="container pb-5">
        <h1 data-aos="fade-up" data-aos-delay="500">Our services</h1>
        <p data-aos="fade-up" data-aos-delay="600" class="text--gray mt-3">Shaping your visions, delivering revolutionary digital products and <br> creating the
            long-WOW experiences!</p>
    </div>
    <div class="container service-space"></div>
    <div class="container" data-aos="fade-up">
        <div class="row pb-5">
            <div data-aos="fade-up" data-aos-delay="700" class="col-6 col-sm-3">
                <a href="#web" class="service-icon">
                    <img src="img/icon/ic_web.svg" alt="">
                    <lottie-player class="service-icon-animation"
                                   src="img/animation/web-icon.json" background="transparent" speed="1"
                                   style="width: 100%;" loop autoplay>
                    </lottie-player>
                    <p>Web</p>
                </a>
            </div>
            <div data-aos="fade-up" data-aos-delay="800" class="col-6 col-sm-3">
                <a href="#app" class="service-icon">
                    <img src="img/icon/ic_app.svg" alt="">
                    <lottie-player class="service-icon-animation"
                                   src="img/animation/app-icon.json" background="transparent" speed="1"
                                   style="width: 100%;" loop autoplay>
                    </lottie-player>
                    <p>App</p>
                </a>
            </div>
            <div data-aos="fade-up" data-aos-delay="900" class="col-6 col-sm-3">
                <a href="#illustration" class="service-icon">
                    <img src="img/icon/ic__illus.svg" alt="">
                    <lottie-player class="service-icon-animation"
                                   src="img/animation/inlus-icon.json" background="transparent" speed="1"
                                   style="width: 100%;" loop autoplay>
                    </lottie-player>
                    <p>Illustration</p>
                </a>
            </div>
            <div data-aos="fade-up" data-aos-delay="1000" class="col-6 col-sm-3">
                <a href="#development" class="service-icon">
                    <img src="img/icon/ic_dev.svg" alt="">
                    <lottie-player class="service-icon-animation"
                                   src="img/animation/desktop.json" background="transparent" speed="1"
                                   style="width: 100%;" loop autoplay>
                    </lottie-player>
                    <p>Development</p>
                </a>
            </div>
        </div>
    </div>

    <div id="web" class="container service-space"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6 p-0 pr-sm-5" data-aos="fade-up" data-aos-delay="100">
                <lottie-player
                        src="img/animation/service-web.json" background="transparent" speed="1"
                        style="width: 100%;" loop autoplay>
                </lottie-player>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="px-0 px-sm-3 px-md-5">
                    <h2>Web</h2>
                    <p class="my-3 text--semi-bold">
                        Execute the entire website design & development <br>
                        process, ensure a coherent user experience across <br>
                        different devices.</p>
                    <p class="text--gray text--medium">
                        • Analyze product requirement <br>
                        • Wireframing <br>
                        • UX/UI design <br>
                        • High prototype <br>
                        • Assets delivery
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="app" class="container service-space"></div>
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-sm-row">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="px-0 px-sm-3 px-md-5">
                    <h2>App</h2>
                    <p class="my-3 text--semi-bold">
                        Build well-designed and optimized custom mobile <br>
                        applications with a delightful UX/UI for both <br> iOS and Android.</p>
                    <p class="text--gray text--medium">
                        • Analyze product requirement <br>
                        • User flow and define function <br>
                        • Frontend (for both iOS and Android) <br>
                        • Interaction prototype <br>
                        • Assets delivery
                    </p>
                </div>
            </div>
            <div class="col-sm-6 p-0 pl-sm-5" data-aos="fade-up" data-aos-delay="100">
                <lottie-player
                        src="img/animation/service-app.json" background="transparent" speed="1"
                        style="width: 100%;" loop autoplay>
                </lottie-player>
            </div>
        </div>
    </div>
    <div id="illustration" class="container service-space"></div>
    <div class="container">
        <div class="align-items-center row" >
            <div class="col-sm-6 p-0 pr-sm-5" data-aos="fade-up" data-aos-delay="100">
                <lottie-player
                        src="img/animation/service-illus.json" background="transparent" speed="1"
                        style="width: 100%;" loop autoplay>
                </lottie-player>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="px-0 px-sm-3 px-md-5">
                    <h2>Illustration</h2>
                    <p class="my-3 text--semi-bold">Establish a unique and unmistakable visual <br>
                        language of your brand and product through <br>
                        custom-built illustrations.</p>
                    <p class="text--gray text--medium">
                        • Tell us your story <br>
                        • Ideation sketching <br>
                        • Illustration <br>
                        • READY for delivery!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="development" class="container service-space"></div>
    <div class="container">
        <div class="align-items-center row flex-column-reverse flex-sm-row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6">
                <div class="px-0 px-sm-3 px-md-5">
                    <h2>Development</h2>
                    <p class="my-3 text--semi-bold">
                        Create the backend & frontend of your product <br>
                        using the most innovative tech stack, exclusively <br>
                        tailored for your business goals.</p>
                    <p class="text--gray text--medium">
                        • UI development <br>
                        • API design & development <br>
                        • Database architecture <br>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 p-0 pl-sm-5" data-aos="fade-up" data-aos-delay="100">
                <lottie-player
                        src="img/animation/service-destop.json" background="transparent" speed="1"
                        style="width: 100%;" loop autoplay>
                </lottie-player>
            </div>
        </div>
    </div>
</section>
<footer class="mt-5">
    <div class="container">
        <div class="social text--semi-bold" data-aos="fade-up">
            <h4>Find out more on</h4>
            <?php include('include/_social.php') ?>
        </div>

        <div data-aos="fade-up" class="contact-action mt-5 py-5">
            <h3 class="text--semi-bold">
                Start your project with Pit
            </h3>
            <?php include('include/_contact-action.php') ?>
        </div>

        <p class="text--center text--gray pt-5 pb-4 mt-5"> © 2020, Pit Studio </p>
    </div>
</footer>
</body>
</html>

