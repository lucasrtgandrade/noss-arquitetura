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
    <title>Escritório BT</title>
</head>
<body>
    <!-- || Navigation Menu -->
    <?php include "../templates/navigation.php" ?>
    <main class="minHeight">
        <!-- Carousel -->
            <ul class="carousel nobullets">
                <!-- Projeto 01 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="0">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-01.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-01.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(1)" src="../images/escritorio-bt/projeto-biotrop-mobile-01.jpg" alt="Recepção" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 02 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="1">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-02.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-02.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(2)" src="../images/escritorio-bt/projeto-biotrop-mobile-02.jpg" alt="Área de lazer com plantas" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 03 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="2">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-03.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-03.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(3)" src="../images/escritorio-bt/projeto-biotrop-mobile-03.jpg" alt="Área de lazer com televisão e canteiro com plantas" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 04 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="3">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-04.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-04.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(4)" src="../images/escritorio-bt/projeto-biotrop-mobile-04.jpg" alt="Área de lazer com plantas" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 05 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="4">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-05.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-05.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(5)" src="../images/escritorio-bt/projeto-biotrop-mobile-05.jpg" alt="Área de lazer com plantas" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 06 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="5">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-06.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-06.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(6)" src="../images/escritorio-bt/projeto-biotrop-mobile-06.jpg" alt="Recepção da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 07 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="6">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-07.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-07.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(7)" src="../images/escritorio-bt/projeto-biotrop-mobile-07.jpg" alt="Recepção da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 08 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="7">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-08.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-08.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(8)" src="../images/escritorio-bt/projeto-biotrop-mobile-08.jpg" alt="Escritório da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 09 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="8">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-09.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-09.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(9)" src="../images/escritorio-bt/projeto-biotrop-mobile-09.jpg" alt="Escritório da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 10-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="9">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-10.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-10.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(10)" src="../images/escritorio-bt/projeto-biotrop-mobile-10.jpg" alt="Escritório da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 11-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="10">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-11.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-11.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(11)" src="../images/escritorio-bt/projeto-biotrop-mobile-11.jpg" alt="Sala particular para executivos" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 12-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="11">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-12.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-12.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(12)" src="../images/escritorio-bt/projeto-biotrop-mobile-12.jpg" alt="Sala particular para executivos" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 13-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="12">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-13.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-13.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(13)" src="../images/escritorio-bt/projeto-biotrop-mobile-13.jpg" alt="Sala de reunião" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 14-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="13">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-14.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-14.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(14)" src="../images/escritorio-bt/projeto-biotrop-mobile-14.jpg" alt="Detalhe da janela da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 15-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="14">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-15.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-15.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(15)" src="../images/escritorio-bt/projeto-biotrop-mobile-15.jpg" alt="Visão da fachada do escritório da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>     
            </ul>
            <!-- || Project Title -->
            <div class="project-title">
                <div class="project-name">
                    <h3 class="project-header">Escritório BT</h3>
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
                    <h3 class="name-project">Escritório BT</h3>
                    <p class="project-text">Interiores e Fachada – 822m²<br>
                                            Vinhedo, 2022<br>
                                            Obra Concluída</p>
                    <div class="container-desenhos">
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-01.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(16)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-01.webp" alt="Planta do térreo que existia anteriormente">
                            </picture>
                        </div>
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-02.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(17)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-02.webp" alt="Planta do primeiro pavimento que existia anteriormente">
                            </picture>
                        </div>
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-03.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(18)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-03.webp" alt="Planta do segundo pavimento que existia anteriormente">
                            </picture>
                        </div>
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-04.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(19)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-04.webp" alt="DEMOLIÇÃO-CONSTRUÇÃO PAV. TÉRREO">
                            </picture>
                        </div>
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-05.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(20)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-05.webp" alt="DEMOLIÇÃO-CONSTRUÇÃO PAV. 1">
                            </picture>
                        </div>
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-06.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(21)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-06.webp" alt="DEMOLIÇÃO-CONSTRUÇÃO PAV. 2">
                            </picture>
                        </div>
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-07.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(22)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-07.webp" alt="LAYOUT PAV. TÉRREO">
                            </picture>
                        </div>
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-08.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(23)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-08.webp" alt="LAYOUT PAV. 1">
                            </picture>
                        </div>
                        <div class="mySlides fade">
                            <picture id="desenho">
                                <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-desenho-desktop-09.webp">
                                <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(24)" src="../images/escritorio-bt/projeto-biotrop-desenho-mobile-09.webp" alt="Layout Pavimento Dois">
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
                        <img src="../images/escritorio-bt/projeto-biotrop-full-01.jpg" class="image-slide" alt="Recepção" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-02.jpg" class="image-slide" alt="Área de lazer com plantas" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-03.jpg" class="image-slide" alt="Área de lazer com televisão e canteiro com plantas" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-04.jpg" class="image-slide" alt="Área de lazer com plantas" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-05.jpg" class="image-slide" alt="Área de lazer com plantas" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-06.jpg" class="image-slide" alt="Recepção da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-07.jpg" class="image-slide" alt="Recepção da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-08.jpg" class="image-slide" alt="Escritório da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-09.jpg" class="image-slide" alt="Escritório da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-10.jpg" class="image-slide" alt="Escritório da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-11.jpg" class="image-slide" alt="Sala particular para executivos" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-12.jpg" class="image-slide" alt="Sala particular para executivos" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-13.jpg" class="image-slide" alt="Sala de reunião" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-14.jpg" class="image-slide" alt="Detalhe da janela da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-15.jpg" class="image-slide" alt="Visão da fachada do escritório da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-01.webp" class="image-slide" alt="Planta térreo anterior ao projeto" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-02.webp" class="image-slide" alt="Planta do primeiro pavimento que existia anteriormente" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-03.webp" class="image-slide" alt="Planta do segundo pavimento que existia anteriormente" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-04.webp" class="image-slide" alt="DEMOLIÇÃO-CONSTRUÇÃO Térreo" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-05.webp" class="image-slide" alt="DEMOLIÇÃO-CONSTRUÇÃO PAV. 1" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-06.webp" class="image-slide" alt="DEMOLIÇÃO-CONSTRUÇÃO PAV. 2" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-07.webp" class="image-slide" alt="Layout Térreo" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-08.webp" class="image-slide" alt="Layout Pavimento Um" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-09.webp" class="image-slide" alt="Layout Pavimento Dois" loading="lazy">
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
                <span class="current-slide">1</span><span>/</span><span class="total-slides">15</span>
            </div>
    </main>
    <!-- Footer -->
    <footer class="foot-space"></footer>
</body>
</html>