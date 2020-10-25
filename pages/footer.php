<?php
    $current_page = $_SERVER['REQUEST_URI'];
    $path = "";
    if($current_page != "/Fullstack/index.php")
    {
        $path = "../";
    }
    
?>
<footer>
    <div class="footerMisc">
        <div class="formasPagamento">
            <p>Formas de pagamento</p><img src="<?php print_r($path); ?>imagens/icones/bandeiras_cartoes.png">
        </div>
        <div>
            Ícones feitos por <a href="https://www.flaticon.com/br/autores/freepik" target="_blank"
                title="Freepik">Freepik</a> do
            <a href="https://www.flaticon.com/br/" target="_blank" title="Flaticon">Flaticon</a>
        </div>
    </div>
    <div class="assinatura">
        <a href="https://github.com/Vinicius-Brito-Costa" target="_blank" title="Perfil do Github">
            <p>Desenvolvido por Vinicius Brito Costa</p>
        </a>
    </div>
</footer>