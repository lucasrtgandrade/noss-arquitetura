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
    <title>Apartamento PM93</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <?php
    include '../templates/navigation.php';
    ?>
    <!-- || Main -->
    <main class="minHeight">
        <!-- || Carousel images -->
        <ul class="carousel nobullets">
            <li class="carousel-list">
                <!-- || Imagem 01 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-01.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-01.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(1)" src="../images/apartamento-pm93/projeto-west-side-mobile-01.jpg" alt="Entrada do apartamento">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 02 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-02.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-02.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(2)" src="../images/apartamento-pm93/projeto-west-side-mobile-02.jpg" alt="Área da cozinha">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 03 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-03.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-03.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(3)" src="../images/apartamento-pm93/projeto-west-side-mobile-03.jpg" alt="Detalhe da mesa de jantar">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 04 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-04.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-04.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(4)" src="../images/apartamento-pm93/projeto-west-side-mobile-04.jpg" alt="Sala de estar">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 05 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-05.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-05.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(5)" src="../images/apartamento-pm93/projeto-west-side-mobile-05.jpg" alt="Sala de estar com detalhe das portas">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 06 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-06.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-06.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(6)" src="../images/apartamento-pm93/projeto-west-side-mobile-06.jpg" alt="Visão lateral da sala de estar">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 07 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-07.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-07.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(7)" src="../images/apartamento-pm93/projeto-west-side-mobile-07.jpg" alt="Visão da sala com as portas do banheiro e do quarto abertas">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 08 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-08.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-08.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(8)" src="../images/apartamento-pm93/projeto-west-side-mobile-08.jpg" alt="Visão da sala com as portas do banheiro e do quarto abertas">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 09 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-09.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-09.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(9)" src="../images/apartamento-pm93/projeto-west-side-mobile-09.jpg" alt="Lavabo">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 10 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-10.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-10.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(10)" src="../images/apartamento-pm93/projeto-west-side-mobile-10.jpg" alt="Detalhe da torneira">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 11 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-11.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-11.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(11)" src="../images/apartamento-pm93/projeto-west-side-mobile-11.jpg" alt="Detalhe do lavabo">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 12 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-12.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-12.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(12)" src="../images/apartamento-pm93/projeto-west-side-mobile-12.jpg" alt="Entrada do quarto">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 13 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-13.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-13.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(13)" src="../images/apartamento-pm93/projeto-west-side-mobile-13.jpg" alt="Visão lateral do quarto">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 14 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-14.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-14.jpg">
                    <img class="carousel-image" onclick="openLightbox(); toSlide(14)" src="../images/apartamento-pm93/projeto-west-side-mobile-14.jpg" alt="Visão da cama">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 15 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-15.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-15.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(15)" src="../images/apartamento-pm93/projeto-west-side-mobile-15.jpg" alt="Visão da varanda">
                </picture>
            </li>
        </ul>
        <!-- || Project Title -->
        <div class="project-title">
            <div class="project-name">
                <h3 class="project-header">Apartamento PM93</h3>
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
        <!-- || Next and previous button -->
        <div class="nav-carousel">
            <button aria-label="Ir para imagem anterior" class="prev-button-main">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button aria-label="Ir para imagem seguinte" class="next-button-main">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <!-- Info Panel -->
        <div id="info-panel" class="info-panel" data-visible="false">
            <div class="info-body">
                <h3 class="name-project">Apartamento PM93</h3>
                <p class="project-text">Interiores – 66m²<br>
                São Paulo, 2021<br>
                Obra Concluída<br></p>
                <div class="container-desenhos">
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-desenho-desktop-01.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(16)" src="../images/apartamento-pm93/projeto-west-side-desenho-mobile-01.webp" alt="Planta existia anteriormente">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-desenho-desktop-02.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(17)" src="../images/apartamento-pm93/projeto-west-side-desenho-mobile-02.webp" alt="Planta de demolição">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-desenho-desktop-03.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(18)" src="../images/apartamento-pm93/projeto-west-side-desenho-mobile-03.webp" alt="Planta de construção do projeto">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-desenho-desktop-04.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(19)" src="../images/apartamento-pm93/projeto-west-side-desenho-mobile-04.webp" alt="Corte longitudinal do projeto">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        <!-- || Lightbox -->
        <div id="Lightbox" class="modal">
            <div class="modal-content">
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-01.jpg" class="image-slide" alt="Entrada do apartamento">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-02.jpg" class="image-slide" alt="Área da cozinha">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-03.jpg" class="image-slide" alt="Detalhe da mesa de jantar">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-04.jpg" class="image-slide" alt="Sala de estar">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-05.jpg" class="image-slide" alt="Sala de estar com detalhe das portas">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-06.jpg" class="image-slide" alt="Visão lateral da sala de estar">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-07.jpg" class="image-slide" alt="Visão da sala com as portas do banheiro e do quarto abertas">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-08.jpg" class="image-slide" alt="Lavabo">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-09.jpg" class="image-slide" alt="Detalhe da torneira">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-10.jpg" class="image-slide" alt="Detalhe do lavabo">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-11.jpg" class="image-slide" alt="Entrada do quarto">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-12.jpg" class="image-slide" alt="Visão lateral do quarto">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-13.jpg" class="image-slide" alt="Visão da cama">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-14.jpg" class="image-slide" alt="Detalhe da cabeceira da cama">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-15.jpg" class="image-slide" alt="Visão da varanda">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-01.webp" class="image-slide" alt="Planta existente">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-02.webp" class="image-slide" alt="Planta de demolição">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-03.webp" class="image-slide" alt="Planta de contrução">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-04.webp" class="image-slide" alt="Corte longitudinal do projeto">
                </div>
                <button class="close-button">
                    <i class="fa-solid fa-xmark" onclick="closeLightbox()"></i>
                </button>
                <button class="prev-button" onclick="changeSlide(-1)">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="next-button" onclick="changeSlide(1)">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <!-- || Carousel Counter -->
        <div class="carousel-counter">
            <span class="current-slide">1</span><span>/</span><span class="total-slides">15</span>
        </div>
    </main>
    <!-- || Footer -->
    <footer class="foot-space">
    </footer>
</body>

</html>