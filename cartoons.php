<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link href="plugins/owl-carousel5-main/owl-carousel/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <title>Drawing</title>
</head>
<body>
    <?php 
        $title = "Cartoons";
        include 'menu.php'; 
    ?>
    <div class="container">
        <h1 class="title">Cartoons</h1>
        <h2>Ginger</h2>
        <div class="gallery-div">
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/ginger1.PNG','First time drawing Ginger. With a self-crafted touch pen on my iPhone. Yes.')">
                <img src="img/art/Comics/ginger1.PNG">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/ginger2.PNG','The Ginger character is born like this.')">
                <img src="img/art/Comics/ginger2.PNG">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/ginger3.png')">
                <img src="img/art/Comics/ginger3.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/ginger4.png')">
                <img src="img/art/Comics/ginger4.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/ginger5.PNG')">
                <img src="img/art/Comics/ginger5.PNG">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/SRcomics.png')">
                <img src="img/art/Comics/SRcomics.png">
            </div>
        </div>
        <h2>Webtoon</h2>
        <p>
            Artistry has been a lifelong pursuit for me, with my earliest memories filled with the joy of sketching characters and weaving imaginative narratives.
            Throught my portfolio you can witness all types of arts I thrived in over the past decade. This multidimensional skill set laid the groundwork for my artistic journey, culminating in a return to my childhood roots in 2023.
        </br></br> 
            In a deliberate shift, I embarked on creating my inaugural structured WEBTOON, a poignant narrative drawn from personal experiences. This storytelling endeavor serves a dual purpose – shedding light on a prevailing societal issue while offering solace and guidance to those who face similar challenges. I seek to share this narrative and continue leveraging the transformative potential of art to provoke thought, evoke emotion, confront unresolved societal ills and advocate for positive change.
        </br></br> 
        <div style="display:flex; flex:1; justify-content:center">
            <img src="img/art/Comics/paris1.png" style="object-fit: contain; height:auto; max-width:100%">
        </div>
        </p>
        <p>
            The story takes place in Paris, and will retrace real actions in real settings. Not only a meaningful story, this webtoon pictures real Parisian spots, famous or less famous. Missing my second city in heart, I want to share my vision of it and transfer its peculiar charm and aura through the chapters. I want the readers to feel just like I felt, by setting the most realistic context.
        </br></br> 
            To draw this webtoon, I am using a professional tool for webtoon/comics designers.
        </p>
        <div style="display:flex; flex:1; justify-content:center; padding:10px;margin-top: 20px; margin-bottom: 20px">
            <img src="img/art/Comics/studio.png" style="object-fit: content; max-width:100%">
        </div>
        <div class="gallery-div">
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/paris2.png')">
                <img src="img/art/Comics/paris2.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/paris3.png')">
                <img src="img/art/Comics/paris3.png">
            </div>
            <div class="thumbnail" onclick="openLightbox('img/art/Comics/paris4.png')">
                <img src="img/art/Comics/paris4.png">
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