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
    <main class="minHeight">
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
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="15">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-16.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-16.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(16)" src="../images/escritorio-pg/projeto-pingoo-mobile-16.jpg"
                        alt="Visão da recepção para o escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 17 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="16">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-17.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-17.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(17)" src="../images/escritorio-pg/projeto-pingoo-mobile-17.jpg"
                        alt="Visão das mesas do escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 18 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="17">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-18.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-18.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(18)" src="../images/escritorio-pg/projeto-pingoo-mobile-18.jpg"
                        alt="Visão do escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 19 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="18">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-19.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-19.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(19)" src="../images/escritorio-pg/projeto-pingoo-mobile-19.jpg"
                        alt="Visão de uma das mesas do escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 20 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="19">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-20.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-20.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(20)" src="../images/escritorio-pg/projeto-pingoo-mobile-20.jpg"
                        alt="Visão frontal do escritório para a sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 21 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="20">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-21.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-21.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(21)" src="../images/escritorio-pg/projeto-pingoo-mobile-21.jpg"
                        alt="Visão para a sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 22 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="21">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-22.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-22.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(22)" src="../images/escritorio-pg/projeto-pingoo-mobile-22.jpg"
                        alt="Sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 23 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="22">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-23.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-23.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(23)" src="../images/escritorio-pg/projeto-pingoo-mobile-23.jpg"
                        alt="Uma pessoa trabalhando na sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 24 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="23">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-24.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-24.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(24)" src="../images/escritorio-pg/projeto-pingoo-mobile-24.jpg"
                        alt="Uma pessoa saindo da sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 25 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="24">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-25.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-25.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(25)" src="../images/escritorio-pg/projeto-pingoo-mobile-25.jpg"
                        alt="Visão do corredor ao lado da sala de reunião"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 26 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="25">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-26.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-26.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(26)" src="../images/escritorio-pg/projeto-pingoo-mobile-26.jpg"
                        alt="Visão do corredor"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 27 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="26">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-27.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-27.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(27)" src="../images/escritorio-pg/projeto-pingoo-mobile-27.jpg"
                        alt="Pessoa saindo de uma sala no final do corredor"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 28 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="27">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-28.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-28.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(28)" src="../images/escritorio-pg/projeto-pingoo-mobile-28.jpg"
                        alt="Uma pessoa usando a copa do escritório"
                        loading="lazy">
                    </picture>
                </div>
            </li>
            <!-- Projeto 29 -->
            <li class="carousel-list">
                <div class="image-container">
                    <picture data-index="28">
                        <source class="carousel-image" media="(min-width: 1000px)" srcset="../images/escritorio-pg/projeto-pingoo-desktop-29.jpg">
                        <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-tablet-29.jpg">
                        <img class="carousel-image" onclick="openLightbox();toSlide(29)" src="../images/escritorio-pg/projeto-pingoo-mobile-29.jpg"
                        alt="Duas pessoas conversando na copa"
                        loading="lazy">
                    </picture>
                </div>
            </li>
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
                <h3 class="name-project">Escritório PG</h3>
                <p class="project-text">Interiores – 250m²<br>
                                        Barueri, 2022<br>
                                        Obra Concluída</p>
                <div class="container-desenhos">
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-01.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(30)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-01.webp" alt="Planta existia anteriormente">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-02.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(31)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-02.webp" alt="Planta da área de demolição">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-03.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(32)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-03.webp" alt="Planta de construção do novo projeto">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-04.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(33)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-04.webp" alt="Planta do layout do projeto">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-05.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(34)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-05.webp" alt="Detalhe da planta de todo projeto na horizontal">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-06.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(35)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-06.webp" alt="Detalhe da planta da área de reunião">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-07.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(36)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-07.webp" alt="Detalhe da planta da área da copa">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-08.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(37)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-08.webp" alt="Detalhe da planta do banheiro">
                        </picture>
                    </div>
                    <div class="mySlides fade">
                        <picture id="desenho">
                            <source class="projeto-desenho carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-pg/projeto-pingoo-desenho-desktop-09.webp">
                            <img class="projeto-desenho carousel-image" onclick="openLightbox();toSlide(38)" src="../images/escritorio-pg/projeto-pingoo-desenho-mobile-09.webp" alt="Visão isométrica de todo o projeto">
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
                    <img src="../images/escritorio-pg/projeto-pingoo-full-16.jpg" class="image-slide" alt="Visão da recepção para o escritório">
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
                    <img src="../images/escritorio-pg/projeto-pingoo-full-20.jpg" class="image-slide" alt="Visão frontal do escritório para a sala de reunião">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-21.jpg" class="image-slide" alt="Visão para a sala de reunião">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-22.jpg" class="image-slide" alt="Sala de reunião">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-23.jpg" class="image-slide" alt="Uma pessoa trabalhando na sala de reunião">
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
                    <img src="../images/escritorio-pg/projeto-pingoo-full-27.jpg" class="image-slide" alt="Pessoa saindo de uma sala no final do corredor">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-28.jpg" class="image-slide" alt="Uma pessoa usando a copa do escritório">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-full-29.jpg" class="image-slide" alt="Duas pessoas conversando na copa">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-01.webp" class="image-slide" alt="Planta anterior ao projeto">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-02.webp" class="image-slide" alt="Planta da área de demolição">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-03.webp" class="image-slide" alt="Planta da área de contrução">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-04.webp" class="image-slide" alt="Planta do layout do novo projeto">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-05.webp" class="image-slide" alt="Detalhe lateral do projeto completo">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-06.webp" class="image-slide" alt="Detalhe da planta da área de reunião">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-07.webp" class="image-slide" alt="Detalhe da planta na área da cozinha">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-08.webp" class="image-slide" alt="Detalhe da planta na área do banheiro">
                </div>
                <div class="slide">
                    <img src="../images/escritorio-pg/projeto-pingoo-desenho-desktop-09.webp" class="image-slide" alt="Planta isométrica do projeto">
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
            <span class="current-slide">1</span><span>/</span><span class="total-slides">29</span>
        </div>
    </main>
    <!-- Footer -->
    <footer class="foot-space"></footer>
</body>

</html>