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

                        <div class="text-end">
                            <a href="planos.html" class="btn btn-warning d-inline-block">Quero Anunciar</a>
                            <form action="logout.php" method="POST" class="d-inline-block">
                                <button type="submit" class="btn btn-danger">Sair</button>
                            </form>
                        </div>
                    
                    
                </div>
            
            <div class="py-5 text-center">
                <h2>Painel de an&uacute;ncios</h2>
                <p class="lead">Verifique ou delete an&uacute;ncios expirados.</p>
            </div>
            <div id="anuncios">
                <div class="d-flex align-items-center p-3 border-bottom" id="painel673cbfee8c73a"><!-- novo -->
                    <div class="flex-shrink-0 me-3">
                        <img src="uploads/673cbfee50908.png" alt="Drica" width="40" height="40" class="rounded-circle">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0">Drica</h5>
                        <small class="text-light">Criado em: 19/11/2024 | Plano: maisProc </small><br>
                        <small class="text-light">Expira em: 19/12/2024</small><br>
                        <small class="text-secondary">ID do Card: card673cbfee8ba37</small><br>
                        <small class="text-secondary">ID da P&aacute;gina de Perfil: perfil_673cbfee8ba3e.html</small><br>
                    </div>
                    <form action="delete.php" method="post" style="display:inline;">
                        <input type="hidden" name="card_id" value="card673cbfee8ba37">
                        <input type="hidden" name="perfil_page" value="perfil_673cbfee8ba3e.html">
                        <input type="hidden" name="painel_id" value="painel673cbfee8c73a">
                        <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                    </form>
                </div>
                
                
                
                <div class="d-flex align-items-center p-3 border-bottom" id="painel673cbb5e4905a"><!-- novo -->
                    <div class="flex-shrink-0 me-3">
                        <img src="uploads/673cbb5e420b6.jpg" alt="Japinha " width="40" height="40" class="rounded-circle">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0">Japinha </h5>
                        <small class="text-light">Criado em: 19/11/2024 | Plano: gatasAlta </small><br>
                        <small class="text-light">Expira em: 19/12/2024</small><br>
                        <small class="text-secondary">ID do Card: card673cbb5e4799a</small><br>
                        <small class="text-secondary">ID da P&aacute;gina de Perfil: perfil_673cbb5e479a4.html</small><br>
                    </div>
                    <form action="delete.php" method="post" style="display:inline;">
                        <input type="hidden" name="card_id" value="card673cbb5e4799a">
                        <input type="hidden" name="perfil_page" value="perfil_673cbb5e479a4.html">
                        <input type="hidden" name="painel_id" value="painel673cbb5e4905a">
                        <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                    </form>
                </div>
                <div class="d-flex align-items-center p-3 border-bottom" id="painel673cb94a7d1d1"><!-- novo -->
                    <div class="flex-shrink-0 me-3">
                        <img src="uploads/673cb94a76796.jpg" alt="Adriane" width="40" height="40" class="rounded-circle">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0">Adriane</h5>
                        <small class="text-light">Criado em: 19/11/2024 | Plano: maisProc </small><br>
                        <small class="text-light">Expira em: 19/12/2024</small><br>
                        <small class="text-secondary">ID do Card: card673cb94a7c5e9</small><br>
                        <small class="text-secondary">ID da P&aacute;gina de Perfil: perfil_673cb94a7c5ee.html</small><br>
                    </div>
                    <form action="delete.php" method="post" style="display:inline;">
                        <input type="hidden" name="card_id" value="card673cb94a7c5e9">
                        <input type="hidden" name="perfil_page" value="perfil_673cb94a7c5ee.html">
                        <input type="hidden" name="painel_id" value="painel673cb94a7d1d1">
                        <button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
                    </form>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                    
            

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
    </div></header></main></div></body>    
</html>
