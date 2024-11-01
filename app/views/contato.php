<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNOVA CLICK - Agência Web</title>
    <link rel="stylesheet" href="css/reset.css">
    <!-- reset sempre será o primeiro link -->

    <!-- animação banner -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

    <!-- animação.css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- css sempre será o último -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Cabeça do corpo-->
    <header>
       <?php require_once('conteudo/topo.php') ?>
       <!-- ele chama o conteudo que está em outra pasta e arquivo -->
    </header>

    <!-- pag do corpo  -->
    <main>
        
    <!-- banner  -->
    <?php require_once('conteudo/banner.php') ?>

        <!-- conteúdo do contato -->

        <!-- fim do conteúdo do contato -->
        <section class="contato">
            <article class="site">
                <h2>Formulário de Contato</h2>
                <form action="email.php" method="post">
                    <div>
                        <label>Nome:</label><br>
                        <input type="text" name="nome" placeholder="Digite seu nome completo" required><br>
                        <label>Telefone:</label><br>
                        <input type="tel" name="tel" placeholder="Digite seu telefone" required><br>
                        <label>E-mail:</label><br>
                        <input type="email" name="email" placeholder="Digite seu e-mail" required><br>
                    </div>
                    <div>
                        <label>Mensagem:</label><br>
                        <textarea name="mensagem" cols="50" rows="6" placeholder="Digite sua mensagem " required></textarea><br>
                        <div>
                            <input type="submit" value="Enviar">
                            <input type="reset" value="Limpar">
                        </div>
                    </div>
                   
                </form>

            </article>

        </section>
        
        <!-- serviço  -->
        <?php require_once('conteudo/servico.php') ?>

        <!-- sobre -->
        <?php require_once('conteudo/sobre.php') ?>




        <!-- equipe -->
        <?php require_once('conteudo/equipe.php') ?>
    </main>


    <!-- final de corpo -->
    <footer>
         <?php require_once('conteudo/rodape.php') ?>
    </footer>


    <script src="https://kit.fontawesome.com/6a9aa14b39.js" crossorigin="anonymous"></script>
    <!-- o import de icone foi atualizado agora ele é usado no final de pag  -->

    <!-- jQUERJ - script que trabalha com animação-->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- ANIMAÇÃO BANNER -->
    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- minha animação -->
    <script src="js/animacao.js"></script>
</body>

</html>