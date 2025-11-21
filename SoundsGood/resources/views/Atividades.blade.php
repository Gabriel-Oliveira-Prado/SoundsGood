<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoundsGood - Atividades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/Atividades.css">
</head>
<body>
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
        <header class="text-center my-5 reveal">
            <h1 class="display-4 hero-title">Trabalhe em Você</h1>
            <p class="lead text-white-50 hero-subtitle">Temos diversas atividades e aplicações para fazer você descansar e se sentir melhor. Seja bem-vindo aqui sempre.</p>
        </header>
        <nav class="row g-3 align-items-center mb-5 reveal">
            <div class="col-md-6">
                <form action="#" method="get" class="input-group">
                    <input type="search" class="form-control custom-input" name="q" placeholder="Pesquise a atividade...">
                    <button type="submit" class="btn btn-search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-3">
                <select class="form-select custom-select" aria-label="Filtro de Atividades">
                    <option disabled selected>Filtrar por Categoria</option>
                    <option value="1">Respiração</option>
                    <option value="2">Sons</option>
                    <option value="3">Alongamento</option>
                    <option value="4">Meditação</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-clear-filter w-100">Limpar Tudo</button>
            </div>
        </nav>
        <hr class="mb-5 cosmic-rift-small">
        <section class="row g-4 justify-content-center">
            <div class="col-md-6">
                <div class="card activity-card h-100">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?q=80&w=2120&auto=format&fit=crop" class="card-img-top" alt="Mulher praticando ioga">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Técnicas de Respiração</h5>
                        <p class="card-text">Com nossas técnicas de respiração você conseguirá relaxar e manter seus pensamentos em ordem.</p>
                        <a href="/Respiracao" class="btn btn-cta mt-auto align-self-start stretched-link">Começar <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card activity-card h-100">
                    <img src="https://images.unsplash.com/photo-1433086966358-54859d0ed716?q=80&w=1974&auto=format&fit=crop" class="card-img-top" alt="Cachoeira em meio à natureza">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Sons Calmantes</h5>
                        <p class="card-text">Nossa seleção de sons naturais e ambientes auxiliam você a relaxar, concentrar-se ou dormir.</p>
                        <a href="/SonsCalmantes" class="btn btn-cta mt-auto align-self-start stretched-link">Ouvir <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card activity-card h-100">
                    <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Mulher se alongando">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Alongamento</h5>
                        <p class="card-text">Nossa sessão de alongamentos guiados vai te ajudar com o foco em relaxamento corporal e melhoria da postura.</p>
                        <a href="/Alongamento" class="btn btn-cta mt-auto align-self-start stretched-link">Praticar <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card activity-card h-100">
                    <img src="https://images.unsplash.com/photo-1474418397713-7ede21d49118?q=80&w=2070&auto=format&fit=crop" class="card-img-top" alt="Pessoa meditando ao pôr do sol">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Meditação</h5>
                        <p class="card-text">Também trazemos sessões de meditação com áudio e narração suave para seu relaxamento mental.</p>
                        <a href="/Meditacao" class="btn btn-cta mt-auto align-self-start stretched-link">Meditar <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="aurora-container">
            <div class="aurora aurora-1"></div>
            <div class="aurora aurora-2"></div>
            <div class="aurora aurora-3"></div>
        </div>
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <h5 class="footer-title">
                            <a class="navbar-brand fw-bold" href="#">
                                <i class="fas fa-satellite me-2"></i>SoundsGood
                            </a>
                        </h5>
                        <p class="footer-text">Transformando vidas através do poder terapêutico dos sons.</p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4">    
                        <h6 class="footer-subtitle">Links</h6>
                        <ul class="footer-links">
                            <li><a href="#inicio">Início</a></li>
                            <li><a href="#sobre">Sobre</a></li>
                            <li><a href="#beneficios">Serviços</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4">
                        <h6 class="footer-subtitle">Recursos</h6>
                        <ul class="footer-links">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Suporte</a></li>
                            <li><a href="#">Política de Privacidade</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <h6 class="footer-subtitle">Contato</h6>
                        <ul class="footer-contact">
                            <li><i class="fas fa-envelope me-2"></i>Gabrieloliveira.prado@hotmail.com</li>
                            <li><i class="fas fa-phone me-2"></i>+55 81 8510-2009</li>
                            <li><i class="fas fa-map-marker-alt me-2"></i>Recife, Brasil</li>
                        </ul>
                    </div>
                </div>
                <hr class="footer-divider">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="footer-copyright">&copy; 2025 SoundsGood. Todos os direitos reservados.</p>
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
