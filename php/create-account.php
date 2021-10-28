<?php
include './verify-session.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/pattern-styles.css">
    <link rel="stylesheet" type="text/css" href="../css/create-account.css">
    <script src="https://kit.fontawesome.com/c23e963244.js" crossorigin="anonymous"></script>
    <script src="../js/verify-form-create-account.js" defer></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script type="text/javascript" defer>
        jQuery("document").ready(function($) {

            var nav = $('#top-bar');

            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    nav.addClass("top-bar") || nav.addClass("top-bar2");
                } else {
                    nav.removeClass("top-bar") || nav.removeClass("top-bar2");
                }
            });

        });

        jQuery("document").ready(function($) {

            var nav = $('#container');

            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    nav.addClass("container") || nav.addClass("container2");
                } else {
                    nav.removeClass("container") || nav.removeClass("container2");
                }
            });

        });

        $(document).ready(function() {
            $("input.birth-date").mask("99/99/9999");
            $("input.cpf").mask("999.999.999-99");
            $("input.cell-phone").mask("(99) 99999-9999");
            $("input.landline").mask("(99) 9999-9999");
            $("input.cep").mask("99999-999");
        });
    </script>
    <title>Sport Yo - Crie sua conta</title>
</head>
<header>
    <div id="container">
        <div class="logo">
            <a href="../index.php"><img src="../img/Logos/logo2.png" alt="Logo SportYo" /></a>
        </div>
        <div class="text-info-header">
            <button>
                <?php
                if (isset($_SESSION['username']) == true && isset($_SESSION['password']) == true) {
                    echo '
                            <a href="#"><p><span>Olá, ' . $_SESSION['username'] . '</span><br><i class="fas fa-map-marker-alt" href="#" style="font-size: 15pxx;"></i>
                                <span style="font-size: 12px;">Selecione o endereço</span>
                            </p></a>';
                } else {
                    echo '
                            <a href="#"><p><span>Olá</span><br><i class="fas fa-map-marker-alt" href="#" style="font-size: 15pxx;"></i>
                                <span style="font-size: 12px;">Selecione o endereço</span>
                            </p></a>';
                }
                ?>
            </button>
        </div>
        <div class="input-search">
            <form method="post">
                <input type="text" placeholder="O que você procura? :)" style="padding-left: 25px;" />
                <button type="submit">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <div class="text-info-header">
            <?php
            if (isset($_SESSION['username']) == true && isset($_SESSION['password']) == true) {
                echo '
                        <a href="./my-account.php"><p>Minha Conta</p></a>
                        <a href="./logout.php"><p>Sair</p></a>';
            } else {
                echo '
                        <a href="./login.php"><p>Olá, faça seu login</p></a>';
            }
            ?>
        </div><!-- Text info header-->
        <div class="text-info-header">
            <a href="#">
                <p> Devoluções <br /><b>e Pedidos</b></p>
            </a>
        </div><!-- Text info header-->
        <div class="text-info-header">
            <a href="#">
                <p class="flex align-flex-end"><i class="fas fa-shopping-cart" aria-hidden="true"></i><span style="padding: 0 8px;">Carrinho</span></p>
            </a>
        </div><!-- Text info header-->
    </div>

</header>

