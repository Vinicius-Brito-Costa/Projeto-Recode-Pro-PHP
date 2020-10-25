<!DOCTYPE html>
<html lang="pt-br">
<header>
    <meta charset="UTF-8">
    <title>Full Stack Eletro</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/products.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="../javascript/products-main.js" defer></script>
    <script src="../javascript/products-navigation-bar.js" defer></script>
</header>

<body>
    <?php require("header.php") ?>
    <main>
        <section class="products-page">
            <section class="barra-produtos">
                <p id="ordernar" onclick="ShowCategoriesMobile()">Ordenar produtos</p>
                <nav id="link-barra-produtos">
                    <div id="todos">
                        <div class="link-barra" onclick="ShowOnly('todos')">TODOS</div>
                    </div>
                    <div id="hardware">
                        <div class="link-barra" onclick="ShowSubCategories('hardware'), ShowOnly('hardware')">HARDWARE</div>
                        <div id="sub-link">
                            <div onclick="ShowOnlySub('hardware', 'cpu')">CPU</div>
                            <div onclick="ShowOnlySub('hardware', 'gpu')">GPU</div>
                            <div onclick="ShowOnlySub('hardware', 'memoria')">MEMÓRIA</div>
                            <div onclick="ShowOnlySub('hardware', 'mobo')">MOBO</div>
                        </div>
                    </div>
                    <div id="monitores">
                        <div class="link-barra" onclick="ShowSubCategories('monitores'), ShowOnly('monitores')">MONITORES</div>
                        <div id="sub-link">
                            <div onclick="ShowOnlySub('monitores', 'res_1080p')">1080</div>
                            <div onclick="ShowOnlySub('monitores', 'res_4k')">4k</div>
                        </div>
                    </div>
                    <div id="mouses">
                        <div class="link-barra" onclick="ShowSubCategories('mouses'), ShowOnly('mouses')">MOUSES</div>
                        <div id="sub-link">
                            <div onclick="ShowOnlySub('mouses', 'com_fio')">COM FIO</div>
                            <div onclick="ShowOnlySub('mouses', 'sem_fio')">SEM FIO</div>
                        </div>
                    </div>
                    <div id="teclados">
                        <div class="link-barra" onclick="ShowSubCategories('teclados'), ShowOnly('teclados')">TECLADOS</div>
                        <div id="sub-link">
                            <div onclick="ShowOnlySub('teclados', 'com_fio')">COM FIO</div>
                            <div onclick="ShowOnlySub('teclados', 'sem_fio')">SEM FIO</div>
                        </div>
                    </div>
                    <div id="consoles">
                        <div class="link-barra" onclick="ShowSubCategories('consoles'), ShowOnly('consoles')">CONSOLES</div>
                        <div id="sub-link">
                            <div onclick="ShowOnlySub('consoles', 'playstation')">Playstation</div>
                            <div onclick="ShowOnlySub('consoles', 'xbox')">Xbox</div>
                            <div onclick="ShowOnlySub('consoles', 'nintendo')">Nintendo</div>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="produtos">
                <div class="container">
                    <?php include("product_load.php")?>
                </div>
            </section>
        </section>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>