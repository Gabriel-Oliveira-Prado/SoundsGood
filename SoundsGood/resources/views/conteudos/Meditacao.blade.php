<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundsGood - Meditação</title>
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
            <h1 class="display-4 hero-title">Sessões de Meditação</h1>
            <p class="lead text-white-50 hero-subtitle">Encontre clareza, calma e equilíbrio com nossas meditações guiadas.</p>
        </header>

        <!-- Barra de Pesquisa e Filtros -->
        <nav class="row g-3 align-items-center mb-5 reveal">
            <div class="col-md-6">
                <form action="#" method="get" class="input-group">
                    <input type="search" class="form-control custom-input" name="q" placeholder="Pesquise a meditação...">
                    <button type="submit" class="btn btn-search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-3">
                <select class="form-select custom-select" aria-label="Filtro de Meditações">
                    <option disabled selected>Filtrar por Duração</option>
                    <option value="1">5 minutos</option>
                    <option value="2">10 minutos</option>
                    <option value="3">15 minutos</option>
                    <option value="4">20+ minutos</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-clear-filter w-100">Limpar Tudo</button>
            </div>
        </nav>

        <hr class="mb-5 cosmic-rift-small">

        <section class="row g-4 justify-content-center">
            <!-- Card: Meditação Guiada -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1506126613408-4e652a27b2de?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Pessoa meditando em um ambiente sereno">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Meditação Guiada"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Meditação Guiada</h5>
                        <p class="card-text">Deixe nossa narração suave te conduzir a um estado de relaxamento profundo e atenção plena.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Controle seu corpo e alma -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1532094206412-4b14a4d3353c?q=80&w=1974&auto=format&fit=crop" class="card-img-top" alt="Silhueta de pessoa com fundo cósmico">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Controle seu corpo e alma"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Controle seu corpo e alma</h5>
                        <p class="card-text">Uma jornada para conectar-se com seu eu interior, equilibrando mente, corpo e espírito.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Aprenda a meditar -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1601779143932-090324b8a45b?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Pessoa sentada em posição de lótus, aprendendo">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Aprenda a meditar"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Aprenda a Meditar</h5>
                        <p class="card-text">Sessões para iniciantes, ensinando os fundamentos da meditação e da atenção plena.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Mantenha a calma em 3 passos -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1597938435279-29c3b943e235?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Pedras empilhadas em equilíbrio">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Mantenha a calma em 3 passos"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Mantenha a Calma em 3 Passos</h5>
                        <p class="card-text">Uma meditação rápida e eficaz para momentos de estresse, restaurando a tranquilidade rapidamente.</p>
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