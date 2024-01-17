<!DOCTYPE html>
<html lang="en">
	<head>
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
                .card_box {
                	background: #ffffff;
                	border-radius: 20px;
                	margin-top: 20px;
                	transition: .3s;
                	margin-bottom: 20px;
                    border-width: 1px;
                    border-style: solid;
                    border-color: #d4d4d4;
                }
				.contacts {
					height:30px; 
					display:flex; 
					align-self: flex-end;
				}
				.banner-text {
					height:100%; display: flex; flex-direction: column;
				}
            }
            @media screen and (max-width: 599px) {
                .container-banner {
                    width: 100%;
                    margin: 0 auto;
                    padding: 20px;
                    display: flex;
                    flex-direction: column;
                }
                .card_box {
                	background: #ffffff;
                	border-radius: 42px;
                	margin-top: 20px;
                	transition: .3s;
                	margin-bottom: 20px;
                    border-width: 1px;
                    border-style: solid;
                    border-color: #d4d4d4;
                }
				.contacts {
					height:30px; 
					display:flex; 
					align-self: center;
					margin-right: 20px;
				}
				.banner-text {
					height:100%; display: flex; flex-direction: column; text-align: center; align-items: center; flex:1;
				}
            }
		</style>
	</head>
	<body>
		<div class="header">
			<div class="container-banner">
					<div class="photo">
						<img class="profile-photo" src="img/banner/elodie-thumbnail.png" alt="my photo">
						<p>📍 Seoul, KR</p>
						<p style="color:#949B40">F2 visa</p>
					</div>
					<div class="banner">
						<div class="contacts">
							<form action="cv-download.php" method="post">
								<input type="hidden" name="file_path" value="files/CV-SZABLEWSKI.pdf">
								<button class="button" type="submit" name="download" style="height: 20px; border-radius: 20px"><p class='button-text'>DOWNLOAD CV</p></button>
							</form>
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
								<h1>Elodie Szablewski</h1>
								<h3>Msc. Mechanical Engineer<span style="color:#E0EB61"> /</span> Yonsei MBA<span style="color:#E0EB61"> /</span> 10+y Developer<span style="color:#E0EB61"> /</span> Artist</h3>
							</div>
							<div style="flex:2; display: flex; align-items: end;">
								<form action="index.php" method="post">
                                    <?php
                                        $class = isset($_POST['portfolio']) ? 'active' : '';
                                        echo "<button class='button $class' type='submit' name='portfolio'><p class='button-text'>PORTFOLIO</p></button>";
                                    ?>
                                </form>
								<form action="resume.php" method="post">
									<?php
										$class = isset($_POST['resume']) ? 'active' : '';
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