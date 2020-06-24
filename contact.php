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
                    <li data-aos="fade-up" data-aos-delay="100"><a class="text--gray" href="services">Services</a>
                    </li>
                    <li data-aos="fade-up" class="active" data-aos-delay="200"><a href="contact">Contact</a></li>
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
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 data-aos="fade-up" data-aos-delay="500">Start your project with Pit</h2>
                <p data-aos="fade-up" data-aos-delay="600" class="text--gray mt-3 pr-0 pr-md-5">Most of the product
                    failures come from a poor user experience and there are no shortcuts to great
                    experience. There is only the discipline to investigate, the patience to analyze, the willingness to
                    test new solutions. <br>
                    We're here to design and deliver superior product experience for you!</p>
                <div data-aos="fade-up" data-aos-delay="700" class="contact-action mt-3 py-5">
                    <?php include('include/_contact-action.php') ?>
                </div>
                <div class="social mt-4">
                    <h4>Social network</h4>
                    <?php include('include/_social.php') ?>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="600" class="contact-box col-md-4 offset-md-1 mt-5 mt-sm-0 d-flex justify-content-end">
                <div class="contact-box-inner">
                    <div class="contact-box-black"></div>
                    <div class="contact-list">
                        <div class="contact-list-item">
                            <h4>Base in</h4>
                            <p>Hanoi, Vietnam</p>
                        </div>
                        <div class="contact-list-item">
                            <h4>Email</h4>
                            <p>hello@pitstudio.co</p>
                        </div>
                        <div class="contact-list-item">
                            <h4>Phone</h4>
                            <p>(+84) 34 4321 686</p>
                        </div>
                        <span class="bg-blue"></span>
                    </div>
                    <div class="contact-bottom">
                        <div class="text--center">
                            <div data-modal="#popup-join" class="btn btn--outline btn--outline-white">JOIN PIT STUDIO</div>
                        </div>
                        <img class=" lazy" data-src="img/im_Contact.svg" alt="">
                    </div>
                    <i class="bg-blue"></i>
                </div>
            </div>

        </div>
    </div>
</section>

<footer class="mt-5">
    <div class="container">
        <p class="text--center text--gray pt-5 mt-5 copyright"> © 2020, Pit Studio </p>
    </div>
</footer>
</body>
</html>

