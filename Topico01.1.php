<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->

        <div class="main-content container-fluid">
            <div class="page-title">

                <h2 class="font-bold">1.1 - Meio ambiente ecologicamente equilibrado – direito e dever de todos</h2>
                <hr>

                <p class="Texto">
                    A <strong>Constituição Federal de 1998</strong> é a norma que rege o país. É a lei máxima. Todo o
                    arcabouço jurídico brasileiro está registrado nela. E um capítulo inteiro da Constituição é
                    dedicado ao Meio Ambiente (Capítulo VI). Especificamente o <strong>Artigo 225:</strong>
                </p>

                <div class="col-md-12">
                    <blockquote class="blockquoteEad">
                        <p class="Texto">“Todos têm direito ao meio ambiente ecologicamente equilibrado, bem de uso comum do
                            povo e essencial à sadia qualidade de vida, impondo-se ao poder público e à coletividade
                            o dever de defendê-lo e preservá-lo para as presentes e futura gerações”.
                        <footer class="blockquote-footer">(BRASIL, 1988)</footer>
                    </blockquote>
                </div>
                <br>

                <p class="Texto">
                    Esse artigo que você acabou de ler é a base de todas as leis ambientais que existem no
                    Brasil. A partir dele, são criadas leis federais, estaduais e municipais com objetivo de
                    garantir o <strong>direito</strong> a um meio ambiente ecologicamente equilibrado, assim como reforçar o
                    <strong>dever</strong> de todos (tanto o poder público quanto a população) para a preservação ambiental.
                </p>

                <div class="text-center">
                    <img src="imagens/imagem09.png" class="img-fluid wow fadeInDown" alt="Responsive image">
                </div>

                <p class="Texto">
                    Quando falamos em equilíbrio ecológico, devemos levar em conta os elementos naturais,
                    artificiais e culturais, que são aspectos fundamentais para o desenvolvimento da vida. A
                    análise desses fatores pode indicar se a área está em equilíbrio ecológico ou não.
                </p>


                <div class="bd-callout bd-callout-success">
                    <p class="Texto">
                        Você mesmo pode fazer isso. Observe a sua comunidade, por exemplo. Existem árvores
                        nativas? As lagoas, rios ou praia estão preservados? Existe lixo nas ruas? Os muros das
                        casas estão pichados? As pessoas ainda se encontram para eventos culturais, ou mesmo
                        para uma conversa nas praças? Existem animais abandonados ou trancados em gaiolas?
                        A agricultura ainda usa veneno? Existe esgoto a céu aberto? Como está a qualidade do
                        ar?
                    </p>
                </div>

                <div class="text-center">
                    <img src="imagens/imagem10.png" class="img-fluid wow fadeInUp" alt="Responsive image">
                </div>

                <p class="Texto">
                    Essas e outras inúmeras perguntas devem ser levadas em consideração para saber se
                    sua comunidade está em equilíbrio ecológico. Daqui pra frente, pense sempre na sua
                    comunidade, reflita sobre os problemas e as possíveis soluções, e no que você pode
                    ajudar!
                </p>

                <!-- Saiba Mais -->
                <div class="accordion" id="accordion1">
                    <div class="cardSaibaMais">
                        <div class="card-headerSaibaMais" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-saibaMais" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="SaibaMaisTitulo"> SAIBA MAIS / ITEM RECOLHÍVEL </div>
                                </button>
                            </h5>
                        </div>
                    </div>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1">
                    <div class="SaibaMaisTexto">
                        <p class="Texto">
                            <a href="https://www.senado.leg.br/atividade/const/con1988/con1988_26.06.2019/art_225_.asp" target="_blank">CLIQUE AQUI</a> Para ler o Artigo 225 da Constituição Federal de 1998.
                        </p>
                    </div>
                </div>


                <br><br>
                <div class="text-center">
                    <a href="Topico01.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
                </div>


                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });

                    $(function() {
                        $('[data-toggle="popover"]').popover()
                    })

                    $('.popover-dismiss').popover({
                        trigger: 'focus'
                    })

                    $(document).ready(function() {
                        new WOW().init();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>