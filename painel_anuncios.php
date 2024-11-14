<!DOCTYPE html>
<?php require('config.php'); 
?><html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inserir Anuncio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 960px;
        }
        .form-check {
            margin-bottom: 15px;
        }
    </style>
</head>
<body class="text-bg-dark">
    <div class="container">
        <main>
            <header>
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <img src="./img/logo.png" alt="Logotipo" width="120" height="120" class="rounded-5 me-2">
                        </a>
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a href="index.html" class="nav-link px-2 text-light">In&iacute;cio</a></li>
                            <li><a href="planos.html" class="nav-link px-2 text-light">Planos</a></li>
                            <li><a href="duvidas.html" class="nav-link px-2 text-light">D&uacute;vidas</a></li>
                            <li><a href="sobre.html" class="nav-link px-2 text-light">Sobre</a></li>
                            <a href="inserir_anuncio.php" class="btn btn-link">Inserir An&uacute;ncio</a>
                        </ul>
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                            <input type="search" class="form-control form-control-dark text-bg-light" placeholder="Pesquise por caracter&iacute;stica" aria-label="Search">
                        </form>
                        <div class="text-end">
                        
                            <form action="logout.php" method="POST">
                                <button type="submit" class="btn btn-danger">Sair</button>
                            </form>
                            <a href="planos.html" class="btn btn-warning">Quero Anunciar</a>
                        </div>
                        
                    </div> 
                    
                    
                </div>
            </header>
            <div class="py-5 text-center">
                <h2>Painel de an&uacute;ncios</h2>
                <p class="lead">Verifique ou delete an&uacute;ncios expirados.</p>
            </div>
            <div id="anuncios">
                
                
                
                
                    
            

        <div class="container">
                <div class="text-center"><br>
                    <img src="./img/logo.png" alt="Logotipo" width="180" height="180" class=" rounded-5 me-2">
                </div>
                <footer class="py-0 my-4">
                    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                        <li><a href="#" class="nav-link px-2 text-light">In&iacute;cio</a></li>
                        <li><a href="planos.html" class="nav-link px-2 text-light">Planos</a></li>
                        <li><a href="duvidas.html" class="nav-link px-2 text-light">D&uacute;vidas</a></li>
                        <li><a href="sobre.html" class="nav-link px-2 text-light">Sobre</a></li>
                    </ul>
                    <p class="text-center text-secondary">&copy; Os an&uacute;ncios em nosso site s&atilde;o de responsabilidade exclusiva do Anunciante e publicados sem verifica&ccedil;&atilde;o pr&eacute;via por nossa equipe. N&atilde;o nos responsabilizamos pela veracidade, legalidade, direitos de propriedade ou perturba&ccedil;&otilde;es causadas pelo conte&uacute;do inserido pelo usu&aacute;rio.</p>
                </footer>
                
        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </main></div></body>    
</html>
