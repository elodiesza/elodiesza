<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link href="plugins/owl-carousel5-main/owl-carousel/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/owl-carousel5-main/owl-carousel/css/fontawesome.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/owl-carousel5-main/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="img/icons/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
    <title>Elodie Szablewski</title>
</head>
<body>
    <?php 
        $title = "";
        include 'menu.php'; 
    ?>
    <div class="intro">
        <div class="container">
            <p class="description" style="text-indent: 20px">
            I'm a relentless <span style="color:#949B40;font-weight:bold">creator</span>, driven to craft solutions and ideas with <span style="color:#949B40;font-weight:bold">resourcefulness</span> and <span style="color:#949B40;font-weight:bold">determination.</span> Living life to the fullest is my mantra, channeling 100% into soaking up knowledge, experiencing life and mastering skills embracing my interests. Excelling and pushing limits? That's my jam, it exhilarates me. My portfolio is here to prove it. <span style="color:#949B40;font-weight:bold">Live Battery</span>? Yes. But my journey is guided by a laid-back and strong <span style="color:#949B40;font-weight:bold">resilient</span> mindset, cultivated through self-development reads, yoga, and meditation. Have fun looking around ! :) ⭐
        </p>
        </div>
    </div>
    <div class="container">
        <h2>Web/ Mobile applications</h2>
        <p>I’m a self-taught developer, passionate about creating tools to simplify my life.</p>
        <div class="cards-container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel slider_carousel">
                        <a href="trackr.php">    
                            <div class="card_box">
                                <img class="img-fluid w-100" src="img/photos/trackr-thumbnail.png" alt="">
                                <div class="card_text">
                                    <h4>Trackr</h4>
                                    <p>Habits correlation tool</p>
                                </div>
                            </div>
                        </a>
                        <a href="listr.php">
                            <div class="card_box">
                                <img class="img-fluid w-100" src="img/photos/listr-thumbnail.png" alt="">
                                <div class="card_text">
                                    <h4>Listr</h4>
                                    <p>Productive tasks tracker</p>
                                </div>
                            </div>
                        </a>
                        <a href="station-fr.php">
                            <div class="card_box">
                                <img class="img-fluid w-100" src="img/photos/stationfr-thumbnail.png" alt="">
                                <div class="card_text">
                                    <h4>Station FR</h4>
                                    <p>Playful french teaching app</p>
                                </div>
                            </div>
                        </a>
                        <a href="thf.php">
                            <div class="card_box">
                                <img class="img-fluid w-100" src="img/photos/THF-thumbnail.png" alt="">
                                <div class="card_text">
                                    <h4>Tetrahydrofurane</h4>
                                    <p>Artwork showcase gallery</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <h2>Artwork</h2>
    <p>I started offering my design/ drawing services at the age of 15.</p>
        <div class="cards-container">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel slider_carousel">
                        <a href="drawing.php">
                            <div class="card_box">
                                <img class="img-fluid w-100" src="/img/photos/shoes-thumbnail.png">
                                <div class="card_text">
                                    <h4>Drawings and paintings</h4>
                                    <p>Just to please the eye</p>
                                </div>
                            </div>
                        </a>
                        <a href="designs.php">
                            <div class="card_box">
                                <img class="img-fluid w-100" src="/img/photos/design-thumbnail.png" alt="">
                                <div class="card_text">
                                    <h4>Designs for businesses</h4>
                                    <p>Logos, covers, ...</p>
                                </div>
                            </div>
                        </a>
                        <a href="cartoons.php">
                            <div class="card_box">
                                <img class="img-fluid w-100" src="/img/photos/ginger-thumbnail.png" alt="">
                                <div class="card_text">
                                    <h4>Cartoons</h4>
                                </div>
                            </div>
                        </a>
                        <a href="marketing.php">
                            <div class="card_box">
                                <img class="img-fluid w-100" src="/img/photos/marketing-thumbnail.png" alt="">
                                <div class="card_text">
                                    <h4>Communication</h4>
                                    <p>Marketing materials</p>
                                </div>
                            </div>
                        </a>
                        <a href="diy.php">
                            <div class="card_box">
                                <img class="img-fluid w-100" src="/img/photos/map-thumbnail.png" alt="">
                                <div class="card_text">
                                    <h4>Engineering & DIY</h4>
                                    <p>Make it functional !</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p style="text-align: center">This is my resume <span style="color:#949B40">v1.0</span></p>
    </div>
    <script src="plugins/owl-carousel5-main/owl-carousel/js/jquery-3.4.1.min.js"></script>
    <script src="plugins/owl-carousel5-main/owl-carousel/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel5-main/owl-carousel/js/owl.carousel.min.js"></script>
    <script>
        
        function slider_carouselInit() {
            $('.owl-carousel.slider_carousel').owlCarousel({
                dots: false,
                loop: true,
                margin: 30,
                stagePadding: 2,
                autoplay: false,
                nav: true,
                navText: ["<i class='far fa-arrow-alt-circle-left'></i>","<i class='far fa-arrow-alt-circle-right'></i>"],
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 4,
                    }
                },
                center:true,
            });
        }
        slider_carouselInit();
    </script>
    <?php include 'scroll-up.php'; ?>
</body>
</html>