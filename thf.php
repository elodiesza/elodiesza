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
    <title>Tetrahydrofurane</title>
</head>
<body>
    <?php 
        $title = "";
        include 'menu.php'; 
    ?>
    <div class="container">
        <h1 class="title">Tetrahydrofurane</h1></br>
        <h2>A showcase website</h2></br>
        <h3>My very first coding project !</h3>
        <p>
        Artistry has been a lifelong pursuit for me, with my earliest memories filled with the joy of sketching characters and weaving imaginative narratives. As I progressed through middle school, my focus shifted towards portraiture, a skill that garnered recognition and evolved into a burgeoning side profession. Beyond familial portraits, my artistic expertise extended to collaborating with diverse clientele, including writers seeking captivating book covers, entrepreneurs and associations in need of distinctive logos, and my school's organizations entrusting me with event posters and marketing materials. Notably, my creative touch found expression in a wide array of projects, spanning magazine covers, wedding invitations, and even bespoke tattoo designs. At least five individuals have chosen to permanently ink themselves with my customized designs.
        </br>
        </br>The culmination of these achievements prompted the establishment of my inaugural personal showcase website in 2011. Fueled by an innate attention to design intricacies, I coded the website from scratch using Notepad++, marking the genesis of my passion for coding. 
        </p></br>
        <div class="gallery-div">
            <div class="thumbnail" onclick="openLightbox('img/photos/thfhome.png')">
                <img src="img/photos/thfhome Small.png" alt="Thumbnail 1">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/photos/thfportfolio.png')">
                <img src="img/photos/thfportfolio Small.png" alt="Thumbnail 2">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/photos/thfmenu.png')">
                <img src="img/photos/thfmenu Small.png" alt="Thumbnail 3">
            </div>
        </div>
        <div style="display:flex; flex:1; height: 40px; justify-content:flex-end">
            <img src="img/icons/HTML.png" style="object-fit: contain">
            <img src="img/icons/CSS.png" style="object-fit: contain">
            <img src="img/icons/php.png" style="object-fit: contain">
        </div>
        </br>
    </div>
    <?php include 'scroll-up.php'; ?>
    <div class="footer">
        <p style="text-align: center">This is my resume <span style="color:#949B40">v1.0</span></p>
    </div>
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