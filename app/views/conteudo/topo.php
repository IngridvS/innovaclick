<?php
function getActiveClass($nomePagina){
    $paginaAtual = basename($_SERVER['PHP_SELF']);
    return $paginaAtual === $nomePagina ? 'active': '';

}
?>
<section class="site">
    <div>
        <a>
              <h1 class="animate__animated animate__rubberBand">Logo Innova Click</h1>
        </a>
      
    </div>
    <button class="abrirMenu"><i class="fa-solid fa-bars"></i></button>
    <nav>
        <button class="fecharMenu"><i class="fa-solid fa-x"></i></button>
        <ul>
            <li class="<?= getActiveClass('index.php')?>"><a href="<?php Base_URL?> home">Home</a></li>
            <li class="<?= getActiveClass('sobre.php')?>"><a href="<?php Base_URL?> sobre">Sobre Nós</a></li>
            <li class="<?= getActiveClass('contato.php')?>"><a href="<?php Base_URL?> contato">Contato</a></li>
        </ul>
        <button><i class="fa-solid fa-user"></i></button>
    </nav>
    <div class= "loginNormal">
        <button><i class="fa-solid fa-user"></i></button>
    </div>
</section>