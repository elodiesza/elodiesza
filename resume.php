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
    <title>Resume</title>
    <style>
        @media screen and (max-width: 599px) {
            .qr-code{
                display: none ;
            }
        }
        @media screen and (min-width: 600px) {
            .qr-code{
                width: 100px; 
                height: 100px; 
                margin-left: 20px;
            }
        }
    </style>
    <script>
        function animateProgressBar(targetId, targetPercentage) {
        var elem = document.getElementById(targetId);
        var width = 1;
        var id = setInterval(frame, 10);

        function frame() {
            if (width >= targetPercentage) {
                clearInterval(id);
            } else {
                width++;
                elem.style.width = width + "%";
            }
        }
    }
    </script>
    <!-- Reading progress bar -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var progressBarContainer = document.getElementById('reading-progress-container');
            const readingProgressTitleContainer = document.getElementById('reading-progress-title-container');
            var menuHeight = document.getElementById('intro').offsetHeight;
            const progressBar = document.getElementById('reading-progress-bar');
            const content = document.getElementById('content');
            const h2Elements = document.querySelectorAll('#content h2');

            const element1 = h2Elements[0];
            updateProgressBarPosition();
            window.addEventListener('scroll', updateProgressBarPosition);
            function updateProgressBarPosition() {
                var scrollPosition = window.scrollY;

                if (scrollPosition > menuHeight) {
                    progressBarContainer.style.position = 'fixed';
                    progressBarContainer.style.top = '0px';
                }else {
                    progressBarContainer.style.position = 'absolute';
                    progressBarContainer.style.top = `${menuHeight}px`;
                }
            }

            function updateProgressBar() {
                const contentHeight = content.clientHeight;
                const scrollPosition = window.scrollY;
                const scrollPercentage = (scrollPosition / contentHeight) * 100;
                progressBar.style.height = `${scrollPercentage+5}%`;
            }

            function updateDotPosition() {
                const contentRect = content.getBoundingClientRect();
                const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
                readingProgressTitleContainer.innerHTML = "";
                h2Elements.forEach((h2, index) => {
                    const dotContainer = document.createElement('div');
                    dotContainer.classList.add('progress-title-container');
                    const titleContainer = document.createElement('div');
                    titleContainer.classList.add('title-container');
                    const h2Text = h2.textContent;
                    const progressTitle = document.createElement('p');
                    progressTitle.classList.add('progress-title');
                    progressTitle.textContent = h2Text;
                    titleContainer.appendChild(progressTitle);
                    const dot = document.createElement('div');
                    dot.classList.add('dot');

                    dotContainer.appendChild(titleContainer); 
                    dotContainer.appendChild(dot);

                    readingProgressTitleContainer.appendChild(dotContainer);

                    const sectionRect = h2Elements[index].getBoundingClientRect();
                    const sectionTopPercentage = ((sectionRect.top - contentRect.top) / contentRect.height) * 100;

                    var dotPosition = (sectionTopPercentage / 100) * viewportHeight;

                    dotContainer.style.top = `${dotPosition-20}px`;
                });
            }

            updateDotPosition();
            updateProgressBar();

            window.addEventListener('scroll', function () {
                updateDotPosition();
                updateProgressBar();
            });

            window.addEventListener('resize', function () {
                updateDotPosition();
                updateProgressBar();
            });
            window.addEventListener('scroll', function () {
                updateDotPosition();
                updateProgressBar();
                updateProgressBarPosition(); 
            });

            window.addEventListener('resize', function () {
                updateDotPosition();
                updateProgressBarPosition(); 
                updateProgressBar();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/js-circle-progress/dist/circle-progress.min.js" type="module"></script>
</head>
<body id="content">
    <div id="intro">
        <?php
            $title = "resume"; 
            include 'menu.php'; 
        ?>
        <div class="intro">
            <div class="container" style="display:flex;justify-content:center; flex-wrap:wrap; background: rgba(255,255,255,0.4);border-radius: 30px; box-shadow: 2px 2px 40px rgba(0,0,0,0.05); margin:20px">
                <p class="description" style="text-indent: 20px">
                As a former experienced mechanical and industrial engineer, I made a deliberate decision 
                to pause my career and do an MBA in order to expand my knowledge of business practices 
                and address the frustrations and blind spots I encountered in my previous managerial role. 
                This intentional career pivot allowed me to enhance my interpersonal and language skills 
                while immersing myself in an international setting. Now, driven by a passion for creativity 
                and a deep enthusiasm for technology, I am actively seeking to reenter the field of 
                engineering to recover the stimulation I lost. With a strong background in engineering, 
                10+ years of software development experience and a newfound understanding of business 
                dynamics through my current position as an international business manager, I am poised 
                to contribute effectively and drive innovation in a more technical role. 
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        
        <form action="cv-download.php" method="post" style="display:flex; flex:1; justify-content: center; margin-bottom: 20px">
            <input type="hidden" name="file_path" value="files/CV-SZABLEWSKI.pdf">
            <button class="button" type="submit" name="download"><p class='button-text'>DOWNLOAD CV</p></button>
        </form>
        <div style="display:flex; justify-content: start; align-items: center; flex:1 ">
            <div class="slide-in" style="display:flex; flex-direction: column; justify-content: start">
                <div style="height: 40px"><h2 id="languages">LANGUAGES</h2></div>
                <div style="display:flex; flex:1; flex-wrap:wrap">
                    <div style="display: flex; align-items: flex-start; justify-content:center; width: 150px; margin-top: 10px;">
                        <img src="img/icons/france.png" style="width:40px; height:40px"/>
                        <div style="margin-left:10px;">
                            <div class="progress-bar">
                                <div class="progress" id="progress1"></div>
                            </div>
                            <p>NATIVE</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; justify-content:center; width: 150px; margin-top: 10px;">
                        <img src="img/icons/poland.png" style="width:40px; height:40px"/>
                        <div style="margin-left:10px">
                            <div class="progress-bar">
                                <div class="progress" id="progress2"></div>
                            </div>
                            <p>NATIVE</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; justify-content:center; width: 150px; margin-top: 10px;">
                        <img src="img/icons/england.png" style="width:40px; height:40px"/>
                        <div style="margin-left:10px;">
                            <div class="progress-bar">
                                <div class="progress" id="progress3"></div>
                            </div>
                            <p>BILINGUAL</p>
                            <p class="posttext">
                                TOEFL 110/120
                                </br>TOEIC 960/990
                            </p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; justify-content:center; width: 150px; margin-top: 10px;">
                        <img src="img/icons/korea.png" style="width:40px; height:40px"/>
                        <div style="margin-left:10px">
                            <div class="progress-bar">
                                <div class="progress" id="progress4"></div>
                            </div>
                            <p>ADVANCED</p>
                            <p class="posttext">
                                TOPIK 212/300
                                </br>5급
                            </p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; justify-content:center; width: 150px; margin-top: 10px;">
                        <img src="img/icons/germany.png" style="width:40px; height:40px"/>
                        <div style="margin-left:10px">
                            <div class="progress-bar">
                                <div class="progress" id="progress5"></div>
                            </div>
                            <p>BASIC</p>
                            <p class="posttext">
                            B1 CECRL
                        </p>
                        </div>
                    </div>
                    <script>
                        animateProgressBar("progress1", 100);
                        animateProgressBar("progress2", 95);
                        animateProgressBar("progress3", 90);
                        animateProgressBar("progress4", 80);
                        animateProgressBar("progress5", 20);
                    </script>
                </div>
                <div class="slide-in" style="display:flex; flex:1; margin-top: 20px; flex-wrap:wrap;">
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="65" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>JAVASCRIPT</p>
                            <img src="img/icons/JS.png" style="height:30px"/>
                            <p>3 YRS</p>
                        </div>
                    </div>   
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="65" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>TYPESCRIPT</p>
                            <img src="img/icons/TS.png" style="height:30px"/>
                            <p>3 YRS</p>
                        </div>
                    </div> 
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="65" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>REACT NATIVE</p>
                            <img src="img/icons/react.png" style="height:30px"/>
                            <p>3 YRS</p>
                        </div>
                    </div>   
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="70" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>HTML</p>
                            <img src="img/icons/HTML.png" style="height:30px"/>
                            <p>5 YRS</p>
                        </div>
                    </div>   
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="75" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>CSS</p>
                            <img src="img/icons/CSS.png" style="height:30px"/>
                            <p>8 YRS</p>
                        </div>
                    </div>   
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="50" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>PHP</p>
                            <img src="img/icons/php.png" style="height:30px"/>
                            <p>4 YRS</p>
                        </div>
                    </div>   
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="30" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>PYTHON</p>
                            <img src="img/icons/python.png" style="height:30px"/>
                            <p>1 YR</p>
                        </div>
                    </div>   
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="30" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>JAVA</p>
                            <img src="img/icons/java.png" style="height:30px"/>
                            <p>2 YRS</p>
                        </div>
                    </div>   
                    <div style="width: 100px; height:100px; display:flex; flex-direction: column; align-items:center; justify-content:center; margin:10px; font-size: 8px;">
                        <circle-progress value="30" max="100" text-format="none"></circle-progress>
                        <div style="position:absolute; display:flex; flex-direction: column; align-items:center; ">
                            <p>VBA</p>
                            <img src="img/icons/VBA.png" style="height:30px"/>
                            <p>2 YRS</p>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="slide-in" style="margin-top: 50px; ">
            <div style="height: 40px"><h2>SOFTWARE TOOLS</h2></div>
            <div style="display:flex; flex:1; margin-top: 20px; flex-wrap:wrap; ">
                <img src="img/icons/office.png" style="width:70px; height:50px; margin-right:5px"/>
                <img src="img/icons/ios.png" style="width:60px; height:30px; margin-right:5px"/>
                <img src="img/icons/catia.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/creo.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/indesign.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/thegimp.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/inkscape.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/figma.png" style="width:30px; height:50px; margin-right:5px"/>
                <img src="img/icons/protopie.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/aws.png" style="width:70px; height:50px; margin-right:5px"/>
                <img src="img/icons/davinci.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/salesforce.png" style="width:50px; height:34px; margin-right:5px"/>
                <img src="img/icons/jira.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/confluence.png" style="width:50px; height:50px; margin-right:5px"/>
                <img src="img/icons/mathematica.png" style="width:70px; height:50px; margin-right:5px"/>
                <img src="img/icons/labview.png" style="width:70px; height:50px; margin-right:5px"/>
            </div>
        </div>
        <div class="slide-in" style="margin-top: 50px; max-width: 100%;">
            <div style="height: 40px"><h2>PROFESSIONAL EXPERIENCE</h2></div>
            <div class="slide-in" style="display:flex; flex:1; margin-top:20px;">
                <div class="date-div">
                    <p class="date">Since Jan 2023</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px; margin-top:20px"/>
                </div>
                <div style="flex:4; display:flex; flex-direction: column;">
                    <p class="company">SEOUL ROBOTICS (KR)</p>
                    <p class="position">
                        International Business Development Manager - Autonomous Driving
                        Software solution
                    </p>
                    <p class="description">
                        • Following up autonomous driving projects (~$100k) with Korean
                        and international clients (mainly experienced with Japan, US
                        customers)
                        </br>• Creating project technical proposals, quotes, other support
                        documents, project plannings.
                        </br>• Refining the autonomous driving division business model
                        </br>• Prospecting for new potential customers (worldwide)
                        </br>• Promoting the company and its autonomous driving solution
                        around the world (participating and presenting at major related
                        events)
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/ciie3.jpeg','CIIE 2023')">
                            <img src="img/photos/ciie3 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/tokyo.jpeg','Tokyo Automotive World 2023')">
                            <img src="img/photos/tokyo Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/iaa1.JPEG','IAA 2023')">
                            <img src="img/photos/iaa1 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/ciie4.jpeg','CIIE 2023 - BMW Start-up pitch event')">
                            <img src="img/photos/ciie4 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/sr2.png','Presentation at the office')">
                            <img src="img/photos/sr2 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/ces2.png','CES 2023 Las Vegas')">
                            <img src="img/photos/ces2 Small.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-in" style="display:flex; flex:1">
                <div  class="date-div">
                    <p class="date"">Sep 2018 > Aug 2020</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px; margin-top:20px;"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company"">EFFBE FRANCE (FR)</p>
                    <p class="position">
                        Export project manager - Aeronautics, Defense, Industry, Automotive
                        </br>Responsible for Middle East and Asian regions
                    </p>
                    <p class="description">
                        • Managed major projects and designed rubber solution for
                        damping, regulation and sealing with international clients and
                        stakeholders (Israel, South Korea, Japan, India, Finland, Poland, USA,
                        Germany..)
                        </br>• Managed a production transfer between two sites in France
                        </br>• Handled technical, process and quality related matters on site
                        Investigated non-conformities and established quality procedures
                        </br>• Head of a strategic research program in colaboration with a
                        research laboratory
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/gamma1.png','')">
                            <img src="img/photos/gamma1 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/gamma2.png','')">
                            <img src="img/photos/gamma2 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/gamma3.png','The GAMMA family, on my departure day')">
                            <img src="img/photos/gamma3 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/gamma4.png','')">
                            <img src="img/photos/gamma4 Small.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-in" style="display:flex; flex:1">
                <div  class="date-div">
                    <p class="date">Jan > June 2018</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px; margin-top:20px;"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company">ZF TRW (FR)</p>
                    <p class="position">
                        Final assignment project - Process Engineer - Automotive
                    </p>
                    <p class="description">
                        • Set up new controls on a brake assembly line
                        </br>• Studied Pick&Place and Bin picking feasibility on the lines in order
                        to automate feeding/packaging operations
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/zf1.png','The industrial process team')">
                            <img src="img/photos/zf1 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/zf2.png','Always close to the workshop workers')">
                            <img src="img/photos/zf2 Small.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-in" style="display:flex; flex:1">
                <div  class="date-div">
                    <p class="date">Sep 2016 > Jan 2017</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px;margin-top:20px;"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company">VOLVO Construction Equipment (PL)</p>
                    <p class="position">
                        Junior Design Engineer - Construction Equipment
                    </p>
                    <p class="description">
                        • Designed excavator parts/ Established cost reduction analyses
                        </br>• Handled smal projects for other company sites worldwide
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/volvo1.png','The VOLVO CE design team, on my departure day')">
                            <img src="img/photos/volvo1 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/volvo2.png','Patent idea disclosure at VOLVO CE')">
                            <img src="img/photos/volvo2 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/volvo3.png','Driving a VOLVO hauler on construction site')">
                            <img src="img/photos/volvo3 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/volvo4.png','A creative workshop day at the VOLVO office')">
                            <img src="img/photos/volvo4 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/volvo5.png','At my desk')">
                            <img src="img/photos/volvo5 Small.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-in" style="display:flex; flex:1">
                <div  class="date-div">
                    <p class="date">Jul > Aug 2016</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px;margin-top:20px;"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company">Steelcase (FR)</p>
                    <p class="position">
                        Summer job - Operator on assembly line
                    </p>
                </div>
            </div>
            <div class="slide-in" style="display:flex; flex:1">
                <div  class="date-div">
                    <p class="date">Feb > June 2015</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px;margin-top:20px;"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company">Institute of Aviation (PL)</p>
                    <p class="position">
                        R&D intern - Aeronautics
                    </p>
                    <p class="description">
                        • Established the landing gears landing equations in order to model
                        the landing phenomenon and optimize the testing process
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/instytut1.png','With the institute R&D team')">
                            <img src="img/photos/instytut1 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/instytut2.png','Always close to the workshop workers')">
                            <img src="img/photos/instytut2 Small.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-in" style="margin-top: 50px; max-width: 100%;">
            <div style="height: 40px"><h2>EDUCATIONAL BACKGROUND</h2></div>
            <div class="slide-in" style="display:flex; flex:1; margin-top:20px">
                <div  class="date-div">
                    <p class="date">Sep 2021 > Feb 2023</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px; margin-top:20px"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company">Yonsei University (KR)</p>
                    <p class="position">
                        Global MBA, GPA : 4.17
                    </p>
                    <p class="description">
                        International Business, Marketing, Accounting, Economics and
                        related subjects
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/yonsei1.png','MBA Graduation day')">
                            <img src="img/photos/yonsei1 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/yonsei2.png','MBA Graduation day')">
                            <img src="img/photos/yonsei2 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/yonsei3.png','GMBA class picture')">
                            <img src="img/photos/yonsei3 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/yonsei4.png','GMBA class picture')">
                            <img src="img/photos/yonsei4 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/yonsei5.png','Shooting for a Yonsei marketing material')">
                            <img src="img/photos/yonsei5 Small.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-in" style="display:flex; flex:1">
                <div  class="date-div">
                    <p class="date">Sep 2020 > Aug 2021</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px; margin-top:20px"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company">Daejeon University (KR)</p>
                    <p class="position">
                        Korean Government Scholar
                    </p>
                    <p class="description">
                        • Korean language student (6급 advanced class)
                        </br>• English tutor for Korean university students (6 months)
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/dju1.png','DJU graduation day')">
                            <img src="img/photos/dju1 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/dju2.png','Kimchi making day 김장 at DJU')">
                            <img src="img/photos/dju2 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/dju3.png','Class picture at DJU')">
                            <img src="img/photos/dju3 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/dju4.png','Last day at DJU with the class')">
                            <img src="img/photos/dju4 Small.png">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/dju5.png','Shooting for DJU official website')">
                            <img src="img/photos/dju5 Small.png">
                        </div>
                    </div>
                </div>
            </div>
            <div style="display:flex; flex:1">
                <div  class="date-div">
                    <p class="date">2013 > 2018</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px;margin-top:20px;"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company">Ecole Nationale d’ingénieurs de Metz (FR)</p>
                    <p class="position">
                        Master of Science, engineering and industrial manufacturing
                        Curriculum excellency award - Valedictorian
                        Specialized in CAD design
                    </p>
                    <p class="description">
                        • Member of the board of directors (2yrs)
                        </br>• Member of the pedagogical council (2yrs)
                        </br>• Responsible for internal relations (2yrs)
                        </br>• Head of communications (1yr)
                        </br>• Columnist at the school newspaper (2yrs)
                        </br>• Responsible for the graphism hub (1yr)
                        </br>• Fitness coach (1yr)
                        </br>• MC at the news broadcast (1yr)
                        </br>• Event organizer and regular volunteer (5yrs)
                        </br>• English tutor (1yr)
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/enim1.png','ENIM graduation day, receiving the curriculum excellency award')">
                            <img src="img/photos/enim1 Small.png" alt="Thumbnail 28">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/enim2.png','Working on a machine with my teammate')">
                            <img src="img/photos/enim2 Small.png" alt="Thumbnail 29">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/enim3.png','Winning a pitch award for international excellence among universities of the Region')">
                            <img src="img/photos/enim3 Small.png" alt="Thumbnail 30">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/enim4.png','Graduation class picture')">
                            <img src="img/photos/enim4 Small.png" alt="Thumbnail 31">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/enim5.png','Introducing the Graduation Ceremony')">
                            <img src="img/photos/enim5 Small.png" alt="Thumbnail 32">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/enim8.png','Pharrell Williams - Happy, ENIM cover')">
                            <img src="img/photos/enim8 Small.png" alt="Thumbnail 38">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-in" style="display:flex; flex:1">
                <div  class="date-div">
                    <p class="date">Jan > June 2018</p>
                </div>
                <div class="storyline">
                    <img src="img/design/dot.png" style="width:15px; height:15px; margin-left:-9px;margin-top:20px;"/>
                </div>
                <div style="flex: 1; display:flex; flex-direction: column">
                    <p class="company">Munster Technological University (IR)</p>
                    <p class="position">
                        Bachelor of Engineering (BEng) (Hons) Advanced Manufacturing Technology
                    </p>
                    <p class="description">
                        Grade 72.30% - First Class Honors, Valedictorian
                    </p>
                    <div class="gallery-div">
                        <div class="thumbnail" onclick="openLightbox('img/photos/cit1.png')">
                            <img src="img/photos/cit1 Small.png" alt="Thumbnail 33">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/cit2.png','CIT gala')">
                            <img src="img/photos/cit2 Small.png" alt="Thumbnail 34">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/cit3.png','At our booth, presenting an engineering project at a CIT exhibition with my teammate')">
                            <img src="img/photos/cit3 Small.png" alt="Thumbnail 35">
                        </div>
                        <div class="thumbnail" onclick="openLightbox('img/photos/northernireland.png')">
                            <img src="img/photos/northernireland Small.png" alt="Thumbnail 37">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-in" style="margin-top: 50px">
            <div style="height: 40px"><h2>HOBBIES</h2></div>
            <div style="display:flex; flex:1; flex-wrap:wrap; ">
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/code.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Mobile app programming</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/art.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Portraitist and illustrator</p>
                        <a href="https://elodiesza.com/drawing.php" target="_blank">
                            <p style="color:#949B40">> Check it out <</p>
                        </a>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/aerial.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Aerial sports</p>
                        <p style="font-size: 12px;text-align: center">9yrs, competition level</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/dance.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Latin dance</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/travel.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Lone traveler / Couchsurfer</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/diy.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Hand crafting</p>
                        <a href="https://elodiesza.com/diy.php" target="_blank">
                            <p style="color:#949B40">> Check it out <</p>
                        </a>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/sewing.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Knitting / Sewing</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/writing.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Korean blog columnist</p>
                        <a href="https://blog.naver.com/gingerinseoul" target="_blank">
                            <p style="color:#949B40">> My Blog <</p>
                        </a>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/book.png" style="width:50px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Self development Bookworm</p>
                        <a href="https://www.goodreads.com/user/show/172100353-elodie-szablewski" target="_blank">
                            <p style="color:#949B40">>My goodreads<</p>
                        </a>
                    </div>
            </div>
        </div>
        <div class="slide-in" style="margin-top: 50px">
            <div style="height: 40px"><h2>OTHER COMMITMENTS</h2></div>
            <div style="display:flex; justify-content: center;  flex-wrap:wrap; width: 100%">
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/fkcci.png" style="width:100px; height:30px"/>
                        <p style="font-size: 12px;text-align: center">Member of the French Korean Chamber of Commerce (FKCCI)</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/frenchtech.png" style="width:40px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Member of the French Tech Korea</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/gks.png" style="width:70px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Korean Government Scholarship Alumni</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/mosl.png" style="width:90px; height:50px"/>
                        <p style="font-size: 12px;text-align: center">Ambassador of MOSL international, expats of my region</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/koreanet.png" style="width:90px; height:40px"/>
                        <p style="font-size: 12px;text-align: center">Honorary reporter at Korea.net</p>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; width: 100px">
                        <img src="img/icons/ihedn.png" style="width:90px; height:40px"/>
                        <p style="font-size: 12px;text-align: center">Member of IHEDN Korea (institue of advanced Studies in National Defense group)</p>
                    </div>
            </div>
        </div>
        <div class="slide-in" style="margin-top: 50px">
            <h2>KEY NUMBERS</h2>
            <div style="display:flex; flex:1; justify-content: center; flex-wrap:wrap; ">
                <div style="display: flex; flex-direction: column; align-items: center; width: 130px">
                    <img src="img/icons/duolingo.png" style="width:70px; height:70px"/>
                    <p class="key-number">400</p>
                    <p style="font-size: 12px;text-align: center">days streak achieved on Duolingo</p>
                    <a href="https://www.duolingo.com/profile/Ginger348038" target="_blank">
                        <p style="color:#949B40">>My profile<</p>
                    </a>
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; width: 130px">
                    <img src="img/icons/books.png" style="width:70px; height:70px"/>
                    <p class="key-number">35</p>
                    <p style="font-size: 12px;text-align: center">books read in 2023</p>
                    <a href="https://www.goodreads.com/user/show/172100353-elodie-szablewski" target="_blank">
                        <p style="color:#949B40">> My goodreads <</p>
                    </a>
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; width: 130px">
                    <img src="img/icons/tiktok.png" style="width:70px; height:70px"/>
                    <p class="key-number">149 000 +</p>
                    <p style="font-size: 12px;text-align: center">followers on Tik Tok (acrobatic dance content)</p>
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; width: 130px">
                    <img src="img/icons/classroom.png" style="width:70px; height:70px"/>
                    <p class="key-number">15</p>
                    <p style="font-size: 12px;text-align: center">courses completed in 2023 (coding, business, tech)</p>
                    <a href="https://www.linkedin.com/posts/elodieszablewski_businessplan-react-marketstudy-activity-6988800851163189248-LbJD?utm_source=share&utm_medium=member_desktop" target="_blank">
                        <p style="color:#949B40">>related post <</p>
                    </a>
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; width: 130px">
                    <img src="img/icons/hellotalk.png" style="width:70px; height:70px"/>
                    <p class="key-number">Top 0.01%</p>
                    <p style="font-size: 12px;text-align: center">world HelloTalk super sharer 🇰🇷</p>
                    <a href="https://h5.hellotalk8.com/hybrid_h5/activity/activity-11th?HA=1&source=2023reportpush1&userid=UHdmS1pzDghr&userid=UHdmS1pzDghr" target="_blank">
                        <p style="color:#949B40">> My 2023 review <</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="slide-in" style="margin-top: 50px">
            <h2>STRENGTHS</h2>
            <div style="display:flex; flex-direction:row; max-width:100%; justify-content:center; flex-wrap:wrap">
                <div style="flex:1; align-items: center; justify-content: center; padding: 10px; text-align: center; max-width:200px">
                    <img src="img/icons/assertiveness.png" style="width: 50%">
                    <h3 style="text-align: center">Assertiveness</h3>
                    <p style="text-align: center">I know how to express my opinions when needed and I am not afraid to say I was wrong.</p>
                </div>
                <div style="flex:1; align-items: center; justify-content: center; padding: 10px; text-align: center; max-width:200px">
                    <img src="img/icons/loyalty.png" style="width: 50%">
                    <h3 style="text-align: center">Loyalty</h3>
                    <p style="text-align: center">If I can trust you, then you can trust me. I am dedicated to my commitments.</p>
                </div>
                <div style="flex:1; align-items: center; justify-content: center; padding: 10px; text-align: center; max-width:200px">
                    <img src="img/icons/flexibility.png" style="width: 50%">
                    <h3 style="text-align: center">Flexibility</h3>
                    <p style="text-align: center">You need me to travel to the other side of the world tomorrow ? I am packing up my luggage right now.</p>
                </div>
            </div>
        </div>
    </div>
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
    <?php include 'scroll-up.php'; ?>
    <div id="reading-progress-container" class="reading-progress-container">
        <div id="reading-progress-title-container"></div>
        <div class="progress-bar-container">
            <div id="reading-progress-bar" class="reading-progress-bar"></div>
            <div class="reading-progress-bar-back"></div>
        </div>
    </div>
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
    </script>
</body>
</html>