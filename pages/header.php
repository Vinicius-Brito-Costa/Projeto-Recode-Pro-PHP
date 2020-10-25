<?php
    $logo = '
    <a href="index.php">
        <div class="headerHeight"></div><img id="logo" src="imagens/fs-logo.png">
    </a>';
    $link1 = '
    <a href="pages/products.php" id="paginas" class="linkPagina"><img src="imagens/icones/iconProdutos.svg" class="icones">
        <p>PRODUTOS</p>
    </a>';
    $link2 = '
    <a href="pages/contact.php" id="paginas" class="linkPagina"><img src="imagens/icones/iconContato.svg" class="icones">
        <p>CONTATO</p>
    </a>';
    $link3 = '
    <a href="pages/about.php" id="paginas" class="linkPagina"><img src="imagens/icones/iconSobre.svg" class="icones">
        <p>SOBRE</p>
    </a>';

    $current_page = $_SERVER['REQUEST_URI'];
    if (substr($current_page, 0, 29) == "/Fullstack/pages/products.php"|| substr($current_page, 0, 28) == "/Fullstack/pages/contact.php" || substr($current_page, 0, 26) == "/Fullstack/pages/about.php" || substr($current_page, 0, 28) == "/Fullstack/pages/product.php") 
    {
        $logo = '
        <a href="../index.php">
            <div class="headerHeight"></div><img id="logo" src="../imagens/fs-logo.png">
        </a>';
        $link1 = '
        <a href="../index.php" id="paginas" class="linkPagina"><img src="../imagens/icones/iconMain.svg" class="icones">
            <p>HOME</p>
        </a>';
        $link2 = '
        <a href="contact.php" id="paginas" class="linkPagina"><img src="../imagens/icones/iconContato.svg" class="icones">
            <p>CONTATO</p>
        </a>';
        $link3 = '
        <a href="about.php" id="paginas" class="linkPagina"><img src="../imagens/icones/iconSobre.svg" class="icones">
            <p>SOBRE</p>
        </a>';
    }
    if(substr($current_page, 0, 28) == "/Fullstack/pages/contact.php" || substr($current_page, 0, 26) == "/Fullstack/pages/about.php")
    {
        $link2 = '
        <a href="products.php" id="paginas" class="linkPagina"><img src="../imagens/icones/iconProdutos.svg" class="icones">
            <p>PRODUTOS</p>
        </a>';
    }
    if(substr($current_page, 0, 26) == "/Fullstack/pages/about.php")
    {
        $link3 = '
        <a href="contact.php" id="paginas" class="linkPagina"><img src="../imagens/icones/iconContato.svg" class="icones">
            <p>CONTATO</p>
        </a>';
    }

    $header = '
        <header>
        <div class="menu-principal">'.
            $logo.
            $link1.  
            $link2.
            $link3.
        '</div class="menu-principal">
        </header>';

echo $header;
