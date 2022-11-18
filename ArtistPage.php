<?php

session_start();

$user= $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/geral.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>ArtistPage - Rockstar</title>

    <style>

        .container{
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            width: 1920px;
            height: 1080px;
            padding: 0;
            margin: 0;
        }

        /* foto artista */

        .foto_perfil img{
            position: absolute;
            width: 193px;
            height: 193px;
            left: 227px;
            top: 188px;
            border-radius: 50%;
            border: 4px solid #FFFFFF;
        }


        /* Caixa albums */

        .caixa_esq {
            box-sizing: border-box;

            position: absolute;
            width: 1060px;
            height: 488px;
            left: 130px;
            top: 416px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Caixa musicas */

        .caixa_dir {
            box-sizing: border-box;

            position: absolute;
            width: 535px;
            height: 731px;
            left: 1245px;
            top: 185px;

            background: #B3B7A8;
            border: 4px solid #FFFFFF;
            border-radius: 36px;
        }


        /* Albums */

        .albums {
            position: absolute;
            width: 301px;
            height: 41px;
            left: 512px;
            top: 448px;
            align-content: center;

        }

        /* Singles */

        .songs {
            position: absolute;
            width: 304px;
            height: 53px;
            left: 1362px;
            top: 219px;
            align-content: center;

        }

        /* Rectangle esq */

        .foto_1 img{

            position: absolute;
            width: 213px;
            height: 213px;
            left: 196px;
            top: 535px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle esq */

        .foto_2 img{
            position: absolute;
            width: 213px;
            height: 213px;
            left: 437px;
            top: 535px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle esq */

        .foto_3 img{
            position: absolute;
            width: 213px;
            height: 213px;
            left: 678px;
            top: 535px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_1 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 296px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_2 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 361px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle dir */

        .ret_3 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 426px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_4 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 491px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_5 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 556px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_6 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 621px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_7 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 686px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* Rectangle dir */

        .ret_8 {
            box-sizing: border-box;

            position: absolute;
            width: 485px;
            height: 57px;
            left: 1272px;
            top: 751px;

            background: #5C714F;
            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }


        /* Rectangle esq */

        .foto_4 img{
            position: absolute;
            width: 213px;
            height: 213px;
            left: 925px;
            top: 535px;

            border: 4px solid #FFFFFF;
            border-radius: 16px;
        }

        /* 3 pontinhos */

        .pont_1 {
            position: absolute;
            left: 1725px;
            top: 312px;
        }

        /* 3 pontinhos */

        .pont_2 {
            position: absolute;
            left: 1725px;
            top: 378px;

            /* 3 pontinhos */
        }

        .pont_3 {
            position: absolute;
            left: 1725px;
            top: 443px;
        }

        /* 3 pontinhos */

        .pont_4 {
            position: absolute;
            left: 1725px;
            top: 507px;
        }

        /* 3 pontinhos */

        .pont_5 {
            position: absolute;
            left: 1725px;
            top: 572px;
        }

        /* 3 pontinhos */

        .pont_6 {
            position: absolute;
            left: 1725px;
            top: 637px;
        }

        /* 3 pontinhos */

        .pont_7 {
            position: absolute;
            left: 1725px;
            top: 701px;
        }

        /* 3 pontinhos */

        .pont_8 {
            position: absolute;
            left: 1725px;
            top: 767px;
        }

        .pont_9 {
            position: absolute;
            left: 420px;
            top: 764px;
        }

        /* 3 pontinhos */

        .pont_10 {
            position: absolute;
            left: 660px;
            top: 764px;
        }

        /* 3 pontinhos */

        .pont_11 {
            position: absolute;
            left: 904px;
            top: 764px;
        }

        /* 3 pontinhos */

        .pont_12 {
            position: absolute;
            left: 1155px;
            top: 764px;
        }


        /* Stuffed & Ready */

        .texto_foto_1 {
            position: absolute;
            width: 213px;
            height: 80px;
            left: 196px;
            top: 756px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 33.83px;
            line-height: 38px;
            text-align: center;

            color: #EAE4E1;
        }


        /* Haxel Princess */

        .texto_foto_2 {
            position: absolute;
            width: 213px;
            height: 38px;
            left: 437px;
            top: 755px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 33.83px;
            line-height: 38px;
            text-align: center;

            color: #EAE4E1;
        }


        /* Papa Cremp */

        .texto_foto_3 {
            position: absolute;
            width: 213px;
            height: 80px;
            left: 678px;
            top: 755px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 33.83px;
            line-height: 38px;
            text-align: center;

            color: #EAE4E1;
        }


        /* Apocalipstic */

        .texto_foto_4 {
            position: absolute;
            width: 213px;
            height: 80px;
            left: 925px;
            top: 755px;

            font-family: 'Franklin Gothic Demi';
            font-style: normal;
            font-weight: 400;
            font-size: 33.83px;
            line-height: 38px;
            text-align: center;

            color: #EAE4E1;

        }


        /* Cherry Glazerr */

        h1{
            position: absolute;
            width: 654px;
            height: 65px;
            left: 461px;
            top: 180px;

            font-family: 'Franklin Gothic Heavy';
            font-style: normal;
            font-weight: 400;
            font-size: 90px;
            line-height: 102px;

            color: #566D49;
        }


        /* Come Back Around - Moon Boots, ... */

        .texto_ret_1 {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 309px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }



        /* My Friend of Misery - Cherry Glazerr */

        .texto_ret_2 {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 374px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Soft Drink - Cherry Glazerr */

        .texto_ret_3 {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 440px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Big Bang - Cherry Glazerr */

        .texto_ret_4 {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 503px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Rabbit Hole - Cherry Glazerr */

        .texto_ret_5 {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 569px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Call Me (feat. Portugal. The Man)... */

        .texto_ret_6 {
            position: absolute;
            width: 733px;
            height: 24px;
            left: 1297px;
            top: 632px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Daddy (Reggie Watts Remix) - ... */

        .texto_ret_7 {
            position: absolute;
            width: 547px;
            height: 24px;
            left: 1297px;
            top: 698px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }


        /* Juicy Socks - Cherry Glazerr */

        .texto_ret_8 {
            position: absolute;
            width: 733px;
            height: 24px;
            left: 1297px;
            top: 763px;

            font-family: 'Franklin Gothic Medium';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 28px;

            color: #EAE4E1;
        }

        .add_album{
            position: absolute;
            width: 62px;
            height: 62px;
            left: 1102px;
            top: 822px;
        }

        .add_song{
            position: absolute;
            width: 62px;
            height: 62px;
            left: 1691px;
            top: 823px;
        }


    </style>

</head>

<body>

<header>
    <div id="headerL">
        <div id="user">
            <!-- username -->
            <a href="Homepage.php"><h4>Username</h4></a>
        </div>

        <div >
            <h4 id="ident">Listener</h4>
        </div>

        <div id="logout">
            <!-- logout -->
            <a  href="Login.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/icon%20logout%20header.png" height="30" width="auto">
            </a>
        </div>
    </div>
    <div id="headerR">
        <!-- home -->
        <a id="home" href="Homepage.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/homepage.png" height="30" width="auto"></a>

        <!-- search -->
        <div id="search">
            <input class="searchbar" name="email" type="email" placeholder="search here">
            <button class="button" type="submit" ><a href="Search.php"><img src="Icones%20Rockstar%20Inc/header%20resto%20das%20paginas/search%20header.png" height="18" width="auto"></a></button>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <h1>Cherry Glazerr</h1>
        <div class="foto_perfil"><img src="imagens/profile-%20cherry_glazerr.jpg" height="193" width="193" alt="img"></div>

        <div class="caixa_esq" ></div>
        <div class="caixa_dir" ></div>

        <!--Albums-->

        <a  href="Album.php"><div class="foto_1"><img src="imagens/album%20-%20cherry%20glazerr_stuffed%20and%20ready.jpg" height="216" width="216" alt="img"></div></a>
        <a  href="Album.php"><div class="foto_2"><img src="imagens/album%20-%20cherry_glazerr_apocalipstick.jpg" height="216" width="216" alt="img"></div></a>
        <a  href="Album.php"><div class="foto_3"><img src="imagens/album%20-%20cherry%20glazerr_haxel%20princess.jpg" height="216" width="216" alt="img"></div></a>
        <a  href="Album.php"><div class="foto_4"><img src="imagens/album%20-%20cherry%20glazerr_papa%20cremp.jpg" height="216" width="216" alt="img"></div></a>

        <!--Texto Albums-->

        <div class="texto_foto_1">Stuffed & Ready</div>
        <div class="texto_foto_2">Apocalipstic</div>
        <div class="texto_foto_3">Haxel Princess</div>
        <div class="texto_foto_4">Papa Cremp</div>

        <!--Musicas-->

        <div class="ret_1"></div>
        <div class="ret_2"></div>
        <div class="ret_3"></div>
        <div class="ret_4"></div>
        <div class="ret_5"></div>
        <div class="ret_6"></div>
        <div class="ret_7"></div>
        <div class="ret_8"></div>

        <!--Texto Musicas-->

        <div class="texto_ret_1">Come Back Around - Moon Boots, ...</div>
        <div class="texto_ret_2">My Friend of Misery - Cherry Glazerr</div>
        <div class="texto_ret_3">Soft Drink - Cherry Glazerr</div>
        <div class="texto_ret_4">Big Bang - Cherry Glazerr</div>
        <div class="texto_ret_5">Rabbit Hole - Cherry Glazerr</div>
        <div class="texto_ret_6">Call Me (feat. Portugal. The Man)...</div>
        <div class="texto_ret_7">Daddy (Reggie Watts Remix) - ...</div>
        <div class="texto_ret_8">Juicy Socks - Cherry Glazerr</div>

        <!--Três pontinhos-->

        <div class="pont_1"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_2"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_3"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_4"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_5"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_6"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_7"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_8"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_9"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_10"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_11"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>
        <div class="pont_12"><img src="Icones%20Rockstar%20Inc/comuns%20a%20várias/3%20bolinhas.png" height="25" width="6" alt="img"></div>

        <!--Títulos-->

        <div class="albums"><img src="Icones%20Rockstar%20Inc/artist/albums.png" height="auto" width="301" alt="img"></div>
        <div class="songs"><img src="Icones%20Rockstar%20Inc/artist/singles.png" height="auto" width="304" alt="img"></div>

        <!--Botões-->

        <a href="UploadAlbum.php"><div class="add_album"><img src="Icones%20Rockstar%20Inc/artist%20page/botao%20add.png" height="auto" width="62" alt="img"></div></a>
        <a href="UploadSong.php"><div class="add_song"><img src="Icones%20Rockstar%20Inc/artist%20page/botao%20add.png" height="auto" width="62" alt="img"></div></a>

    </div>
</main>
<footer>
    <div class="foter">
        <div id="musica">
            <p class="tipo2">Nome musica</p>
            <p class="tipo3">Nome artista</p>
        </div>

        <div class="space"></div>

        <!-- botoes play -->
        <div class="botoes">
            <a class="play_left"><img src="Icones%20Rockstar%20Inc/footer/botao%20left%20play.png" height="30" width="auto"></a>
            <a class="play" ><img src="Icones%20Rockstar%20Inc/footer/play.png" height="50" width="auto"></a>
            <a class="play_right" ><img src="Icones%20Rockstar%20Inc/footer/botao%20right%20play.png" height="30" width="auto"></a>
        </div>

        <div class="space"></div>

        <div id=logo >
            <!-- Logo -->
            <a href="Home.php">
                <img src="Icones%20Rockstar%20Inc/footer/logo%20com%20texto%20footer.png" height="60" width="auto"/>
            </a>
        </div>
    </div>
</footer>

</body>
</html>