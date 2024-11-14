<?php
// delete.php - Script para excluir um anúncio e sua página de perfil

// Verifica se o ID do card e o nome da página de perfil foram fornecidos via POST
if (isset($_POST['card_id']) && isset($_POST['perfil_page'])) {
    $card_id = $_POST['card_id'];
    $perfil_page = $_POST['perfil_page'];
    $painel_id = $_POST['painel_id'];

    // Caminho para o index.html e a página de perfil na pasta raiz
    $index_file = 'index.html';
    $perfil_path = './' . $perfil_page; // Caminho atualizado para a raiz

    // Remove o card do index.html
    $index_content = file_get_contents($index_file);
    if ($index_content !== false) {
        // Regex ajustada para capturar o bloco completo do card com id e todos os fechamentos </div>
        $pattern = "/<div[^>]*id=\"$card_id\".*?<\\/div>\\s*<\\/div>\\s*<\\/div>\\s*<\\/div>/s";
        $index_content = preg_replace($pattern, '', $index_content);

        // Salva o conteúdo atualizado no index.html
        file_put_contents($index_file, $index_content);
    } else {
        echo "Erro ao carregar o arquivo index.html.";
    }

    // Exclui a página de perfil associada
    if (file_exists($perfil_path)) {
        unlink($perfil_path);
    } else {
        echo "Erro: página de perfil não encontrada.";
    }

    // Define o caminho para o painel_anuncios.php
    $painel_file = 'painel_anuncios.php';

    // Remove o anúncio do painel_anuncios.php
    $painel_content = file_get_contents($painel_file);
    if ($painel_content !== false) {
        // Cria uma instância do DOMDocument
        $dom = new DOMDocument();
        // Configura para carregar o HTML sem warnings
        libxml_use_internal_errors(true);
        $dom->loadHTML($painel_content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
    
        // Encontra o elemento com o ID específico
        $elementToRemove = $dom->getElementById($painel_id);
    
        // Verifica se o elemento foi encontrado e realiza a remoção
        if ($elementToRemove) {
            $elementToRemove->parentNode->removeChild($elementToRemove);
    
            // Salva o conteúdo atualizado de volta ao arquivo
            file_put_contents($painel_file, $dom->saveHTML());
            echo "Anúncio removido com sucesso.";
        } else {
            echo "Elemento com o ID $painel_id não encontrado.";
        }
    } else {
        echo "Erro ao carregar o arquivo painel_anuncios.php.";
    }

    // Redireciona de volta para o painel de anúncios com uma mensagem de sucesso
    header("Location: painel_anuncios.php?success=1");
    exit();
} else {
    echo "ID do card ou página de perfil não fornecidos.";
}
?>
