<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Full Stack Eletro</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" async></script>
    </head>

<body>
    <?php require("pages/header.php") ?>
    <main>
        <div class="fundo">
            <div class="conteudo">
                <h1>Deixe sua mensagem</h1>
                <div class="inputs">
                    <form class="formulario" action="">
                        <?php
                        include("pages/conexao.php");
                        if (isset($_GET['mensagem'])) {
                            $usuario = $_GET['nome'];
                            $mensagem = $_GET['mensagem'];
                            $email = $_GET['email'];
                            /* Passei quase uma hora e o erro era as aspas na definição dos campos abaixo */
                            $sql = "INSERT INTO feedback (id_mensagem, usuario, mensagem, email, dia) VALUES (null, '$usuario', '$mensagem', '$email', now())";
                            mysqli_query($conexao, $sql);
                            header("Location: contact.php");
                            mysqli_close($conexao);
                        }
                        ?>
                        <div class="form-input">
                            <input class="itens" type="text" name="nome" id="nome" placeholder="Nome Completo">
                            <input class="itens" type="email" name="email" id="email" placeholder="Endereço de Email">
                            <textarea class="itens" placeholder="Mensagem" name="mensagem"></textarea>
                        </div>
                        <div class="botao"><button onclick="alert('Muito Obrigado!')" type="submit">Enviar</button></div>
                    </form>
                </div>
                <img class="imagem" src="imagens/icones/iconCaneta.svg">
            </div>
        </div>
    </main>
    <?php include("pages/footer.php"); ?>
</body>

</html>