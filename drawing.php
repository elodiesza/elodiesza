<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <title>Drawings and Paintings</title>
</head>
<body>
    <?php 
        include 'menu.php'; 
    ?>
    <div class="container">
        <h1 class="title">Drawings and paintings</h1></br>
        <div class="gallery-div">
            <div class="thumbnail" onclick="openLightbox('img/art/StillLife/chaussures.png')">
                <img src="img/art/StillLife/chaussures.png" alt="Thumbnail 1">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/StillLife/Chaussurescolored.jpeg')">
                <img src="img/art/StillLife/Chaussurescolored.jpeg" alt="Thumbnail 2">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/StillLife/ElCamino.jpg')">
                <img src="img/art/StillLife/ElCamino.jpg" >
            </div>
        </div>
        <h2>Pencil drawings</h2></br>
        <h2>Paintings</h2></br>
        <h2>Digital drawings</h2></br>
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