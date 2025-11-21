<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundsGood - Técnicas de Respiração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Estilos base compartilhados -->
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
            <h1 class="display-4 hero-title">Técnicas de Respiração</h1>
            <p class="lead text-white-50 hero-subtitle">Escolha uma técnica abaixo para começar a sua prática de relaxamento e foco.</p>
        </header>

        <!-- Barra de Pesquisa e Filtros -->
        <nav class="row g-3 align-items-center mb-5 reveal">
            <div class="col-md-6">
                <form action="#" method="get" class="input-group">
                    <input type="search" class="form-control custom-input" name="q" placeholder="Pesquise a técnica...">
                    <button type="submit" class="btn btn-search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-3">
                <select class="form-select custom-select" aria-label="Filtro de Atividades">
                    <option disabled selected>Filtrar por Objetivo</option>
                    <option value="1">Relaxamento</option>
                    <option value="2">Foco</option>
                    <option value="3">Energia</option>
                    <option value="4">Sono</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-clear-filter w-100">Limpar Tudo</button>
            </div>
        </nav>

        <hr class="mb-5 cosmic-rift-small">

        <section class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1529334972162-914180a36279?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Pessoa relaxando na cama">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Técnica 4-7-8"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Técnica 4-7-8</h5>
                        <p class="card-text">Uma técnica rítmica e simples para acalmar profundamente a mente e o corpo, ideal para combater a insônia.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1618423691270-0c6a87a63639?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Pessoa com a mão na barriga respirando">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Respiração Diafragmática"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Respiração Diafragmática</h5>
                        <p class="card-text">Fortaleça seu diafragma e melhore a eficiência da sua respiração para um relaxamento profundo e redução do estresse.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1597969984294-3f7a1f7c1b32?q=80&w=1974&auto=format&fit=crop" class="card-img-top" alt="Mulher praticando pranayama">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Respiração Alternada Nasal"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Respiração Alternada Nasal</h5>
                        <p class="card-text">Equilibre seus hemisférios cerebrais e acalme o sistema nervoso com esta poderosa prática de pranayama (Nadi Shodhana).</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1591343395399-e835a39d136d?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Formas geométricas simbolizando foco">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Respiração Quadrada"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Respiração Quadrada</h5>
                        <p class="card-text">Uma técnica usada por atletas e militares para controlar o estresse, aumentar a concentração e melhorar o foco mental.</p>
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