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
    <title>Trackr</title>
</head>
<body>
    <?php 
        $title = "";
        include 'menu.php'; 
    ?>
    <div class="container">
        <h1 class="title">Trackr</h1></br>
        <div style="display:flex; flex-direction: row; flex-wrap: wrap">
            <div style="display:flex; flex-direction: column; flex:2;">
                <div style="display:flex; flex-direction: row; flex-wrap: wrap;">
                    <h2>Introducing Trackr</h3></br>
                    <a href="https://github.com/elodiesza/TrackrTrial/tree/master">
                        <img src="img/banner/github.png" style="width: 30px; height:30px; margin-left: 10px">
                    </a>
                    <a href="https://www.figma.com/file/uSvxxclI2wM8NM5ZHoKiwb/Trackr?type=design&node-id=0%3A1&mode=design&t=iG8x3Ys6uBekEc46-1">
                        <img src="img/icons/figma.png" style="width: 20px; height:30px; margin-left: 10px">
                    </a>
                    <a href="https://cloud.protopie.io/p/429358530ec28fbec86db17b">
                        <img src="img/icons/protopie.png" style="width: 30px; height:30px; margin-left: 10px">
                    </a>
                    <img src="img/icons/js.png" style="width: 50px; height:30px">
                    <img src="img/icons/react.png" style="width: 40px; height:30px">
                </div>
                <div style="display:flex; flex-direction:row;width:100%">
                    <img src="img/photos/Trackr-icon.png" style="max-width:100px; max-height:100px; border-radius:20px: @media screen and (min-width: 600px) {min-width: 800px}">
                    <div style=" padding-left: 20px; display:flex; flex-wrap : wrap">
                        </br>
                        <h3>Your Path to Personalized Productivity and Well-Being</h3>
                        <p>
                            In a world defined by data and constant demands, the need for a tool that enables individuals 
                            to harness their uniqueness and enhance their lives has never been more critical. Enter Trackr, 
                            a groundbreaking life tracker app designed to empower you to seize control of your time, habits, 
                            and overall well-being, paving the way for a more productive, fulfilling life.
                        </p></br>
                    </div>
                </div>
                </br>
                <h2>How does it work ?</h2></br>
                <h3>What you have to do : </h3>
                <p>
                    </br>1. Define the habits (bad or good) you want to track and record your data every day in 2 taps.
                    </br>2. Link your habits to your device's existing records (e.g. steps, sleep, etc.) and forget about it.
                    </br></br>That's it. Trackr will do the rest.</br>
                    </br></br><h3>What Trackr does : </h3>
                    </br>1. Provide you with personalized dashboards to overview your progress.
                    </br>2. Analyze your data in the background and find correlations between your habits.
                    </br>3. Provide you with insights and recommendations without any additional input or request.
                </p></br></br>
            </div>
            <div style="display:flex; flex:1; justify-content:center; align-items: center">
                <img src="img/photos/trackerapp.png" style="max-height:450px; margin: 20px; border-radius: 20px">
                <img src="img/photos/tracker.gif" style="max-height:450px; margin: 20px; border-radius: 20px; position: absolute; transform: scale(0.96)">
            </div>
        </div>
        </br>
        <div style="display:flex; flex:1; justify-content:center">
            <iframe max-width="800px" height="auto" src="https://youtube.com/embed/meF-XBE2qZE" frameborder="0" allowfullscreen></iframe>
        </div>
        </br></br></br>
        <h2>Sample use cases</h3>
        <p>
            </br>1. Most of foreigners moving to South Korea experience noticable hair loss. While doctors blame stress, victims of this phenomenon
            are divided between the country's water quality and air pollution. Trackr could finally find a consensus, or what mostly impacts each person, 
            individually, to prevent further problems.
            </br></br>2. Nelson wants to quit smoking, but his motivation is very irregular. Tracker will not only offer him intrinsic motivation by showing 
            his progress, but also uncover other habits that could influence (or not) his will to return to bad habits.
            </br></br>3. Beata has been suffering from serious headaches during her periods for over 20 years. No doctor was able to find out the cause of her agony.
            Trackr will alow her to track all possible habits that could influence her headaches, and follow-up different habits to check the validity of 
            the correlation and maybe finally overcome this illness she suffered from for decades. Beata is my mom.
        </p></br>
        </br><h2>The story behind it</h3></br>
        <p>
            I have been recording my habits consistently since 2018, first in a notebook, following the bullet journal trend. 
            I realized the power of tracking and the impact it had on my life in 2020 when I moved to Korea with a light luggage,
            leaving it behind. Upon arrival during my quarantine, I decided that it is time to improve my tracking system, learning 
            Swift with the goal of creating a convenient mobile app. As a novice, I went through up and downs, but finally came up
            with a functional version in 2022, and deployed for personal use in 2023. Using it on a daily basis, I am self-testing 
            the functions and optimizing every aspect of it, including UX design that became a new interest of mine.
        </p></br>
        <div style="display:flex; flex:1; justify-content:center; flex-direction: row; padding: 20px; flex-wrap: wrap">
            <div class="gallery-div">
                <div class="thumbnail" onclick="openLightbox('img/photos/bullet1.png')">
                    <img src="img/photos/bullet1 Small.png">
                </div>
                <div class="thumbnail" onclick="openLightbox('img/photos/bullet2.png')">
                    <img src="img/photos/bullet2 Small.png">
                </div>
                <div class="thumbnail" onclick="openLightbox('img/photos/bullet3.png')">
                    <img src="img/photos/bullet3 Small.png">
                </div>
            </div>
        </div>
        </br>
        <h2>And now ?</h3></br>
        <p>
            I am primarily developping Tracker for my own use and mor my vincinity, so I take my time to develop features I consider useful first.
            I have been using paper bullet books for over 6 years and moved to excel 3 years ago to allow for effective calculation. 
            </br>
            <div style="display:flex; justify-content:center; flex-direction: row; padding: 20px; flex-wrap: wrap; width:100%">
                <img src="img/photos/exceltrackr.png" style="max-width:80%; height:auto; object-fit: contain">
            </div>

            </br>I still keep a paper 
            version to keep souvenirs. In fine, I am looking for a way to create an adaptative physical notebook in which I can physically store all data 
            collected on Trackr and customized on the app, to be able to add physical notes and souvenirs such as flight tickets, pictures, cards, etc... 
            Customization and Uniqueness is the essence of Trackr.
        </br>
        </br>
            I am using my beta version of the app on test flight on a daily basis to record my data and it is already more performant and ergonomic than my 
            latest programmed excel file. 
        </br></br> I am currently finishing to develop the algorithm to take into account all types of indicators and include time shifts. In parallel,
            I am working on improving the design, UX and UI.
        </p></br>
        <div style="display:flex; flex:1; justify-content:center; flex-direction: row; padding: 20px; flex-wrap: wrap;">
            <div class="gallery-div">
                <div class="thumbnail2" onclick="openLightbox('img/photos/ux0.png')">
                    <img src="img/photos/ux0 Small.png">
                </div>
                <div class="thumbnail2" onclick="openLightbox('img/photos/ux1.png')">
                    <img src="img/photos/ux1 Small.png">
                </div>
                <div class="thumbnail2" onclick="openLightbox('img/photos/ux2.png')">
                    <img src="img/photos/ux2 Small.png">
                </div>
                <div class="thumbnail2" onclick="openLightbox('img/photos/ux3.png')">
                    <img src="img/photos/ux3 Small.png">
                </div>
                <div class="thumbnail2" onclick="openLightbox('img/photos/ux4.png')">
                    <img src="img/photos/ux4 Small.png">
                </div>
                <div class="thumbnail2" onclick="openLightbox('img/photos/trackerapp2.png')">
                    <img src="img/photos/trackerapp2.png">
                </div>
            </div>
        </div>
    </div>
    <?php include 'scroll-up.php'; ?>
    <?php include 'faded.php'; ?>
    <?php include 'footer.php'; ?>
        <div id="lightbox" class="lightbox-container" onclick="closeLightbox()">
        <div class="lightbox-content">
            <img id="lightboxImage" class="lightbox-img" src="" alt="Lightbox Image">
            <div id="description" class="lightbox-description"></div>
        </div>
    </div>
    <script>
    function openLightbox(imageSrc, description) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const descriptionElement = document.getElementById('description');

        lightboxImage.src = imageSrc;
        descriptionElement.innerText = description;
        lightbox.style.display = 'flex';
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.style.display = 'none';
    }
    </script>
</body>
</html>