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
    <main class="minHeight" id="main">
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
                <!-- Projeto 05 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="3">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-05.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-05.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(4)" src="../images/escritorio-bt/projeto-biotrop-mobile-05.jpg" alt="Área de lazer com plantas" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 06 -->
                <!-- Projeto 07 -->
                <!-- Projeto 08 -->
                <!-- Projeto 09 -->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="4">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-09.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-09.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(5)" src="../images/escritorio-bt/projeto-biotrop-mobile-09.jpg" alt="Escritório da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 10-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="5">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-10.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-10.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(6)" src="../images/escritorio-bt/projeto-biotrop-mobile-10.jpg" alt="Escritório da Biotrop" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 11-->
                <!-- Projeto 12-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="6">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-12.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-12.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(7)" src="../images/escritorio-bt/projeto-biotrop-mobile-12.jpg" alt="Sala particular para executivos" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 13-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="7">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-13.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-13.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(8)" src="../images/escritorio-bt/projeto-biotrop-mobile-13.jpg" alt="Sala de reunião" loading="lazy">
                        </picture>
                    </div>
                </li>
                <!-- Projeto 14-->
                <!-- Projeto 15-->
                <li class="carousel-list">
                    <div class="image-container">
                        <picture data-index="8">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/escritorio-bt/projeto-biotrop-desktop-15.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/escritorio-bt/projeto-biotrop-tablet-15.jpg">
                            <img class="carousel-image" onclick="openLightbox();toSlide(9)" src="../images/escritorio-bt/projeto-biotrop-mobile-15.jpg" alt="Visão da fachada do escritório da Biotrop" loading="lazy">
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
                <div class="info-panel__header">
                    <h3 class="info-panel__header-title">Escritório BT</h3>
                    <p class="info-panel__header-p">Interiores e Fachada – 822m²<br>Vinhedo, 2022 - Obra Concluída</p>
                </div>

                <div class="grupo-carrosel">
                    <div class="main-image-container">
                        <div id="image-info" class="desenhos-counter">1 / 2</div>
                        <button aria-label="Ir para imagem anterior" id="prev-image">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button aria-label="Ir para imagem seguinte" id="next-image">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <img class="imagem-destaque" id="main-image" onclick="openLightbox();toSlide(10)" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-01.jpg">
                    </div>
                    <div class="galeria-de-imagens" id="galeria-de-imagens">
                        <div class="secundaria">
                            <img class="imagem-apoio active" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-01.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-02.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-03.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-04.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-05.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-06.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-07.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-08.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-09.jpg">
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
                        <img src="../images/escritorio-bt/projeto-biotrop-full-01.jpg" class="image-slide" alt="Recepção" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-02.jpg" class="image-slide" alt="Área de lazer com plantas" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-03.jpg" class="image-slide" alt="Área de lazer com televisão e canteiro com plantas" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-05.jpg" class="image-slide" alt="Área de lazer com plantas" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-09.jpg" class="image-slide" alt="Escritório da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-10.jpg" class="image-slide" alt="Escritório da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-12.jpg" class="image-slide" alt="Sala particular para executivos" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-13.jpg" class="image-slide" alt="Sala de reunião" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-full-15.jpg" class="image-slide" alt="Visão da fachada do escritório da Biotrop" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-01.jpg" class="image-slide" alt="Planta térreo anterior ao projeto" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-02.jpg" class="image-slide" alt="Planta do primeiro pavimento que existia anteriormente" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-03.jpg" class="image-slide" alt="Planta do segundo pavimento que existia anteriormente" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-04.jpg" class="image-slide" alt="DEMOLIÇÃO-CONSTRUÇÃO Térreo" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-05.jpg" class="image-slide" alt="DEMOLIÇÃO-CONSTRUÇÃO PAV. 1" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-06.jpg" class="image-slide" alt="DEMOLIÇÃO-CONSTRUÇÃO PAV. 2" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-07.jpg" class="image-slide" alt="Layout Térreo" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-08.jpg" class="image-slide" alt="Layout Pavimento Um" loading="lazy">
                    </div>
                    <div class="slide">
                        <img src="../images/escritorio-bt/projeto-biotrop-desenho-desktop-09.jpg" class="image-slide" alt="Layout Pavimento Dois" loading="lazy">
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
                <span class="current-slide">1</span><span>/</span><span class="total-slides">9</span>
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
            const slideNumber = index + 10;
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