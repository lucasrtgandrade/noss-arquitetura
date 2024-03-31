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
    <main class="minHeight" id="main">
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

                <div class="info-panel__header">
                    <h3 class="info-panel__header-title">Casa CR232</h3>
                    <p class="info-panel__header-p">Arquitetura e Interiores – 850m²<br>São Paulo, 2021 - Estudo Preliminar</p>
                </div>

                <div class="grupo-carrosel">
                    <div class="main-image-container">
                        <div id="image-info" class="desenhos-counter">1 / 6</div>
                        <button aria-label="Ir para imagem anterior" id="prev-image">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button aria-label="Ir para imagem seguinte" id="next-image">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                        <img class="imagem-destaque" id="main-image" onclick="openLightbox();toSlide(7)" src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-01.jpg">
                    </div>
                    <div class="galeria-de-imagens" id="galeria-de-imagens">
                        <div class="secundaria">
                            <img class="imagem-apoio active" src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-01.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-02.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-03.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-04.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-05.jpg">
                        </div>
                        <div class="secundaria">
                            <img class="imagem-apoio" src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-06.jpg">
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
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-01.jpg" class="image-slide" alt="Planta anterior ao projeto">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-02.jpg" class="image-slide" alt="Planta da área de demolição">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-03.jpg" class="image-slide" alt="Planta da área de contrução">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-04.jpg" class="image-slide" alt="Planta do layout do novo projeto">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-05.jpg" class="image-slide" alt="Planta do layout do novo projeto">
                </div>
                <div class="slide">
                    <img src="../images/casa-cr232/projeto-rainaldi-desenho-desktop-06.jpg" class="image-slide" alt="Planta do layout do novo projeto">
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
            const slideNumber = index + 7;
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