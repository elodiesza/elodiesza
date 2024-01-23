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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="styles.css" rel="stylesheet" type="text/css" />
		<title>Elodie Portfolio</title>
		<style>
		    @media screen and (min-width: 600px) {
                .container-banner {
                    max-width: 800px;
                    margin: 0 auto;
                    padding: 20px;
                    display: flex;
                    flex-direction: row;
                }
				.contacts {
					height:30px; 
					display:flex; 
					align-self: flex-end;
				}
				.banner-text {
					height:100%; 
					display: flex; 
					flex-direction: column;
				}
            }
            @media screen and (max-width: 599px) {
                .container-banner {
                    width: 100%;
                    margin: 0 auto;
                    padding: 20px;
                    display: flex;
                    flex-direction: column;
					text-align: center;
                }
				.contacts {
					height:30px; 
					display:flex; 
					align-self: center;
					margin-right: 20px;
				}
				.banner-text {
					width: 100%;
					text-align: center; 
					align-items: center; 
					justify-content: center;
					display: flex;
					flex-direction: column;
					margin-top: 20px;
					margin-bottom: 20px;
				}
            }
		</style>
	</head>
	<body>
		<div class="header">
			<div class="container-banner">
					<div class="photo">
						<img class="profile-photo" src="img/banner/elodie-thumbnail.png">
						<p>📍 Seoul, KR</p>
						<p style="color:#949B40">F2 visa</p>
					</div>
					<div class="banner">
						<div class="contacts">
							<a href="https://www.linkedin.com/in/elodieszablewski/" target="_blank">
								<img src="img/banner/linkedin.png" alt="linkedin" style="width:20px; height:20px; margin-left:10px; margin-right:10px">
							</a>
							<a href="https://github.com/elodiesza" target="_blank">
								<img src="img/banner/github.png" alt="github" style="width:20px; height:20px; margin-right:10px">
							</a>
							<a href="mailto:elodie.sza@gmail.com">
								<img src="img/banner/gmail.png" alt="gmail" style="width:20px; height:20px; margin-right:10px">
							</a>
						</div>
						<div class="banner-text">
							<div style="flex:1">
								<p>Hello, <span style="color:#949B40">I am</span></p>
							</div>
							<div style="flex:2; margin-bottom:20px">
								<h1 class="name">Elodie Szablewski</h1>
								<h3 class="name">Msc. Mechanical Engineer<span style="color:#E0EB61"> /</span> Yonsei MBA<span style="color:#E0EB61"> /</span> 10+y Developer<span style="color:#E0EB61"> /</span> Artist</h3>
							</div>
							<div style="flex:2; display: flex; align-items: end;">
								<form action="index.php" method="post">
									<?php
										$class = ($title == "portfolio") ? 'active' : '';
										echo "<button class='button $class' type='submit' name='portfolio'><p class='button-text'>PORTFOLIO</p></button>";
									?>
								</form>
								<form action="resume.php" method="post">
									<?php
										$class = ($title == "resume") ? 'active' : '';
										echo "<button class='button $class' type='submit' name='resume'><p class='button-text'>RESUME</p></button>";
									?>
								</form>
							</div>
						</div>
					</div>
			</div>
        </div>
	</body>
</html>