<body>
    <nav id="top-bar">
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">ESPORTES</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Esportes</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Academia e Fitness</a></li>
                    <li class="top-bar-item-list"><a href="#">Automobilismo</a></li>
                    <li class="top-bar-item-list"><a href="#">Aventura e Sports Radicais</a></li>
                    <li class="top-bar-item-list"><a href="#">Basquete</a></li>
                    <li class="top-bar-item-list"><a href="#">Baisebol</a></li>
                    <li class="top-bar-item-list"><a href="#">Bicicleta</a></li>
                    <li class="top-bar-item-list"><a href="#">Câmeras esportivas</a></li>
                    <li class="top-bar-item-list"><a href="#">Camping</a></li>
                    <li class="top-bar-item-list"><a href="#">Canoagem</a></li>
                    <li class="top-bar-item-list"><a href="#">Casual</a></li>
                    <li class="top-bar-item-list"><a href="#">Corrida e Caminhada</a></li>
                    <li class="top-bar-item-list"><a href="#">E-Sport</a></li>
                    <li class="top-bar-item-list"><a href="#">Futebol</a></li>
                    <li class="top-bar-item-list"><a href="#">Futebol Americano</a></li>
                    <li class="top-bar-item-list"><a href="#">Handball</a></li>
                    <li class="top-bar-item-list"><a href="#">Hipismo e Equitação</a></li>
                    <li class="top-bar-item-list"><a href="#">Jogos de Mesa</a></li>
                    <li class="top-bar-item-list"><a href="#">Laser, Piscina e Praia</a></li>
                    <li class="top-bar-item-list"><a href="#">Lutas e Artes Marciais</a></li>
                    <li class="top-bar-item-list"><a href="#">Mergulho</a></li>
                    <li class="top-bar-item-list"><a href="#">Monitores e Relógios GPS</a></li>
                    <li class="top-bar-item-list"><a href="#">Motocross</a></li>
                    <li class="top-bar-item-list"><a href="#">Musculação</a></li>
                    <li class="top-bar-item-list"><a href="#">Natação</a></li>
                    <li class="top-bar-item-list"><a href="#">Patins</a></li>
                    <li class="top-bar-item-list"><a href="#">Pesca</a></li>
                    <li class="top-bar-item-list"><a href="#">Pilates e Yoga</a></li>
                    <li class="top-bar-item-list"><a href="#">Rugby</a></li>
                    <li class="top-bar-item-list"><a href="#">Skate</a></li>
                    <li class="top-bar-item-list"><a href="#">Suplementos</a></li>
                    <li class="top-bar-item-list"><a href="#">Surf e Stand Up</a></li>
                    <li class="top-bar-item-list"><a href="#">Tennis e Squash</a></li>
                    <li class="top-bar-item-list"><a href="#">Treino Funcional</a></li>
                    <li class="top-bar-item-list"><a href="#">Vôlei</a></li>
                </ul>

            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">HOMENS</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Produtos para Homens</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Botas de Trilha</a></li>
                    <li class="top-bar-item-list"><a href="#">Chinelos Masculinos</a></li>
                    <li class="top-bar-item-list"><a href="#">Chuteiras Society</a></li>
                    <li class="top-bar-item-list"><a href="#">Chuteiras Futsal</a></li>
                    <li class="top-bar-item-list"><a href="#">Chuteiras Campo</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis de Basquete</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Masculinos</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis para Caminhada</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis para Corrida</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Skate</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Nike Masculino</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Adidas Masculino</a></li>
                    <li class="top-bar-item-list"><a href="#">Agasalhos</a></li>
                    <li class="top-bar-item-list"><a href="#">Bermudas</a></li>
                    <li class="top-bar-item-list"><a href="#">Calças</a></li>
                    <li class="top-bar-item-list"><a href="#">Calçoes e Shorts</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas de Competição</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas de Time</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas Polo</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisetas</a></li>
                    <li class="top-bar-item-list"><a href="#">Cuecas Boxer e Slip</a></li>
                    <li class="top-bar-item-list"><a href="#">Meias</a></li>
                    <li class="top-bar-item-list"><a href="#">Moletons e Jaquetas</a></li>
                    <li class="top-bar-item-list"><a href="#">Blusa de Frio</a></li>
                    <li class="top-bar-item-list"><a href="#">Jaqueta de Frio</a></li>
                    <li class="top-bar-item-list"><a href="#">Jaqueta Corta Vento</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisa Nike</a></li>
                    <li class="top-bar-item-list"><a href="#">Blusa Masculina</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Futebol</a></li>
                    <li class="top-bar-item-list"><a href="#">Bones Aba Reta</a></li>
                    <li class="top-bar-item-list"><a href="#">Bonés Aba Curva</a></li>
                    <li class="top-bar-item-list"><a href="#">Luvas de Boxe, MMA</a></li>
                    <li class="top-bar-item-list"><a href="#">Luvas de Goleiro</a></li>
                    <li class="top-bar-item-list"><a href="#">Mochilas Masculinas</a></li>
                    <li class="top-bar-item-list"><a href="#">Monitores Cardíacos</a></li>
                    <li class="top-bar-item-list"><a href="#">Óculos de Natação</a></li>
                    <li class="top-bar-item-list"><a href="#">Óculos de Sol</a></li>
                    <li class="top-bar-item-list"><a href="#">Rélogios de Pulso</a></li>
                </ul>
            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">MULHERES</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Produtos para Mulheres</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Botas Femininas</a></li>
                    <li class="top-bar-item-list"><a href="#">Chinelos Femininos</a></li>
                    <li class="top-bar-item-list"><a href="#">Chuteiras Femininas</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Casual e Sapatênis</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Femininos</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis para Academia</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis para Corrida</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Nike Feminino</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Adidas Feminino</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Olympikus Feminino</a></li>
                    <li class="top-bar-item-list"><a href="#">Chinelo Havaianas Feminino</a></li>
                    <li class="top-bar-item-list"><a href="#">Agasalhos</a></li>
                    <li class="top-bar-item-list"><a href="#">Bermudas</a></li>
                    <li class="top-bar-item-list"><a href="#">Blusas Cropped</a></li>
                    <li class="top-bar-item-list"><a href="#">Body Fitness</a></li>
                    <li class="top-bar-item-list"><a href="#">Calças Legging</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas de Time</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisetas</a></li>
                    <li class="top-bar-item-list"><a href="#">Maios e Macaquinhos</a></li>
                    <li class="top-bar-item-list"><a href="#">Meias</a></li>
                    <li class="top-bar-item-list"><a href="#">Moletons e Jaquetas</a></li>
                    <li class="top-bar-item-list"><a href="#">Short Saia</a></li>
                    <li class="top-bar-item-list"><a href="#">Top Fitness</a></li>
                    <li class="top-bar-item-list"><a href="#">Blusa de Frio Feminina</a></li>
                    <li class="top-bar-item-list"><a href="#">Shorts Nike Feminino</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Pilates</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolsas Femininas</a></li>
                    <li class="top-bar-item-list"><a href="#">Bónes Femininos</a></li>
                    <li class="top-bar-item-list"><a href="#">Cosméticos para Atletas</a></li>
                    <li class="top-bar-item-list"><a href="#">Luvas para Academia</a></li>
                    <li class="top-bar-item-list"><a href="#">Mochilas Femininas</a></li>
                    <li class="top-bar-item-list"><a href="#">Oculos de Sol</a></li>
                    <li class="top-bar-item-list"><a href="#">Squeezes</a></li>
                    <li class="top-bar-item-list"><a href="#">Tapetes de Yoga</a></li>
                    <li class="top-bar-item-list"><a href="#">Viseiras</a></li>
                </ul>
            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">CRIANÇAS</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Produtos para Crianças</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Botas Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Chuteiras Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Sandália Infantil</a></li>
                    <li class="top-bar-item-list"><a href="#">Chinelo Infantil</a></li>
                    <li class="top-bar-item-list"><a href="#">Bermudas Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Calças Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas de Time Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisetas Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Shorts Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Uniformes de Futebol</a></li>
                    <li class="top-bar-item-list"><a href="#">Kit Meias</a></li>
                    <li class="top-bar-item-list"><a href="#">Bicicleta Infantil</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Futebol</a></li>
                    <li class="top-bar-item-list"><a href="#">Capacetes Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Luvas de Goleiro</a></li>
                    <li class="top-bar-item-list"><a href="#">Mochilas Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Óculos de Natação</a></li>
                    <li class="top-bar-item-list"><a href="#">Patinetes</a></li>
                    <li class="top-bar-item-list"><a href="#">Patins</a></li>
                    <li class="top-bar-item-list"><a href="#">Piscinas</a></li>
                    <li class="top-bar-item-list"><a href="#">Raquetes de Tênis</a></li>
                    <li class="top-bar-item-list"><a href="#">Toucas de Natação</a></li>
                </ul>
            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">CALÇADOS</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Calçados</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Calçados Femininos</a></li>
                    <li class="top-bar-item-list"><a href="#">Calçados Masculinos</a></li>
                    <li class="top-bar-item-list"><a href="#">Clçados Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Nike</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Adidas</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Vans</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Olympikus</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Puma</a></li>
                    <li class="top-bar-item-list"><a href="#">Tenis Fila</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Jordan</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Mizuno</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis New Balance</a></li>
                    <li class="top-bar-item-list"><a href="#">Botas de Trilha</a></li>
                    <li class="top-bar-item-list"><a href="#">Botas de Treino</a></li>
                    <li class="top-bar-item-list"><a href="#">Chinelos de Dedo</a></li>
                    <li class="top-bar-item-list"><a href="#">Chinelos Slide</a></li>
                    <li class="top-bar-item-list"><a href="#">Chuteiras</a></li>
                    <li class="top-bar-item-list"><a href="#">Meias</a></li>
                    <li class="top-bar-item-list"><a href="#">Papetes</a></li>
                    <li class="top-bar-item-list"><a href="#">Sapatilhas de Ciclismo</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis de Basquete</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis de Boxe</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Casual e Sapatênis</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis para Academia</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis para Caminhada</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis para Corrida</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis para Tennis</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis Skate</a></li>
                </ul>
            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">ROUPAS</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Roupas</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Agasalhos</a></li>
                    <li class="top-bar-item-list"><a href="#">Bermudas</a></li>
                    <li class="top-bar-item-list"><a href="#">Calças</a></li>
                    <li class="top-bar-item-list"><a href="#">Calças Térmicas</a></li>
                    <li class="top-bar-item-list"><a href="#">Calções</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas de Compressão</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas de Time</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas Polo</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisas Térmicas</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisetas</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisetas Regatas</a></li>
                    <li class="top-bar-item-list"><a href="#">Camisetas Manga Longa</a></li>
                    <li class="top-bar-item-list"><a href="#">Kimonos</a></li>
                    <li class="top-bar-item-list"><a href="#">Long John e Short John</a></li>
                    <li class="top-bar-item-list"><a href="#">Macacões Fitness</a></li>
                    <li class="top-bar-item-list"><a href="#">Maiôs</a></li>
                    <li class="top-bar-item-list"><a href="#">Meias e Meião</a></li>
                    <li class="top-bar-item-list"><a href="#">Moletons e Jaquetas</a></li>
                    <li class="top-bar-item-list"><a href="#">Rash Guard</a></li>
                    <li class="top-bar-item-list"><a href="#">Sungas</a></li>
                    <li class="top-bar-item-list"><a href="#">Shortts Nike</a></li>
                    <li class="top-bar-item-list"><a href="#">Shorts Saia</a></li>
                    <li class="top-bar-item-list"><a href="#">Shorts Adidas</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas Fitness</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas Casuais</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas Correr e Caminhar</a></li>
                    <li class="top-bar-item-list"><a href="#">Uniformes de Futebol</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas de Surfe</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas de Ciclismo</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas de Natação</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas de Praia</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas de Goleiro</a></li>
                    <li class="top-bar-item-list"><a href="#">Roupas Plus Size</a></li>
                </ul>
            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">ACESSÓRIOS</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Acessórios</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Bandagem</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Basquete</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Futebol</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Handebol</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Pilates</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Tênis</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolas de Vôlei</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolsas de Academia</a></li>
                    <li class="top-bar-item-list"><a href="#">Bolsas Térmicas</a></li>
                    <li class="top-bar-item-list"><a href="#">Bonés Aba Reta e Curva</a></li>
                    <li class="top-bar-item-list"><a href="#">Caneleiras</a></li>
                    <li class="top-bar-item-list"><a href="#">Capacetes</a></li>
                    <li class="top-bar-item-list"><a href="#">Colchonetes</a></li>
                    <li class="top-bar-item-list"><a href="#">Coqueteleiras</a></li>
                    <li class="top-bar-item-list"><a href="#">Joelheiras</a></li>
                    <li class="top-bar-item-list"><a href="#">Luvas de Boxe</a></li>
                    <li class="top-bar-item-list"><a href="#">Luvas de Goleiro</a></li>
                    <li class="top-bar-item-list"><a href="#">Luvas para Academia</a></li>
                    <li class="top-bar-item-list"><a href="#">Malas</a></li>
                    <li class="top-bar-item-list"><a href="#">Mochilas</a></li>
                    <li class="top-bar-item-list"><a href="#">Monitores Cardíacos</a></li>
                    <li class="top-bar-item-list"><a href="#">Munhequeiras</a></li>
                    <li class="top-bar-item-list"><a href="#">Óculos de Ciclismo</a></li>
                    <li class="top-bar-item-list"><a href="#">Óculos de Natação</a></li>
                    <li class="top-bar-item-list"><a href="#">Óculos de Sol</a></li>
                    <li class="top-bar-item-list"><a href="#">Raquetes de Tênis</a></li>
                    <li class="top-bar-item-list"><a href="#">Relógios de Pulso</a></li>
                    <li class="top-bar-item-list"><a href="#">Squeezes</a></li>
                    <li class="top-bar-item-list"><a href="#">TornozeleirasToucas de Natação</a></li>
                    <li class="top-bar-item-list"><a href="#">Viseiras</a></li>
                </ul>
            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">EQUIPAMENTOS</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Equipamentos</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Anilhas</a></li>
                    <li class="top-bar-item-list"><a href="#">Barras de Musculação</a></li>
                    <li class="top-bar-item-list"><a href="#">Bicicletas de Musculação</a></li>
                    <li class="top-bar-item-list"><a href="#">Bicicletas Ergométricas</a></li>
                    <li class="top-bar-item-list"><a href="#">Bicicletas Spinning</a></li>
                    <li class="top-bar-item-list"><a href="#">Estações de Musculação</a></li>
                    <li class="top-bar-item-list"><a href="#">Esteiras Elétricas</a></li>
                    <li class="top-bar-item-list"><a href="#">Kangoo Jump</a></li>
                    <li class="top-bar-item-list"><a href="#">Halteres</a></li>
                    <li class="top-bar-item-list"><a href="#">Kattlebell</a></li>
                    <li class="top-bar-item-list"><a href="#">Trampolim Jump</a></li>
                    <li class="top-bar-item-list"><a href="#">Bicicletas</a></li>
                    <li class="top-bar-item-list"><a href="#">Bicicletas Infantis</a></li>
                    <li class="top-bar-item-list"><a href="#">Cadeirinhas para Bicicleta</a></li>
                    <li class="top-bar-item-list"><a href="#">Mountain Bike</a></li>
                    <li class="top-bar-item-list"><a href="#">Suportes Parede Bike</a></li>
                    <li class="top-bar-item-list"><a href="#">Transbike para Carros</a></li>
                    <li class="top-bar-item-list"><a href="#">Luvas de Boxe e Muay Thai</a></li>
                    <li class="top-bar-item-list"><a href="#">Kit Boxe</a></li>
                    <li class="top-bar-item-list"><a href="#">Tatame</a></li>
                    <li class="top-bar-item-list"><a href="#">Saco de Pancada</a></li>
                    <li class="top-bar-item-list"><a href="#">Kimono</a></li>
                    <li class="top-bar-item-list"><a href="#">Caneleira</a></li>
                    <li class="top-bar-item-list"><a href="#">Bandagem</a></li>
                    <li class="top-bar-item-list"><a href="#">Faixa de Graduação</a></li>
                    <li class="top-bar-item-list"><a href="#">Protetor Bucal</a></li>
                    <li class="top-bar-item-list"><a href="#">Aparador de Soco</a></li>
                    <li class="top-bar-item-list"><a href="#">Protetor de Cabeça</a></li>
                    <li class="top-bar-item-list"><a href="#">Patinetes</a></li>
                    <li class="top-bar-item-list"><a href="#">Patins</a></li>
                    <li class="top-bar-item-list"><a href="#">Pebolim</a></li>
                    <li class="top-bar-item-list"><a href="#">Piscinas Estruturadas</a></li>
                    <li class="top-bar-item-list"><a href="#">Piscinas Infláveis</a></li>
                    <li class="top-bar-item-list"><a href="#">Pranchas Stand Up Paddle</a></li>
                    <li class="top-bar-item-list"><a href="#">Pranchas de Surf</a></li>
                    <li class="top-bar-item-list"><a href="#">Sinuca e Bilhar</a></li>
                    <li class="top-bar-item-list"><a href="#">Slackline</a></li>
                    <li class="top-bar-item-list"><a href="#">Tênis de Mesa</a></li>
                    <li class="top-bar-item-list"><a href="#">Anzóis de Pesca</a></li>
                    <li class="top-bar-item-list"><a href="#">Barracas de Camping</a></li>
                    <li class="top-bar-item-list"><a href="#">Caiaques</a></li>
                    <li class="top-bar-item-list"><a href="#">Carretilhas de Pesca</a></li>
                    <li class="top-bar-item-list"><a href="#">Colchões Infláveis</a></li>
                    <li class="top-bar-item-list"><a href="#">Fogareiros</a></li>
                    <li class="top-bar-item-list"><a href="#">Linhas de Pesca</a></li>
                    <li class="top-bar-item-list"><a href="#">Molinetes de Pesca</a></li>
                    <li class="top-bar-item-list"><a href="#">Sacos de Dormir</a></li>
                    <li class="top-bar-item-list"><a href="#">Varas de Pesca</a></li>
                </ul>
            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar" href="#">MARCAS</a>
            <div class="top-bar-items-more">
                <h2 class="item-more-title">Todas as Marcas</h2>
                <ul>
                    <li class="top-bar-item-list"><a href="#">Adams</a></li>
                    <li class="top-bar-item-list"><a href="#">Adidas</a></li>
                    <li class="top-bar-item-list"><a href="#">Asics</a></li>
                    <li class="top-bar-item-list"><a href="#">Barcelona</a></li>
                    <li class="top-bar-item-list"><a href="#">Brooks</a></li>
                    <li class="top-bar-item-list"><a href="#">Bull Terrier</a></li>
                    <li class="top-bar-item-list"><a href="#">Caloi</a></li>
                    <li class="top-bar-item-list"><a href="#">Converse All Star</a></li>
                    <li class="top-bar-item-list"><a href="#">Everlast</a></li>
                    <li class="top-bar-item-list"><a href="#">Fila</a></li>
                    <li class="top-bar-item-list"><a href="#">Garmin</a></li>
                    <li class="top-bar-item-list"><a href="#">Kappa</a></li>
                    <li class="top-bar-item-list"><a href="#">Lacoste</a></li>
                    <li class="top-bar-item-list"><a href="#">Liga da Justiça</a></li>
                    <li class="top-bar-item-list"><a href="#">Mizuno</a></li>
                    <li class="top-bar-item-list"><a href="#">Mormaii</a></li>
                    <li class="top-bar-item-list"><a href="#">Naja</a></li>
                    <li class="top-bar-item-list"><a href="#">NBA</a></li>
                    <li class="top-bar-item-list"><a href="#">New Balance</a></li>
                    <li class="top-bar-item-list"><a href="#">New Era</a></li>
                    <li class="top-bar-item-list"><a href="#">Nike</a></li>
                    <li class="top-bar-item-list"><a href="#">Nike Jordan</a></li>
                    <li class="top-bar-item-list"><a href="#">Nord Outdorr</a></li>
                    <li class="top-bar-item-list"><a href="#">Oakley</a></li>
                    <li class="top-bar-item-list"><a href="#">Olympkus</a></li>
                    <li class="top-bar-item-list"><a href="#">Oxer</a></li>
                    <li class="top-bar-item-list"><a href="#">Penalty</a></li>
                    <li class="top-bar-item-list"><a href="#">Polar</a></li>
                    <li class="top-bar-item-list"><a href="#">Pretorian</a></li>
                    <li class="top-bar-item-list"><a href="#">Punch</a></li>
                    <li class="top-bar-item-list"><a href="#">Puma</a></li>
                    <li class="top-bar-item-list"><a href="#">Reebok</a></li>
                    <li class="top-bar-item-list"><a href="#">Spalding</a></li>
                    <li class="top-bar-item-list"><a href="#">Speedo</a></li>
                    <li class="top-bar-item-list"><a href="#">Topper</a></li>
                    <li class="top-bar-item-list"><a href="#">Uhisport</a></li>
                    <li class="top-bar-item-list"><a href="#">Umbro</a></li>
                    <li class="top-bar-item-list"><a href="#">Under Armour</a></li>
                    <li class="top-bar-item-list"><a href="#">Sandália Crocs</a></li>
                    <li class="top-bar-item-list"><a href="#">Atrio</a></li>
                    <li class="top-bar-item-list"><a href="#">Billabong</a></li>
                    <li class="top-bar-item-list"><a href="#">Farm</a></li>
                    <li class="top-bar-item-list"><a href="#">Quiksilver</a></li>
                    <li class="top-bar-item-list"><a href="#">Real Madrird</a></li>
                    <li class="top-bar-item-list"><a href="#">Torcida Baby</a></li>
                    <li class="top-bar-item-list"><a href="#">Vollo</a></li>
                    <li class="top-bar-item-list"><a href="#">Wondersize</a></li>
                    <li class="top-bar-item-list"><a href="#">Marvel</a></li>
                </ul>
            </div>
        </div>
        <div class="top-bar-items">
            <a class="link-top-bar2" href="#">OUTLET</a>
        </div>
    </nav>
    <div id="contents">
        <form action="register-account.php" method="POST">
            <div class="form-column1">
                <h3><i class="fas fa-users"></i> Dados Pessoais</h3>
                <div class="form-column-input">
                    <input type="text" name="first-name" placeholder="Primeiro nome" required />
                    <input type="text" name="last-name" placeholder="Segundo nome" required />
                    <input type="text" name="cpf" placeholder="CPF" class="cpf" required /><br>
                    <input type="text" name="birth-date" placeholder="Data de Nascimento" class="birth-date" required />
                    <select name="sex" required>
                        <option value>Selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                    <input type="text" name="cell-phone" placeholder="Telefone Celular" class="cell-phone" required />
                    <input type="text" name="landline" placeholder="Telefone Fixo" class="landline" />
                </div>
                <h3><i class="fas fa-key"></i> Dados de acesso</h3>
                <div class="form-column-input-email">
                    <input type="email" name="email" placeholder="Digite um endereço de e-mail" class="input-email" required />
                </div>
                <div class="form-column-input">
                    <input type="password" name="password" placeholder="Digite uma senha" required />
                    <input type="password" name="password-validity" placeholder="Digite novamente" required />
                </div>

            </div>
            <div class="form-column2">
                <h3><i class="fas fa-truck"></i> Dados de Entrega</h3>
                <div class="form-column-input">
                    <input type="text" name="cep" class="cep" placeholder="CEP" required />
                    <a href="#" class="dont-know-cep">Não sei meu CEP</a>
                    <div class="form-column-input-address">
                        <input type="text" name="address" placeholder="Digite o logradouro" required />
                        <input type="text" name="address-complement" placeholder="Complemento" />
                    </div>
                    <input type="number" name="address-number" placeholder="Número" required />
                    <input type="text" name="district" placeholder="Bairro" required />
                    <input type="text" name="city" placeholder="Cidade" required />
                    <input type="text" name="state" placeholder="UF" maxlength="2" required />
                </div>
            </div>
            <div class="form-column3">
                <h3><i class="fas fa-lock"></i> Termos</h3>
                <div class="newsletter-box">
                    <h3 style="font-size: 12px;"><i class="fas fa-tags"></i> Quer receber descontos exclusivos?</h3>
                    <input type="checkbox" name="optin-newsletter" id="newsletter" />
                    <label for="newsletter">Quero receber ofertas e descontos exclusivos. Li e concordo com o <a href="#">termo de consentimento</a>.</label>
                </div>
                <div class="use-terms">
                <h3 style="font-size: 12px;"><i class="fas fa-user-lock"></i> Termos de uso e dados</h3>
                <input type="checkbox" name="licence-agreement" id="licence" required/>
                <label for="licence">Li e concordo com o <a href="#">termo de concentimento</a> e aceito os <a href="#">termos e condições</a> *</label>
                </div>

                <div class="button">
                    <button type="submit">
                        <p style="font-size: 20px;">Cadastrar</p>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <footer id="footer">
        <a href="index.php" class="link-logo-footer"><img src="../img/Logos/logo2.png" alt="Logo Sport Yo"></a><a href="#" class="link-facebook-footer"><i class="fab fa-facebook"></i></a><a href="#" class="link-instagram-footer"><i class="fab fa-instagram"></i></a>
        <p class="text-footer">Os preços, promoções, condições de pagamento, frete e produtos são válidos exclusivamente
            para compras realizadas via internet.<br>
            Fotos meramente ilustrativas. Copyright © 2021-2021 - SportYo.com.br. Todos os direitos reservados.</p>
    </footer>

</body>

</html>