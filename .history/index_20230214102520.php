<?php
$title= "Home";
include '_header.php';
?>
            <section class="gallerySlider">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 28.12rem )" srcset="/images/galleryPhoto1.jpg">
                                <source media="(max-width: 28.12rem)" srcset="/images/galleryPhoto1_small.jpg">
                                <img src="/images/galleryPhoto1.jpg" alt="Cruise Galler Photos">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 28.12rem )" srcset="/images/galleryPhoto2.jpg">
                                <source media="(max-width: 28.12rem)" srcset="/images/galleryPhoto2_small.jpg">
                                <img src="/images/galleryPhoto2.jpg" alt="Cruise Galler Photos">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 28.12rem )" srcset="/images/galleryPhoto3.jpg">
                                <source media="(max-width: 28.12rem)" srcset="/images/galleryPhoto3_small.jpg">
                                <img src="/images/galleryPhoto3.jpg" alt="Cruise Galler Photos">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 28.12rem )" srcset="/images/galleryPhoto4.jpg">
                                <source media="(max-width: 28.12rem)" srcset="/images/galleryPhoto4_small.jpg">
                                <img src="/images/galleryPhoto4.jpg" alt="Cruise Galler Photos">
                            </picture>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

            </section>
            <section class="blogArticles">
                <h3>Recent Blog Articles</h3>
                <div class="articles">
                    <a href="">
                        <figure>
                            <img src="/images/familyFun.jpg" alt="">
                            <figcaption>Familiy Fun</figcaption>
                        </figure>
                    </a>

                    <a href="">
                        <figure>
                            <img src="/images/dining.jpg" alt="">
                            <figcaption>Dining</figcaption>
                        </figure>
                    </a>

                    <a href="">
                        <figure>
                            <img src="/images/snorkeling.jpg" alt="">
                            <figcaption>Snorkeling</figcaption>
                        </figure>
                    </a>

                    <a href="">
                        <figure>
                            <img src="/images/beach.jpg" alt="">
                            <figcaption>Beach Relaxation</figcaption>
                        </figure>
                    </a>

                </div>
            </section>

    <?php
    include '_footer.php';
    ?>
   