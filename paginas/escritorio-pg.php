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
    <title>Escritório PG</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <?php include "../templates/navigation.php" ?>
    <!-- Main -->
    <main class="minHeight" id="main">
        <!-- Carousel -->
        <ul class="carousel nobullets">
            <!-- Projeto 01 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="0">
                        <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-01.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-01.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(1)" src="../images/escritorio-pg/projeto-pingoo-mobile-01.jpg"
                        alt="Entrada do Escritório Pingoo"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 02 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="1">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-02.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-02.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(2)" src="../images/escritorio-pg/projeto-pingoo-mobile-02.jpg"
                        alt="Detalhe da placa do escritório Pingoo"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 03 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="2">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-03.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-03.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(3)" src="../images/escritorio-pg/projeto-pingoo-mobile-03.jpg"
                        alt="Mural exibindo os produtos da Pingoo"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 04 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="3">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-04.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-04.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(4)" src="../images/escritorio-pg/projeto-pingoo-mobile-04.jpg"
                        alt="Detalhe do mural"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 05 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="4">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-05.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-05.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(5)" src="../images/escritorio-pg/projeto-pingoo-mobile-05.jpg"
                        alt="Mural exibindo os produtos da Pingoo"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 06 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="5">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-06.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-06.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(6)" src="../images/escritorio-pg/projeto-pingoo-mobile-06.jpg"
                        alt="Visão frontal do mural com os produtos da Pingoo"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 07 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="6">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-07.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-07.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(7)" src="../images/escritorio-pg/projeto-pingoo-mobile-07.jpg"
                        alt="Visão frontal do banheiro"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 08 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="7">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-08.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-08.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(8)" src="../images/escritorio-pg/projeto-pingoo-mobile-08.jpg"
                        alt="Visão frontal do banheiro"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 09 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="8">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-09.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-09.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(9)" src="../images/escritorio-pg/projeto-pingoo-mobile-09.jpg"
                        alt="Visão do lavabo"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 10 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="9">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-10.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-10.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(10)" src="../images/escritorio-pg/projeto-pingoo-mobile-10.jpg"
                        alt="Visão de outro banheiro"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 11 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="10">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-11.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-11.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(11)" src="../images/escritorio-pg/projeto-pingoo-mobile-11.jpg"
                        alt="Visão da louça do banheiro"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 12 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="11">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-12.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-12.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(12)" src="../images/escritorio-pg/projeto-pingoo-mobile-12.jpg"
                        alt="Visão da recepção"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 13 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="12">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-13.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-13.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(13)" src="../images/escritorio-pg/projeto-pingoo-mobile-13.jpg"
                        alt="Visão da recepção"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 14 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="13">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-14.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-14.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(14)" src="../images/escritorio-pg/projeto-pingoo-mobile-14.jpg"
                        alt="Detalhe de uma das cadeiras de coura na recepção"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 15 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="14">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-15.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-15.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(15)" src="../images/escritorio-pg/projeto-pingoo-mobile-15.jpg"
                        alt="Detalhe de outra cadeira na recepção"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 16 -->
            <!-- Projeto 17 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="15">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-17.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-17.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(16)" src="../images/escritorio-pg/projeto-pingoo-mobile-17.jpg"
                        alt="Visão das mesas do escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 18 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="16">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-18.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-18.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(17)" src="../images/escritorio-pg/projeto-pingoo-mobile-18.jpg"
                        alt="Visão do escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 19 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="17">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-19.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-19.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(18)" src="../images/escritorio-pg/projeto-pingoo-mobile-19.jpg"
                        alt="Visão de uma das mesas do escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 20 -->
            <!-- Projeto 21 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="18">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-21.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-21.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(19)" src="../images/escritorio-pg/projeto-pingoo-mobile-21.jpg"
                        alt="Visão para a sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 22 -->
            <!-- Projeto 23 -->
            <!-- Projeto 24 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="19">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-24.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-24.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(20)" src="../images/escritorio-pg/projeto-pingoo-mobile-24.jpg"
                        alt="Uma pessoa saindo da sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 25 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="20">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-25.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-25.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(21)" src="../images/escritorio-pg/projeto-pingoo-mobile-25.jpg"
                        alt="Visão do corredor ao lado da sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 26 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="21">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-26.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-26.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(22)" src="../images/escritorio-pg/projeto-pingoo-mobile-26.jpg"
                        alt="Visão do corredor"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 27 -->
            <!-- Projeto 28 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="22">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-28.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-28.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(23)" src="../images/escritorio-pg/projeto-pingoo-mobile-28.jpg"
                        alt="Uma pessoa usando a copa do escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 29 -->
        </ul>
        <!-- || Project Title -->
        <div class="project-title">
            <div class="project-name">
                <h3 class="project-header">Escritório PG</h3>
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
                <div class="info-panel__header">
                    <h3 class="info-panel__header-title">Escritório PG</h3>
                    <p class="info-panel__header-p">Interiores – 250m² <br>Barueri, 2022 - Obra Concluída</p>
                </div>
                <div class="grupo-carrosel">
                    <div class="main-image-container">
                        <div id="image-info" class="desenhos-counter">1 / 11</div>
                        <button aria-label="Ir para imagem anterior" id="prev-image">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button aria-label="Ir para imagem seguinte" id="next-image">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <img class="imagem-destaque" id="main-image" onclick="openLightbox();toSlide(24)" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-01.jpg">
                    </div>
                    <div class="galeria-de-imagens" id="galeria-de-imagens">
                        <div class="secundaria">
                            <img class="imagem-apoio active" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-01.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-02.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-03.jpg">
                            </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-04.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-05.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-06.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-07.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio"  src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-08.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio"  src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-09.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-10.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-11.jpg">
                        </div>
                        
                    </div>
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
                    <img src="../images/escritorio-pg/projeto-pingoo-full-01.jpg" class="image-slide" alt="Entrada do Escritório Pingoo">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-02.jpg" class="image-slide" alt="Detalhe da placa do escritório Pingoo">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-03.jpg" class="image-slide" alt="Mural exibindo os produtos da Pingoo">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-04.jpg" class="image-slide" alt="Detalhe do mural">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-05.jpg" class="image-slide" alt="Mural exibindo os produtos da Pingoo">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-06.jpg" class="image-slide" alt="Visão frontal do mural com os produtos da Pingoo">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-07.jpg" class="image-slide" alt="Visão frontal do banheiro">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-08.jpg" class="image-slide" alt="Visão frontal do banheiro">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-09.jpg" class="image-slide" alt="Visão do lavabo">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-10.jpg" class="image-slide" alt="Visão de outro banheiro">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-11.jpg" class="image-slide" alt="Visão da louça do banheiro">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-12.jpg" class="image-slide" alt="Visão da recepção">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-13.jpg" class="image-slide" alt="Visão da recepção">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-14.jpg" class="image-slide" alt="Detalhe de uma das cadeiras de coura na recepção">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-15.jpg" class="image-slide" alt="Detalhe de outra cadeira na recepção">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-17.jpg" class="image-slide" alt="Visão das mesas do escritório">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-18.jpg" class="image-slide" alt="Visão do escritório">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-19.jpg" class="image-slide" alt="Visão de uma das mesas do escritório">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-21.jpg" class="image-slide" alt="Visão para a sala de reunião">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-24.jpg" class="image-slide" alt="Uma pessoa saindo da sala de reunião">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-25.jpg" class="image-slide" alt="Visão do corredor ao lado da sala de reunião">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-26.jpg" class="image-slide" alt="Visão do corredor">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-28.jpg" class="image-slide" alt="Uma pessoa usando a copa do escritório">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-01.jpg" class="image-slide" alt="Planta anterior ao projeto">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-02.jpg" class="image-slide" alt="Planta da área de demolição">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-03.jpg" class="image-slide" alt="Planta da área de contrução">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-04.jpg" class="image-slide" alt="Planta do layout do novo projeto">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-05.jpg" class="image-slide" alt="Detalhe lateral do projeto completo">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-06.jpg" class="image-slide" alt="Detalhe da planta da área de reunião">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-07.jpg" class="image-slide" alt="Detalhe da planta na área da cozinha">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-08.jpg" class="image-slide" alt="Detalhe da planta na área do banheiro">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-09.jpg" class="image-slide" alt="Planta isométrica do projeto">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-10.jpg" class="image-slide" alt="Planta isométrica do projeto">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-11.jpg" class="image-slide" alt="Planta isométrica do projeto">
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
            <span class="current-slide">1</span><span>/</span><span class="total-slides">23</span>
        </div>
    </main>
    <!-- Footer -->
    <footer id="footer"></footer>
            <!-- SCRIPT -->
            <script>
    function adjustMainContentHeight() {
        var headerHeight = document.getElementById('header').offsetHeight;
        var footerHeight = document.getElementById('footer').offsetHeight;
        var viewportHeight = window.innerHeight;
        var mainContentHeight = viewportHeight - headerHeight - footerHeight;

        document.getElementById('main').style.height = mainContentHeight + 'px';
    }

    // Adjust the height when the page loads
    window.onload = adjustMainContentHeight;

    // Adjust the height whenever the window is resized
    window.onresize = adjustMainContentHeight;


    // IMAGENS PARA O DESENHO 

    let imagesDesenhos = document.querySelectorAll('.galeria-de-imagens .secundaria img');
    const galeria = document.getElementById('galeria-de-imagens');
    let estaArrastando = false;
    let posInicial = 0;
    let scrollLeftStart = 0;

    galeria.addEventListener('mousedown', (event) => {
        estaArrastando = true;
        posInicial = event.pageX - galeria.offsetLeft;
        scrollLeftStart = galeria.scrollLeft;
        galeria.style.cursor = 'grabbing';
    });

    galeria.addEventListener('mouseleave', () => {
        estaArrastando = false;
        galeria.style.cursor = 'grab';
    });

    galeria.addEventListener('mouseup', () => {
        estaArrastando = false;
        galeria.style.cursor = 'grab';
    });

    galeria.addEventListener('mousemove', (event) => {
        if (!estaArrastando) return;
        event.preventDefault();
        const x = event.pageX - galeria.offsetLeft;
        const walk = (x - posInicial) * 2;
        galeria.scrollLeft = scrollLeftStart - walk;
    });

    document.querySelectorAll('.galeria-de-imagens img').forEach(img => {
        img.addEventListener('dragstart', (event) => {
            event.preventDefault();
        });
    });

    function scrollThumbnailIntoView(index) {
        const gallery = document.getElementById('galeria-de-imagens');
        const thumbnails = document.querySelectorAll('.galeria-de-imagens .secundaria');
        if (thumbnails.length > index) {
            const selectedThumbnail = thumbnails[index];

            const galleryRect = gallery.getBoundingClientRect();
            const thumbnailRect = selectedThumbnail.getBoundingClientRect();

            if (thumbnailRect.left < galleryRect.left) {
                gallery.scrollLeft -= galleryRect.left - thumbnailRect.left;
            } else if (thumbnailRect.right > galleryRect.right) {
                gallery.scrollLeft += thumbnailRect.right - galleryRect.right;
            }
        }
    }

    function setMainImage(index) {

        const mainImage = document.getElementById('main-image');
        if (imagesDesenhos.length > index) { // Check if the index is within bounds
            mainImage.src = imagesDesenhos[index].src;
            mainImage.alt = imagesDesenhos[index].alt;

            // Adjust the starting slide number here by adding 10 to the index
            const slideNumber = index + 24;
            mainImage.setAttribute('onclick', `openLightbox();toSlide(${slideNumber})`);

            const imageInfo = document.getElementById('image-info');
            imageInfo.textContent = `${index + 1} / ${imagesDesenhos.length}`;

            document.querySelectorAll('.galeria-de-imagens .secundaria').forEach((container, idx) => {
                if (idx === index) {
                    container.classList.add('active');
                } else {
                    container.classList.remove('active');
                }
            });

            scrollThumbnailIntoView(index);
        }
    }


    const previousButton = document.getElementById('prev-image');
    const nextButtonProx = document.getElementById('next-image');
    let currentValor = 0;

    previousButton.addEventListener('click', () => {
        currentValor = (currentValor - 1 + imagesDesenhos.length) % imagesDesenhos.length;
        setMainImage(currentValor);
    });

    nextButtonProx.addEventListener('click', () => {
        currentValor = (currentValor + 1) % imagesDesenhos.length;
        setMainImage(currentValor);
    });

    document.querySelectorAll('.galeria-de-imagens .secundaria img').forEach((item, index) => {
        item.addEventListener('click', () => {
            currentValor = index;
            setMainImage(currentValor);
        });
    });

    setMainImage(currentValor);

    </script>
</body>

</html>