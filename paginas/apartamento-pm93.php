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
    <link rel="stylesheet" href="../css/styles.css">
    <!-- || Scripts -->
    <script src="../js/carousel-home.js" defer></script>
    <script src="../js/nav.js" defer></script>
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
    <main class="minHeight" id="main">
        <!-- || Carousel images -->
        <ul class="carousel nobullets">
            <li class="carousel-list">
                <!-- || Imagem 02 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-02.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-02.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(1)" src="../images/apartamento-pm93/projeto-west-side-mobile-02.jpg" alt="Área da cozinha">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 03 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-03.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-03.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(2)" src="../images/apartamento-pm93/projeto-west-side-mobile-03.jpg" alt="Detalhe da mesa de jantar">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 05 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-05.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-05.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(3)" src="../images/apartamento-pm93/projeto-west-side-mobile-05.jpg" alt="Sala de estar com detalhe das portas">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 07 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-07.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-07.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(4)" src="../images/apartamento-pm93/projeto-west-side-mobile-07.jpg" alt="Visão da sala com as portas do banheiro e do quarto abertas">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 08 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-08.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-08.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(5)" src="../images/apartamento-pm93/projeto-west-side-mobile-08.jpg" alt="Visão da sala com as portas do banheiro e do quarto abertas">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 09 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-09.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-09.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(6)" src="../images/apartamento-pm93/projeto-west-side-mobile-09.jpg" alt="Lavabo">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 11 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-11.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-11.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(7)" src="../images/apartamento-pm93/projeto-west-side-mobile-11.jpg" alt="Detalhe do lavabo">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 13 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-13.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-13.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(8)" src="../images/apartamento-pm93/projeto-west-side-mobile-13.jpg" alt="Visão lateral do quarto">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 15 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/apartamento-pm93/projeto-west-side-desktop-15.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/apartamento-pm93/projeto-west-side-tablet-15.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(9)" src="../images/apartamento-pm93/projeto-west-side-mobile-15.jpg" alt="Visão da varanda">
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
                <div class="info-panel__header">
                    <h3 class="info-panel__header-title">Apartamento PM93</h3>
                    <p class="info-panel__header-p">Interiores – 66m² <br>São Paulo, 2021 - Obra Concluída</p>
                </div>


                <div class="grupo-carrosel">
                    <div class="main-image-container">
                        <div id="image-info" class="desenhos-counter">1 / 4</div>
                        <button aria-label="Ir para imagem anterior" id="prev-image">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button aria-label="Ir para imagem seguinte" id="next-image">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <img class="imagem-destaque" id="main-image" onclick="openLightbox();toSlide(10)" src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-01.jpg">
                    </div>
                    <div class="galeria-de-imagens" id="galeria-de-imagens">
                        <div class="secundaria">
                            <img class="imagem-apoio active" src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-01.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-02.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-03.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-04.jpg">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- || Lightbox -->
        <div id="Lightbox" class="modal">
            <div class="modal-content">
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-02.jpg" class="image-slide" alt="Área da cozinha">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-03.jpg" class="image-slide" alt="Detalhe da mesa de jantar">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-05.jpg" class="image-slide" alt="Sala de estar com detalhe das portas">
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
                    <img src="../images/apartamento-pm93/projeto-west-side-full-11.jpg" class="image-slide" alt="Entrada do quarto">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-13.jpg" class="image-slide" alt="Visão da cama">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-full-15.jpg" class="image-slide" alt="Visão da varanda">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-01.jpg" class="image-slide" alt="Planta existente">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-02.jpg" class="image-slide" alt="Planta de demolição">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-03.jpg" class="image-slide" alt="Planta de contrução">
                </div>
                <div class="slide">
                    <img src="../images/apartamento-pm93/projeto-west-side-desenho-desktop-04.jpg" class="image-slide" alt="Corte longitudinal do projeto">
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
            <span class="current-slide">1</span><span>/</span><span class="total-slides">9</span>
        </div>
    </main>
    <!-- || Footer -->
    <footer id="footer">
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
    </footer>
</body>

</html>