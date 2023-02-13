<?php
$title= "Home"
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
                                <source media="(min-width: 28.12rem )" srcset="images/galleryPhoto1.jpg">
                                <source media="(max-width: 28.12rem)" srcset="images/galleryPhoto1_small.jpg">
                                <img src="images/galleryPhoto1.jpg" alt="Cruise Galler Photos">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 28.12rem )" srcset="images/galleryPhoto2.jpg">
                                <source media="(max-width: 28.12rem)" srcset="images/galleryPhoto2_small.jpg">
                                <img src="images/galleryPhoto2.jpg" alt="Cruise Galler Photos">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 28.12rem )" srcset="images/galleryPhoto3.jpg">
                                <source media="(max-width: 28.12rem)" srcset="images/galleryPhoto3_small.jpg">
                                <img src="images/galleryPhoto3.jpg" alt="Cruise Galler Photos">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 28.12rem )" srcset="images/galleryPhoto4.jpg">
                                <source media="(max-width: 28.12rem)" srcset="images/galleryPhoto4_small.jpg">
                                <img src="images/galleryPhoto4.jpg" alt="Cruise Galler Photos">
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
                            <img src="images/familyFun.jpg" alt="">
                            <figcaption>Familiy Fun</figcaption>
                        </figure>
                    </a>

                    <a href="">
                        <figure>
                            <img src="images/dining.jpg" alt="">
                            <figcaption>Dining</figcaption>
                        </figure>
                    </a>

                    <a href="">
                        <figure>
                            <img src="images/snorkeling.jpg" alt="">
                            <figcaption>Snorkeling</figcaption>
                        </figure>
                    </a>

                    <a href="">
                        <figure>
                            <img src="images/beach.jpg" alt="">
                            <figcaption>Beach Relaxation</figcaption>
                        </figure>
                    </a>

                </div>
            </section>

    <?php
    $title= "Home"
include '_header.php';
?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/scripts.js"></script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "TravelAgency",
            "name": "Combat Cruise",
            "description": "Combat Cruises is a travel agency providing the best cruise deals on our online travel website",
            "openingHours": "Mo-Fr 09:00-16:00",
            "telephone": "+18018638888",
            "faxNumber": "+18018633245",
            "address":{
                "@type": "PostalAddress",
                "streetAddress": "23 South Main St. Suite 16",
                "addressLocality": "Lexington",
                "addressRegion": "VA"
            },
            "image": "http//fullpath.com/logo1x.png",
            "priceRange": "$500 to $4000"

        }
    </script>

</body>
</html>