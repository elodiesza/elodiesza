<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PFLH8B74PD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-PFLH8B74PD');
    </script>
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
        $title = "portfolio";
        include 'menu.php'; 
    ?>
    <div class="intro">
            <div class="fade-in" style="display:flex;justify-content:center; flex-wrap:wrap; background: rgba(255,255,255,0.4);border-radius: 30px; box-shadow: 2px 2px 40px rgba(0,0,0,0.05)">
                <div class="zoom" style="display:flex;flex-direction: column; width:100px; flex-wrap:wrap; align-items:center; margin: 30px; margin-right: 70px; margin-left: 70px">
                    <img src="img/icons/reactnative.png" style="width: 100px; height: 100px">
                    <div style="display:flex;flex-direction: row;">
                        <h1 class="counter">2</h1>
                        <p style="text-align:center">mobile apps deployed</p>
                    </div>
                </div>
                <div class="zoom" style="display:flex;flex-direction: column; width:100px; flex-wrap:wrap; align-items:center; margin: 30px; padding: 5px; margin-right: 40px ">
                    <img src="img/icons/web.png" style="width: 90px; height: 90px;">
                    <div style="display:flex;flex-direction: row;">
                        <h1 class="counter">3</h1>
                        <p style="text-align:center">websites published</p>
                    </div>
                </div>
                <div class="zoom" style="display:flex;flex-direction: column; width:150px; flex-wrap:wrap; align-items:center; margin: 30px; padding: 5px;">
                    <img src="img/icons/script.png" style="width: 90px; height: 90px">
                    <div style="display:flex;flex-direction: row;">
                        <h1 class="counter">∞</h1>
                        <p style="text-align:center">mini productivity scripts/ programs</p>
                    </div>
                </div>
                <div class="zoom" style="display:flex;flex-direction: column; width:170px; flex-wrap:wrap; align-items:center; margin: 30px; padding: 5px; margin-right: 40px">
                    <img src="img/icons/designs.png" style="width: 90px; height: 90px">
                    <div style="display:flex;flex-direction: row;">
                        <h1 class="counter">>20</h1>
                        <p style="text-align:center">entrepreneur/ institution designs</p>
                    </div>
                </div>
            </div>
    </div>
    <div class="container">
        <div class="slide-in">
            <h2>Web/ Mobile applications</h2>
            <p>I’m a self-taught developer, passionate about creating tools to simplify my life 
            and bringing my ideas to the digital realm.</p>
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
                                        <div style="display: flex; flex-direction: row; justify-content: flex-end">
                                            <img src="img/icons/react.png" style="width: 20px; height: 14px; margin-top: 10px;">
                                            <img src="img/icons/js.png" style="width: 24px; height: 14px; margin-top: 10px;">
                                            <img src="img/icons/figma.png" style="width: 10px; height: 14px; margin-top: 10px;">
                                            <img src="img/icons/protopie.png" style="width: 14px; height: 14px; margin-top: 10px;margin-left:5px">
                                            <img src="img/icons/aws.png" style="width: 20px; height: 12px; margin-top: 10px;margin-left:5px">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="listr.php">
                                <div class="card_box">
                                    <img class="img-fluid w-100" src="img/photos/listr-thumbnail.png" alt="">
                                    <div class="card_text">
                                        <h4>Listr</h4>
                                        <p>Productive tasks tracker</p>
                                        <div style="display: flex; flex-direction: row; justify-content: flex-end">
                                            <img src="img/icons/react.png" style="width: 20px; height: 14px; margin-top: 10px;">
                                            <img src="img/icons/js.png" style="width: 24px; height: 14px; margin-top: 10px;">
                                            <img src="img/icons/aws.png" style="width: 20px; height: 12px; margin-top: 10px;margin-left:5px">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="station-fr.php">
                                <div class="card_box">
                                    <img class="img-fluid w-100" src="img/photos/stationfr-thumbnail.png" alt="">
                                    <div class="card_text">
                                        <h4>Station FR</h4>
                                        <p>Playful french teaching app</p>
                                        <div style="display: flex; flex-direction: row; justify-content: flex-end">
                                            <img src="img/icons/php.png" style="width: 20px; height: 12px; margin-top: 10px;">
                                            <img src="img/icons/html.png" style="width: 30px; height: 12px; margin-top: 10px; margin-left: 5px">
                                            <img src="img/icons/css.png" style="width: 30px; height: 12px; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="thf.php">
                                <div class="card_box">
                                    <img class="img-fluid w-100" src="img/photos/THF-thumbnail.png" alt="">
                                    <div class="card_text">
                                        <h4>Tetrahydrofurane</h4>
                                        <p>Artwork showcase gallery</p>
                                        <div style="display: flex; flex-direction: row; justify-content: flex-end">
                                            <img src="img/icons/php.png" style="width: 20px; height: 12px; margin-top: 10px;">
                                            <img src="img/icons/html.png" style="width: 30px; height: 12px; margin-top: 10px; margin-left: 5px">
                                            <img src="img/icons/css.png" style="width: 30px; height: 12px; margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-in">
        <h2>Artwork</h2>
        <p>I started offering my design/ drawing services at the age of 15.</p>
        <div class="slide-in">
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
    </div>
    <?php include 'faded.php'; ?>
    <?php include 'footer.php'; ?>
    <script src="plugins/owl-carousel5-main/owl-carousel/js/jquery-3.4.1.min.js"></script>
    <script src="plugins/owl-carousel5-main/owl-carousel/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel5-main/owl-carousel/js/owl.carousel.min.js"></script>
    <script>
        
        function slider_carouselInit() {
            $('.owl-carousel.slider_carousel').owlCarousel({
                dots: false,
                loop: true,
                margin: 20,
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var elements = document.querySelectorAll('.slide-in');

            function checkVisible(element) {
                var rect = element.getBoundingClientRect();
                return (rect.top - window.innerHeight) < 0;
            }

            function handleScroll() {
                elements.forEach(function (element) {
                    if (checkVisible(element) && !element.classList.contains('active')) {
                        element.classList.add('active');
                    }
                });
            }

            window.addEventListener('scroll', handleScroll);
            handleScroll(); 
        });

        document.addEventListener("DOMContentLoaded", function() {
            var fadeInElement = document.querySelector('.fade-in');
            fadeInElement.classList.add('appear');
        });
    </script>
    <?php include 'scroll-up.php'; ?>
</body>
</html>