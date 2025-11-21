<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundsGood - Alongamento</title>
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
            <h1 class="display-4 hero-title">Sessões de Alongamento</h1>
            <p class="lead text-white-50 hero-subtitle">Melhore sua flexibilidade, alivie tensões e prepare seu corpo para o dia.</p>
        </header>

        <!-- Barra de Pesquisa e Filtros -->
        <nav class="row g-3 align-items-center mb-5 reveal">
            <div class="col-md-6">
                <form action="#" method="get" class="input-group">
                    <input type="search" class="form-control custom-input" name="q" placeholder="Pesquise o alongamento...">
                    <button type="submit" class="btn btn-search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-3">
                <select class="form-select custom-select" aria-label="Filtro de Alongamentos">
                    <option disabled selected>Filtrar por Foco</option>
                    <option value="1">Corpo Inteiro</option>
                    <option value="2">Costas</option>
                    <option value="3">Pernas</option>
                    <option value="4">Pescoço e Ombros</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-clear-filter w-100">Limpar Tudo</button>
            </div>
        </nav>

        <hr class="mb-5 cosmic-rift-small">

        <section class="row g-4 justify-content-center">
            <!-- Card: Alongamento Dinâmico -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Pessoa fazendo alongamento dinâmico">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Alongamento Dinâmico"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Alongamento Dinâmico</h5>
                        <p class="card-text">Ideal para aquecer o corpo antes de atividades físicas, com movimentos fluidos e controlados.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Alongamento Estático -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1534251617954-5a9a3b2a4a3d?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Pessoa em pose de alongamento estático">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Alongamento Estático"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Alongamento Estático</h5>
                        <p class="card-text">Aumente sua flexibilidade e relaxe os músculos mantendo posições por um tempo determinado.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Alongamento Passivo -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1598266663999-c35882b184a3?q=80&w=1933&auto=format&fit=crop" class="card-img-top" alt="Fisioterapeuta ajudando em alongamento passivo">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Alongamento Passivo"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Alongamento Passivo</h5>
                        <p class="card-text">Relaxe profundamente enquanto uma força externa (ou a gravidade) alonga seus músculos.</p>
                    </div>
                </div>
            </div>

            <!-- Card: Alongamento Ativo -->
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <div class="card-img-container">
                        <img src="https://images.unsplash.com/photo-1616279967983-ec413476e824?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Mulher fazendo alongamento ativo na praia">
                        <a href="#" class="btn btn-cta btn-play stretched-link" aria-label="Iniciar Alongamento Ativo"><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Alongamento Ativo</h5>
                        <p class="card-text">Use a força dos seus próprios músculos para manter uma posição e melhorar o controle corporal.</p>
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