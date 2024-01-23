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
    <title>Drawing</title>
</head>
<body>
    <?php 
        $title = "";
        include 'menu.php'; 
    ?>
    <div class="container">
        <h1 class="title">Designs</h1>
        <h2>Book covers</h2>
        <div class="gallery-div">
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/intrusion.png','Intrusion, Tome 1')">
                <img src="img/art/Designs/intrusion Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/lcdd1.png','Le club des damnes Tome 1')">
                <img src="img/art/Designs/lcdd1 Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/lcdd2.png','Le club des damnes, Tome 2')">
                <img src="img/art/Designs/lcdd2 Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/alumni2.png','ENIM Alumni book cover')">
                <img src="img/art/Designs/alumni2 Small.png">
            </div>
        </div>
        <h2>Logos</h2>
        <div class="gallery-div">
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/4L1627.png','4L Trophy')">
                <img src="img/art/Designs/4L1627 Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/as.png','Logo Association sportive ENIM')">
                <img src="img/art/Designs/as Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/COMFIT.png','Logo ComFit, women sports association')">
                <img src="img/art/Designs/COMFIT Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/dragon.png','ENIM tshirt logo')">
                <img src="img/art/Designs/dragon Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/logoBDE.png','Logo BDE ENIM')">
                <img src="img/art/Designs/logoBDE Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/logoENIM.png','other ENIM logo for sweater prints')">
                <img src="img/art/Designs/logoENIM Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/pineup.png','Pine Up logo for women association')">
                <img src="img/art/Designs/pineup Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/GMBA.PNG','Yonsei GMBA sweater logo')">
                <img src="img/art/Designs/GMBA Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/innovationdayslogo.png','logo for the innovations days at VOLVO')">
                <img src="img/art/Designs/innovationdayslogo Small.png">
            </div>
        </div>
        <h2>A logo-making process : </h2>
        <div class="gallery-div">
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/coraloteka1.png','Coraloteka (Homemade jewelery shop) - Step 1')">
                <img src="img/art/Designs/coraloteka1 Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/coraloteka3.png','Coraloteka (Homemade jewelery shop) - Step 3')">
                <img src="img/art/Designs/coraloteka3 Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/coraloteka4.png','Coraloteka (Homemade jewelery shop) - Step 4')">
                <img src="img/art/Designs/coraloteka4 Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/coraloteka2.png','Coraloteka (Homemade jewelery shop) - Step 2')">
                <img src="img/art/Designs/coraloteka2 Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/coraloteka5.png','Coraloteka (Homemade jewelery shop) - Step 5')">
                <img src="img/art/Designs/coraloteka5 Small.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Designs/coraloteka6.png','Coraloteka (Homemade jewelery shop) - Step 6')">
                <img src="img/art/Designs/coraloteka6 Small.png">
            </div>
        </div>
    </div>
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