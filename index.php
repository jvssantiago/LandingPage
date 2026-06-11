<?php
//OBSERVAÇÃO: 
// include: Emite um aviso (Warning) e continua a execução do script.
// require: Emite um erro fatal (Fatal Error) e interrompe a execução do script

//o uso de once Verifica se o arquivo já foi incluído ou carregado. Se sim, não o inclui ou carrega novamente

// Inclui o topo da página (Tags HTML, Head)
require_once 'modulos/topo.php';

// Inclui o menu de navegação
require_once 'modulos/menu.php';
?>

<main class="container">
    <div class="row">
        <?php 
        // Inclui a seção de conteúdo principal
        require_once 'modulos/conteudo.php'; 
        
        // Inclui a barra lateral
        require_once 'modulos/lateral.php'; 
        ?>
    </div>
</main>

<?php
// Inclui o rodapé (Fechamento do HTML)
require_once 'modulos/rodape.php';
?>