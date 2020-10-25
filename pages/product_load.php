<?php
include("conexao.php");
$sql = "select * from produtos";
$resultado = $conexao->query($sql);
while ($row = $resultado->fetch_assoc()) {
    $nome = $row['nome'];
    $preco_antigo = $row['preco_antigo'];
    $preco_atual = $row['preco_atual'];
    $promo = $row['promocao'];
    if ($preco_antigo == "") {
        $preco_antigo = "&nbsp;";
    } else {
        $preco_antigo = "R$" . $preco_antigo;
    }
    if ($promo != "") {
        $promo = "-" . $promo . "%";
    }

    $id = $row['categoria_produto'];
    $classe = $row['sub_categoria'];
    $endereco_imagem = $row['nome_imagem'];
?>
    <div class='box-produtos <?php echo $classe ?>' id='<?php echo $id ?>'>
        <form onclick="GoTo('product.php'), this.submit()" method="GET" action="product.php">
            <img src="imagens/produtos/<?php echo $endereco_imagem ?>">
            <div class="box-descricao">
                <span class="preco-antigo"><?php echo $preco_antigo ?></span>
                <span class="nome-produto"><?php echo $nome ?></span>
                <span class="preco-atual"><?php echo "R$" . $preco_atual ?></span>
                <span class="promo"><?php echo $promo ?></span>
                <input typer="hidden" name="id_produto" style="display: none" value="<?php echo $row['id_produto'] ?>"></input>
            </div>
        </form>
    </div>
<?php

}

?>