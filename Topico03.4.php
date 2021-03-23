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

                <h2 class="font-bold">3.4 - BPMA</h2>
                <hr>

                <div class="bd-callout bd-callout-success">
                    <p class="Texto">
                        O Batalhão de Políciamento de Meio Ambiente – BPMA foi criado em 1991 e faz parte da estrutura organizacional da Polícia Militar do Ceará. Além de executar as competências estabelecidas na Constituição do Estado, com a criação do SIEMA em 2021, recebeu as seguintes atribuições:
                    </p>
                    <ul style="list-style: none;">
                        <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                            Exercer o policiamento do meio ambiente na área de fiscalização ambiental;
                        </li>
                        <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                            Aplicar sanções administrativas ambientais, em formulário único do Estado, e encaminhá-lo à SEMACE, para julgamento do correspondente processo administrativo;
                        </li>
                        <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                            Apoiar os órgãos envolvidos com a defesa e preservação do meio ambiente, garantindo-lhes o exercício do poder de polícia de que são detentores, observadas as determinações emanadas dos escalões superiores da Polícia Militar;
                        </li>
                        <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                            Articular-se com a SEMACE e SEMA no planejamento de ações de fiscalização e no atendimento de denúncias;
                        </li>
                        <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                            Estimular condutas ambientalmente adequadas para a população;
                        </li>
                        <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                            Fomentar a educação ambiental em articulação com a Secretaria do Meio Ambiente - SEMA;
                        </li>
                    </ul>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/imagem28.png" data-toggle="lightbox">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/imagem28.png" alt="Alt_da_Imagem">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/imagem29.png" data-toggle="lightbox">
                                    <img class="img-fluid wow fadeInRight" src="imagens/imagem29.png" alt="Alt_da_Imagem">
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="FonteFigura text-center">Ações contra o tráfico de animais silvestres e desmatamento no Ceará.
                        Fotos: BPMA.</p>
                </div>

                <!-- Fique Atento -->
                <div class="FiqueAtento">
                    <p class="FiqueAtentoTitulo"> FIQUE LIGADO</p>
                    <p class="Texto">
                        Acompanhe as ações do BPMA nas redes sociais: <a href="https://www.instagram.com/bpma_pmce/" target="_blank"> @bpma_pmce</a>                                          
                    </p>
                </div>


                <br><br>
                <div class="text-center">
                    <a href="Topico03.3.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03.5.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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