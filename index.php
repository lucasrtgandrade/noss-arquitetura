<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- || Basics -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Somos um escritório que visualiza o espaço de maneira integrada e propõe soluções que consideram a Arquitetura por sua urbanidade, por suas possibilidades e vocações espaciais e por sua ambiência interna, transitando entre as disciplinas de Arquitetura, Interiores e Design.">
    <meta name="author" content="Lucas Reategui, Renan Sampaio, Marina Menossi, Noss Arquitetura">
    <!-- Type -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- || FavIcons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- || Stylesheets -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- || Scripts -->
    <script src="js/nav.js" defer></script>
    <!-- <script src="js/full-height.js"></script> -->
    <script src="js/carousel-home.js" defer></script>
    <title>Noss Arquitetura</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <header class="header" id="header">
        <div class="main-header header-style">
            <div class="empty"></div>
            <div class="hamburger-resize">
                <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                </button>
            </div>
            <div class="main-logo">
                <a class="main-logo" href="index.php">NOSS</a>
            </div>
            <div class="main-icons">
                <a href="https://www.instagram.com/nossarquitetura/" target="_blank" 
                aria-label="Entre no instagram da NOSS e conheça mais projetos">
                    <i class="fa-brands fa-instagram main-instagram"></i>
                </a>
                <a href="https://wa.me/5511957848872" target="_blank"><i class="fa-brands fa-whatsapp main-whatsapp" 
                aria-label="Entre em contato pelo WhatsApp"></i></a>
            </div>
        </div>
        <nav id="primary-navigation" class="primary-navigation" data-visible="false">
            <div class="mobile-empty"></div>
            <ul class="main-navigation nobullets">
                <li><a class="nav-links-color" href="index.php">Home</a></li>
                <li><a class="nav-links-color" href="paginas/sobre.php">Sobre</a></li>
                <li><a class="nav-links-color" href="paginas/projetos.php">Projetos</a></li>
                <li><a class="nav-links-color" href="paginas/contato.php">Contato</a></li>
            </ul>
            <div class="mobile-info">
                <div class="mobile-logo">NOSS</div>
                <div class="mobile-icons">
                    <a href="https://www.instagram.com/nossarquitetura/" target="_blank" aria-label="Entre no instagram da NOSS e conheça mais projetos">
                        <i class="fa-brands fa-instagram mobile-instagram"></i>
                    </a>
                    <a href="https://wa.me/5511957848872" target="_blank"><i class="fa-brands fa-whatsapp mobile-whatsapp" 
                    aria-label="Entre em contato pelo WhatsApp"></i></a>
                </div>
                <address class="bottom-space">
                    Rua Marquês de Itu, 837 cj.63 <br>
                    Vila Buarque - São Paulo - SP
                </address>
            </div>
            </div>
        </nav>
    </header>
    <!-- || Main Content -->
    <main class="minHeight main" id="main">
        <!-- Carousel -->
        <ul class="carousel nobullets">
            <!-- Projeto 01 -->
            <li class="carousel-list">
                <a href="paginas/escritorio-pg.php">
                    <div class="image-container">
                        <picture data-index="0">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/escritorio-pg/projeto-pingoo-desktop-12.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/escritorio-pg/projeto-pingoo-tablet-12.jpg">
                            <img class="carousel-image" src="images/escritorio-pg/projeto-pingoo-mobile-12.jpg" alt="VIsão da recepção do escritório Pingo">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Escritório PG</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                    </div>
                </a>
            </li>
            <!-- Projeto 02 -->
            <li class="carousel-list">
                <a href="paginas/apartamento-pm93.php">
                    <div class="image-container">
                        <picture data-index="1">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/apartamento-pm93/projeto-west-side-desktop-05.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/apartamento-pm93/projeto-west-side-tablet-05.jpg">
                            <img class="carousel-image" src="images/apartamento-pm93/projeto-west-side-mobile-05.jpg" alt="Sala de estar do apartamento West Side">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Apartamento PM93</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
            <!-- Projeto 03 -->
            <li class="carousel-list">
                <a href="paginas/escritorio-bt.php">
                    <div class="image-container">
                        <picture data-index="2">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/escritorio-bt/projeto-biotrop-desktop-03.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/escritorio-bt/projeto-biotrop-tablet-03.jpg">
                            <img class="carousel-image" src="images/escritorio-bt/projeto-biotrop-mobile-03.jpg" alt="Visão do escitório da Biotrop">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Escritório BT</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
            <!-- Projeto 04 -->
            <li class="carousel-list">
                <a href="paginas/studio-af414.php">
                    <div class="image-container">
                        <picture data-index="3">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/studio-af414/projeto-republica-desktop-05.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/studio-af414/projeto-republica-tablet-05.jpg">
                            <img class="carousel-image" src="images/studio-af414/projeto-republica-mobile-05.jpg" 
                            alt="Visão do sala e cozinha do apartamento da República">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Studio AF414</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
            <!-- Projeto 05 -->
            <li class="carousel-list">
                <a href="paginas/apartamento-az8c.php">
                    <div class="image-container">
                        <picture data-index="4">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/apartamento-az8c/projeto-moema-desktop-01.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/apartamento-az8c/projeto-moema-tablet-01.jpg">
                            <img class="carousel-image" src="images/apartamento-az8c/projeto-moema-mobile-01.jpg" 
                            alt="Visão frontal da mesa de jantar">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Apartamento AZ8C</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
            <!-- Projeto 06 -->
            <li class="carousel-list">
                <a href="paginas/casa-cr232.php">
                    <div class="image-container">
                        <picture data-index="4">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/casa-cr232/projeto-rainaldi-desktop-02.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/casa-cr232/projeto-rainaldi-tablet-02.jpg">
                            <img class="carousel-image" src="images/casa-cr232/projeto-rainaldi-mobile-02.jpg" 
                            alt="Visão frontal da mesa de jantar">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Casa CR232</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <!-- || Next and previous button -->
        <div class="nav-carousel">
            <button aria-label="Ir para imagem anterior" class="prev-button-main">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button aria-label="Ir para imagem seguinte" class="next-button-main">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <!-- || Carousel navigation dots -->
        <div class="carousel-counter">
            <span class="current-slide">1</span><span>/</span><span class="total-slides">6</span>
        </div>
    </main>
    <!-- Footer -->
    <footer id="footer">
    </footer>
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

    </script>
</body>

</html>