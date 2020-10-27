<!DOCTYPE html>
<html lang="pt-br">
<header>
    <meta charset="UTF-8mb4">
    <title>Full Stack Eletro</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/product.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" async></script>
    <script src="javascript/product-page.js" defer></script>
</header>
<?php
include("pages/conexao.php");
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

if (isset($_POST['cep'])&&isset($_POST['quantidade'])) {
    $usuario = "Usuario Padrão";
    $endereco = $_POST['endereco'].", ".$_POST['numero'].", ".$_POST['cidade']." / ".$_POST['estado']." - ".$_POST['cep'];
    $telefone = $_POST['telefone'];
    $id_produto = $id;
    $valor_unitario = $preco_atual;
    $quantidade = $_POST['quantidade'];
    $valor_total = ($valor_unitario * $quantidade) + $frete;
    /* Passei quase uma hora e o erro era as aspas na definição dos campos abaixo */
    $sql = "INSERT INTO pedidos (id_pedido, cliente, endereco, telefone, id_produto, valor_unitario, quantidade, valor_total) VALUES (null, '$usuario', '$endereco', '$telefone', '$id_produto', '$valor_unitario', '$quantidade', '$valor_total')";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}
?>

<body>
    <?php require("pages/header.php") ?>
    <main>
        <div class="fundo">
            <div class="conteudo">
                <div class="imagem-produto"><img src='imagens/produtos/<?php echo $link_imagem ?>'></div>
                <div class="infos">
                    <div class="textos">
                        <div class="nome-produto"><?php $nome ?></div>
                        <div class="descricao"><?php echo $descricao ?>
                        </div>
                    </div>
                </div>
            </div>
            <form class="caixa-de-compra" action="" method="POST">
                <div class="compra">
                    <div class="endereco">
                        <div class="cep">
                            <label for="cep">CEP: </label>
                            <input id="cep" name="cep"class="endereco-itens" onkeydown="CepCheck(this.value)" type="number"><br>
                        </div>
                        <div class="rua">
                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" class="endereco-itens" value="">
                        </div>
                        <div class="numero">
                            <label for="numero">Numero:</label>
                            <input type="text" id="numero" name="numero" class="endereco-itens" value="">
                        </div>
                        <div class="estado">
                            <label for="estado">Estado:</label>
                            <input type="text" id="estado" name="estado" class="endereco-itens" value="">
                        </div>
                        <div class="cidade">
                            <label for="cidade">Cidade:</label>
                            <input type="text" id="cidade" name="cidade" class="endereco-itens" value="">
                        </div>
                        <div class="telefone">
                            <label for="telefone">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" class="endereco-itens" value="">
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

                    <div class="quant">
                        <label for="quantidade">Quantidade: </label>
                        <input id="quantidade" name="quantidade" type="number" value="1" min="1" max="9" placeholder="" onkeyup="PrecificarTotal(<?php echo $preco_atual ?>)"><br>
                    </div>
                    <span>Total </span>
                    <div class='valor-total'>R$<?php echo $preco_atual ?></div>
                    <span>Frete não incluso.</span>
                    <input type="hidden" name="id_produto" id="id_produto" value=<?php echo $id ?>>
                    <div class="botao"><button onclick="alert('Função em construção')">COMPRAR</button>
                    </div>
            </form>
        </div>
        </div>
    </main>
    <?php include("pages/footer.php"); ?>
</body>

</html>