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

                <h2 class="font-bold">3.3 - COEMA</h2>
                <hr>

                <p class="Texto">
                    O Conselho Estadual do Meio Ambiente – COEMA foi criado em 1987 (Lei nº 11.411) e
                    modificado pelas Leis 12.910/1999 e 15.798/2015. O COEMA é vinculado à Secretaria do
                    Meio Ambiente, onde o Secretário do Meio Ambiente exerce a Presidência desse
                    Conselho.
                </p>

                <div class="bd-callout bd-callout-success">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h4 style="color:black">O COEMA tem por finalidade assessorar o governador em assuntos de política de
                                            proteção ambiental. Cabe também ao COEMA:</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="Texto">
                                        - Aprovar planos e programas na área do meio ambiente;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Aprovar o licenciamento de projetos, públicos ou privados, que apresentem aspectos potencialmente poluidores ou causadores de significativa degradação do meio ambiente;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Sugerir à SEMACE a suspensão das atividades poluidoras, contaminadoras e degradadoras do ambiente.
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Titulo Figura -->
                <div class="text-center">
                    <a href="imagens/imagem26.png" data-toggle="lightbox" data-footer="Reunião do COEMA. Fortaleza/CE.">
                        <img class="img-fluid wow fadeIn" src="imagens/imagem26.png" alt="Alt_da_Imagem">
                    </a>
                    <p class="FonteFigura">Reunião do COEMA. Fortaleza/CE.
                        Foto: SEMACE.</p>
                </div>
                <hr>

                <p class="Texto">
                    O Coema é composto por 37 representantes de órgãos públicos do Governo Estadual e
                    Federal, Assembleia Legislativa, universidades públicas, instituições da sociedade civil, incluindo entidades de classe de profissionais de nível superior e do movimento ambiental.
                </p>

                <div class="text-center">
                    <img src="imagens/imagem27.png" class="img-fluid wow fadeInUp" alt="Responsive image">
                </div>

                <p class="Texto">
                    Todos os membros têm direito a voto. O objetivo é que decisões sobre grandes projetos,
                    normas reguladoras e demais assuntos relevantes ao Estado sejam discutidas e votadas
                    por diferentes setores da sociedade.
                </p>

                <!-- Importante -->
                <div class="Importante">
                    <p class="ImportanteTitulo"> IMPORTANTE!</p>
                    <p class="Texto">
                        Saiba mais informações sobre a
                        COEMA. Acesse: <a href="https://www.semace.ce.gov.br/coema/" target="_blank"> www.semace.ce.gov.br /coema/ </a>
                    </p>
                </div>


                <br><br>
                <div class="text-center">
                    <a href="Topico03.2.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03.4.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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