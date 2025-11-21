<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundsGood - Sons Calmantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Estilos compartilhados -->
    <link rel="stylesheet" href="/css/Atividades.css">
    <link rel="stylesheet" href="/css/StylePaginas.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold d-lg-none" href="/">
                <i class="fas fa-satellite me-2"></i>SoundsGood
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand fw-bold mx-auto d-none d-lg-block" href="/">
                    <i class="fas fa-satellite me-2"></i>SoundsGood
                </a>
                <a class="btn btn-cta btn-entrar ms-lg-auto" href="/Login">Entrar</a>
            </div>
        </div>
    </nav>

    <main class="container my-5 pt-5">
        <!-- Botão de Voltar -->
        <div class="mb-4 reveal">
            <a href="/Atividades" class="btn btn-outline-light">
                <i class="fas fa-arrow-left me-2"></i> Voltar para Atividades
            </a>
        </div>

        <header class="text-center my-5 reveal">
            <h1 class="display-4 hero-title">Sons Calmantes</h1>
            <p class="lead text-white-50 hero-subtitle">Relaxe e concentre-se com nossa coleção de sons da natureza e ambientes.</p>
        </header>

        <!-- Barra de Pesquisa e Filtros -->
        <nav class="row g-3 align-items-center mb-5 reveal">
            <div class="col-md-6">
                <form action="#" method="get" class="input-group">
                    <input type="search" class="form-control custom-input" name="q" placeholder="Pesquise o som...">
                    <button type="submit" class="btn btn-search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-3">
                <select class="form-select custom-select" aria-label="Filtro de Sons">
                    <option disabled selected>Filtrar por Ambiente</option>
                    <option value="1">Natureza</option>
                    <option value="2">Instrumental</option>
                    <option value="3">Animais</option>
                    <option value="4">Urbano</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-clear-filter w-100">Limpar Tudo</button>
            </div>
        </nav>

        <hr class="mb-5 cosmic-rift-small">

        <section class="row g-4 justify-content-center">
            <!-- Card: Chuva Leve -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1515694346937-94d85e41e622?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Gotas de chuva na janela">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Ouvir Chuva Leve"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Chuva Leve</h5>
                        <p class="card-text">O som suave da chuva para acalmar a mente e ajudar na concentração ou no sono.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Floresta Tropical -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?q=80&w=2071&auto=format&fit=crop" class="card-img-top" alt="Floresta densa com raios de sol">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Ouvir Floresta Tropical"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Floresta Tropical</h5>
                        <p class="card-text">Mergulhe nos sons vibrantes de uma floresta tropical e sinta a energia da natureza.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Ondas do Mar -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723a9ce6890?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Ondas do mar quebrando na praia">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Ouvir Ondas do Mar"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Ondas do Mar</h5>
                        <p class="card-text">Deixe as ondas do mar levarem suas preocupações e encontre um estado de paz profunda.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Flocos de Neve -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1489674267075-23642481b124?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Paisagem com neve caindo">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Ouvir Flocos de Neve"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Flocos de Neve</h5>
                        <p class="card-text">O silêncio reconfortante de uma paisagem nevada, perfeito para meditar e dormir.</p>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="aurora-container">
            <div class="aurora aurora-1"></div>
            <div class="aurora aurora-2"></div>
            <div class="aurora aurora-3"></div>
        </div>
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="footer-copyright mb-0">&copy; 2025 SoundsGood. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();
    </script>
</body>
</html>