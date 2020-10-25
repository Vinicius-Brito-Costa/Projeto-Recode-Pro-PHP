<!DOCTYPE html>
<html lang="pt-br">
<header>
    <meta charset="UTF-8mb4">
    <title>Full Stack Eletro</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/product.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" async></script>
    <script src="../javascript/product-page.js" defer></script>
</header>
<?php
header('Content-Type: text/html; charset=utf-8');
include("conexao.php");
$id = $_GET['id_produto'];
$sql = "select * from produtos where id_produto = $id";
$query = $conexao->query($sql)->fetch_assoc();
$nome = $query['nome'];
$descricao = $query['descricao'];
$preco_antigo = $query['preco_antigo'];
$preco_atual = $query['preco_atual'];
$link_imagem = $query['nome_imagem'];
$promo = ($query['promocao'] / 100);
$frete = 10;
?>

<body>
    <?php require("header.php") ?>
    <main>
        <div class="fundo">
            <div class="conteudo">
                <div class="imagem-produto"><img src='../imagens/produtos/<?php echo $link_imagem ?>'></div>
                <div class="infos">
                    <div class="textos">
                        <div class="nome-produto"><?php $nome ?></div>
                        <div class="descricao"><?php echo $descricao ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="compra">
                <div class="endereco">
                    <div class="cep">
                        <label for="cep">CEP: </label>
                        <input id="cep" class="endereco-itens" onkeydown="CepCheck(this.value)" type="number"><br>
                    </div>
                    <div class="rua">
                        <p>Endereço:</p>
                        <div id="endereco" class="endereco-itens"></div>
                    </div>
                    <div class="numero">
                        <p>Numero:</p>
                        <div id="numero" class="endereco-itens"></div>
                    </div>
                    <div class="estado">
                        <p>Estado:</p>
                        <div id="estado" class="endereco-itens"></div>
                    </div>
                    <div class="cidade">
                        <p>Cidade:</p>
                        <div id="cidade" class="endereco-itens"></div>
                    </div>
                </div>
                <div class="precos">
                    <span>De </span>
                    <div class='valor-antigo'>R$<?php echo $preco_antigo ?></div>
                    <span>Por </span>
                    <div class='valor-unidade'>R$<?php echo $preco_atual ?></div>
                    <span>Economize R$<?php echo round($promo * $preco_antigo, 2) ?>!</span>
                    <span>Frete: </span>
                    <div class='valor-frete'>R$10,00</div>
                    <div class='valor-parcelado'>6x R$<?php echo round($preco_atual / 6, 2) ?></div>
                </div>
                <form class="caixa-de-compra" action="" method="POST" onsubmit="return false">
                    <div class="quant">
                        <label for="quantidade">Quantidade: </label>
                        <input id="quantidade" type="number" value="1" min="1" max="9" placeholder="" onkeyup="PrecificarTotal(<?php echo $preco_atual ?>)"><br>
                    </div>
                    <span>Total </span>
                    <div class='valor-total'>R$<?php echo $preco_atual ?></div>
                    <span>Frete não incluso.</span>
                    <div class="botao"><button onclick="alert('Função em construção')">COMPRAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>