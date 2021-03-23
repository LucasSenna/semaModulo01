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

                <h2 class="font-bold">3.2 - SEMACE</h2>
                <hr>

                <p class="Texto">
                    A Superintendência Estadual do Meio Ambiente - SEMACE é uma Autarquia Estadual criada em 1987, pela Lei nº 11.411, para <strong>executar a Política Estadual de Meio Ambiente do Ceará.</strong>
                </p>

                <div class="text-center">
                    <a href="imagens/imagem23.png" data-toggle="lightbox" data-footer="Sede da SEMACE. Fortaleza/CE">
                        <img class="img-fluid wow fadeInDown" src="imagens/imagem23.png" alt="Alt_da_Imagem">
                    </a>
                    <p class="FonteFigura text-center">Sede da SEMACE. Fortaleza/CE
                        Foto: SEMACE</p>
                </div>
                <hr>

                <!-- Curiosidade -->
                <div class="Curiosidade">
                    <p class="Texto">
                        A SEMACE tem por finalidade executar a política estadual do meio ambiente, cumprindo e fazendo cumprir as normas estaduais e federais de proteção, recuperação, controle e utilização racional dos recursos ambientais.
                    </p>
                    <button class="btn btn-outline-success btn-block" type="button" data-toggle="modal" data-target="#Modal2">
                        <h5> CLIQUE AQUI E VEJA SUAS ATRIBUIÇÕES.</h5>
                    </button>
                </div>

                <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <ul style="list-style: none;">
                                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                                        Executar a Política Estadual de Meio Ambiente do Ceará, dando cumprimento às
                                        normas estaduais e federais de proteção, controle e utilização racional dos
                                        recursos ambientais;</li>
                                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                                        Estabelecer critérios e padrões de qualidade ambiental e de normas relativas ao
                                        uso e manejo de recursos ambientais;
                                    </li>
                                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                                        Administrar o licenciamento de atividades potenciais e efetivamente poluidoras do
                                        Estado do Ceará;
                                    </li>
                                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                                        Controlar a qualidade ambiental do Estado, mediante levantamento e permanente
                                        monitoramento dos recursos ambientais;
                                    </li>
                                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                                        Exercer o controle das fontes de poluição, de forma a garantir o cumprimento dos
                                        padrões de emissão estabelecidos;
                                    </li>
                                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                                        Promover ações de recuperação ambiental;
                                    </li>
                                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                                        Realizar ações de controle e desenvolvimento florestal;
                                    </li>
                                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                                        Exercer o poder de polícia em matéria ambiental, aplicando medidas acauteladoras
                                        e sanções administrativas, em decorrência da prática de infrações administrativas
                                        ambientais.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/imagem24.png" data-toggle="lightbox">
                                    <img class="img-fluid wow fadeIn" src="imagens/imagem24.png" alt="Alt_da_Imagem">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="text-center">
                                <a href="imagens/imagem25.png" data-toggle="lightbox">
                                    <img class="img-fluid wow fadeIn" src="imagens/imagem25.png" alt="Alt_da_Imagem">
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="FonteFigura text-center">Ações de monitoramento e fiscalização da SEMACE no Ceará.
                        Fotos: SEMACE.</p>
                </div>
                <hr>

                <p class="Texto">
                    Usualmente, a população confunde SEMA e SEMACE. Apesar de os nomes serem
                    parecidos, cada um tem sua função, como vimos até aqui.
                </p>

                <p class="Texto">
                    Resumidamente: a SEMA pensa e elabora as políticas públicas ambientais, e a SEMACE
                    as executa. Os dois órgãos são conhecidos como irmãos na estrutura do SIEMA. Um
                    sempre ajuda o outro.
                </p>

                <!-- Importante -->
                <div class="Importante">
                    <p class="ImportanteTitulo"> IMPORTANTE!</p>
                    <p class="Texto">
                        Saiba mais informações sobre a Superintendência Estadual do Meio Ambiente -
                        SEMACE. Acesse:
                        <a href="https://www.semace.ce.gov.br/" target="_blank"> www.semace.ce.gov.br </a>
                    </p>
                </div>
                <hr>

                <!-- Fique Atento -->
                <div class="FiqueAtento">
                    <p class="FiqueAtentoTitulo"> FIQUE LIGADO</p>
                    <p class="Texto">
                        Acompanhe as ações da SEMA nas redes sociais: <a href="https://www.instagram.com/semace_ce/" target="_blank"> @semace_ce</a>
                    </p>
                </div>
                <hr>


                <br><br>
                <div class="text-center">
                    <a href="Topico03.1.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03.3.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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