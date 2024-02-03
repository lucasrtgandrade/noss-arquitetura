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
    <title>Casa CR232</title>
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
                        <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/casa-cr232/projeto-rainaldi-desktop-01.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-tablet-01.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(1)" src="../images/casa-cr232/projeto-rainaldi-mobile-01.jpg"
                        alt="Visão frontal da mesa de jantar"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="1">
                        <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/casa-cr232/projeto-rainaldi-desktop-02.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-tablet-02.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(2)" src="../images/casa-cr232/projeto-rainaldi-mobile-02.jpg"
                        alt="Visão do sofa"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="2">
                        <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/casa-cr232/projeto-rainaldi-desktop-03.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-tablet-03.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(3)" src="../images/casa-cr232/projeto-rainaldi-mobile-03.jpg"
                        alt="Área da cozinha com churrasqueira"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="3">
                        <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/casa-cr232/projeto-rainaldi-desktop-04.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-tablet-04.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(4)" src="../images/casa-cr232/projeto-rainaldi-mobile-04.jpg"
                        alt="Visão da cozinha"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="4">
                        <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/casa-cr232/projeto-rainaldi-desktop-05.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-tablet-05.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(5)" src="../images/casa-cr232/projeto-rainaldi-mobile-05.jpg"
                        alt="Cozinha"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="5">
                        <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/casa-cr232/projeto-rainaldi-desktop-06.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-tablet-06.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(6)" src="../images/casa-cr232/projeto-rainaldi-mobile-06.jpg"
                        alt="Sala de estar"
                        loading="lazy">
                    </picture>
                </div>
            </li>
        </ul>
        <!-- || Project Title -->
        <div class="project-title">
            <div class="project-name">
                <h3 class="project-header">Casa CR232</h3>
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
                <h3 class="name-project">Casa CR232</h3>
                <p class="project-text">Arquitetura e Interiores – 850m²<br>
                                        São Paulo, 2021<br>
                                        Estudo Preliminar</p>
                <div class="container-desenhos">
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-desenho-desktop-01.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(7)" src="../images/casa-cr232/projeto-rainaldi-desenho-mobile-01.webp" alt="Planta existia anteriormente">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-desenho-desktop-02.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(8)" src="../images/casa-cr232/projeto-rainaldi-desenho-mobile-02.webp" alt="Planta de demolição">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-desenho-desktop-03.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(9)" src="../images/casa-cr232/projeto-rainaldi-desenho-mobile-03.webp" alt="Planta de construção">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-desenho-desktop-04.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(10)" src="../images/casa-cr232/projeto-rainaldi-desenho-mobile-04.webp" alt="Layout Atual">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-desenho-desktop-05.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(11)" src="../images/casa-cr232/projeto-rainaldi-desenho-mobile-05.webp" alt="Layout Atual">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/casa-cr232/projeto-rainaldi-desenho-desktop-06.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(12)" src="../images/casa-cr232/projeto-rainaldi-desenho-mobile-06.webp" alt="Layout Atual">
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
                    <img src="../images/casa-cr232/projeto-rainaldi-full-01.jpg" class="image-slide" alt="Entrada do Escritório rainaldi">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-full-02.jpg" class="image-slide" alt="Detalhe da placa do escritório rainaldi">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-full-03.jpg" class="image-slide" alt="Mural exibindo os produtos da rainaldi">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-full-04.jpg" class="image-slide" alt="Detalhe do mural">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-full-05.jpg" class="image-slide" alt="Mural exibindo os produtos da rainaldi">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-full-06.jpg" class="image-slide" alt="Visão frontal do mural com os produtos da rainaldi">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-01.webp" class="image-slide" alt="Planta anterior ao projeto">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-02.webp" class="image-slide" alt="Planta da área de demolição">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-03.webp" class="image-slide" alt="Planta da área de contrução">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-04.webp" class="image-slide" alt="Planta do layout do novo projeto">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-05.webp" class="image-slide" alt="Planta do layout do novo projeto">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-06.webp" class="image-slide" alt="Planta do layout do novo projeto">
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
            <span class="current-slide">1</span><span>/</span><span class="total-slides">6</span>
        </div>
    </main>
    <!-- Footer -->
    <footer class="foot-space"></footer>
</body>

</html>