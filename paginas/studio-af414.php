<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- || Metadata -->
    <?php include "../templates/meta.php" ?>
    <!-- || Stylesheets -->
    <link rel="stylesheet" href="../css/cores.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/tipografia.css">
    <link rel="stylesheet" href="../css/uteis.css">
    <link rel="stylesheet" href="../css/info-panel.css">
    <link rel="stylesheet" href="../css/carousel-project.css">
    <link rel="stylesheet" href="../css/lightbox.css">
    <!-- || Scripts -->
    <script src="../js/carousel-home.js" defer></script>
    <script src="../js/nav.js" defer></script>
    <script src="../js/full-height.js" defer></script>
    <script src="../js/info-panel.js" defer></script>
    <script src="../js/desenhosAnimation.js" defer></script>
    <script src="../js/lightbox.js"></script>
    <title>Studio AF414</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <?php include "../templates/navigation.php" ?>
    <!-- Main -->
    <main class="minHeight">
        <!-- Carousel -->
        <ul class="carousel nobullets">
            <!-- Projeto 01 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="0">
                        <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-01.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-01.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(1)" src="../images/studio-af414/projeto-republica-mobile-01.jpg" alt="Vista da entrada do apartamento" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 02 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="1">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-02.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-02.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(2)" src="../images/studio-af414/projeto-republica-mobile-02.jpg" alt="Vista da sala de estar para cozinha" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 03 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="2">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-03.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-03.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(3)" src="../images/studio-af414/projeto-republica-mobile-03.jpg" alt="vista frontal da cozinha com a sala de estar" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 04 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="3">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-04.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-04.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(4)" src="../images/studio-af414/projeto-republica-mobile-04.jpg" alt="detalhes da cozinha com o gabinete de madeira e a pia de concreto" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 05 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="4">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-05.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-05.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(5)" src="../images/studio-af414/projeto-republica-mobile-05.jpg" alt="detalhe da porta de entrada com uma mistura de cores em formato geometrico" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 06 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="5">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-06.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-06.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(6)" src="../images/studio-af414/projeto-republica-mobile-06.jpg" alt="vista frontal do quarto com o sofá" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 07 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="6">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-07.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-07.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(7)" src="../images/studio-af414/projeto-republica-mobile-07.jpg" alt="cama de casal com uma almofada verde escuro no meio dos travesseiros" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 08 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="7">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-08.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-08.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(8)" src="../images/studio-af414/projeto-republica-mobile-08.jpg" alt="uma parede de tijos com um abajur preto" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 09 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="8">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-09.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-09.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(9)" src="../images/studio-af414/projeto-republica-mobile-09.jpg" alt="uma parede de tijolos com dois quadros feitos de madeira" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 10 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="9">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-10.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-10.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(10)" src="../images/studio-af414/projeto-republica-mobile-10.jpg" alt="detalhes das almofadas em vinho no sofá" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 11 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="10">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-11.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-11.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(11)" src="../images/studio-af414/projeto-republica-mobile-11.jpg" alt="detalhes da sala em azul escuro na poltrona e no tapete" loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 12 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="11">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/studio-af414/projeto-republica-desktop-12.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-tablet-12.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(12)" src="../images/studio-af414/projeto-republica-mobile-12.jpg" alt="Lavabo com gabinete de madeira, pia de concreto e detalhes no espelho em preto" loading="lazy">
                    </picture>
                </div>
            </li>
        </ul>

        <!-- || Project Title -->
        <div class="project-title">
            <div class="project-name">
                <h3 class="project-header">Studio AF414</h3>
            </div>
            <!-- Desktop Icon -->
            <div class="project-info" aria-controls="info-panel" aria-expanded="false">
                <div class="project-info-large">
                    <p class="cta-text info-text" aria-controls="info-panel" aria-expanded="false">Informações</p>
                    <div>
                        <button class="project-info-icon" aria-controls="info-panel" aria-expanded="false">
                            <span class="sr-only">Informações do projeto</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Panel -->
        <div id="info-panel" class="info-panel" data-visible="false">
            <div class="info-body">
                <h3 class="name-project">Studio AF414</h3>
                <p class="project-text">Interiores – 28m²<br>
                                    São Paulo, 2021<br>
                                    Obra Concluída</p>
                <div class="container-desenhos">
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/studio-af414/projeto-republica-desenho-desktop-01.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(24)" src="../images/studio-af414/projeto-republica-desenho-mobile-01.webp" alt="Planta atual do projeto">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <!-- || Next and previous button -->
        <div class="nav-carousel">
            <button aria-label="Ir para imagem anterior" class="prev-button-main">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button aria-label="Ir para imagem seguinte" class="next-button-main">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
            <!-- LIGHTBOX -->
            <div id="Lightbox" class="modal">
                <div class="modal-content">
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-01.jpg" class="image-slide" alt="Vista da entrada do apartamento">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-02.jpg" class="image-slide" alt="Vista da sala de estar para cozinha">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-03.jpg" class="image-slide" alt="vista frontal da cozinha com a sala de estar">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-04.jpg" class="image-slide" alt="detalhes da cozinha com o gabinete de madeira e a pia de concreto">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-05.jpg" class="image-slide" alt="detalhe da porta de entrada com uma mistura de cores em formato geometrico">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-06.jpg" class="image-slide" alt="vista frontal do quarto com o sofá">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-07.jpg" class="image-slide" alt="cama de casal com uma almofada verde escuro no meio dos travesseiros">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-08.jpg" class="image-slide" alt="uma parede de tijos com um abajur preto">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-09.jpg" class="image-slide" alt="uma parede de tijolos com dois quadros feitos de madeira">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-10.jpg" class="image-slide" alt="detalhes das almofadas em vinho no sofá">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-11.jpg" class="image-slide" alt="detalhes da sala em azul escuro na poltrona e no tapete">
                    </div>
                    <div class="slide">
                        <img src="../images/studio-af414/projeto-republica-full-12.jpg" class="image-slide" alt="Lavabo com gabinete de madeira, pia de concreto e detalhes no espelho em preto">
                    </div>
                    <!-- CONTROLS -->
                    <button class="close-button">
                        <i class="fa-solid fa-xmark" onclick="closeLightbox()"></i>
                    </button>
                    <button class="prev-button-main" onclick="changeSlide(-1)">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="next-button-main" onclick="changeSlide(1)">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        <!-- || Carousel Counter -->
        <div class="carousel-counter">
            <span class="current-slide">1</span><span>/</span><span class="total-slides">12</span>
        </div>
    </main>
    <!-- Footer -->
    <footer class="foot-space"></footer>
</body>

</html>