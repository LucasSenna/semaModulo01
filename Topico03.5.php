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

                <h2 class="font-bold">3.5 - Fundo Estadual do Meio Ambiente – FEMA</h2>
                <hr>

                <p class="Texto">
                    O Fundo Estadual do Meio Ambiente – FEMA, vinculado à SEMA, foi criado pela Lei
                    Complementar 231, 13 de Janeiro de 2021, com a finalidade de reunir recursos em prol
                    do desenvolvimento de projetos e políticas que visem à conservação da biodiversidade, o
                    uso racional e sustentável de recursos ambientais, incluindo a manutenção, a melhoria ou
                    a recuperação da qualidade ambiental, objetivando elevar a qualidade de vida da
                    população.
                </p>

                <div class="bd-callout bd-callout-success">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h4 style="color:black">O FEMA recebe dinheiro de diversas fontes:</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="Texto">
                                        - Dotações orçamentárias a ele destinadas;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Créditos adicionais suplementares a ele destinados;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Indenizações por infrações à legislação ambiental;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Receitas advindas das multas aplicadas, após a publicação desta Lei, pelos órgãos
                                        estaduais de fiscalização do Sistema Estadual do Meio Ambiente - SIEMA;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - 50% (cinquenta por cento) da receita advinda da multa aplicada pelos órgãos estaduais
                                        de fiscalização do Sistema Estadual do Meio Ambiente - SIEMA, com fundamento no
                                        caput e §§ do art. 11 da Lei Complementar nº 162, de 2016;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Receitas advindas de Créditos de Carbono;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Os recursos provenientes de empréstimos, repasses, doações, subvenções, auxílios,
                                        contribuições, legados ou quaisquer outras transferências, a qualquer título, de pessoas
                                        físicas ou jurídicas nacionais, estrangeiras ou internacionais, de direito público ou privado,
                                        diretamente ou por meio de contratos, convênios e congêneres, destinados
                                        especificamente ao FEMA;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Rendimento de qualquer natureza derivado da aplicação ou alienação de seu patrimônio;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Operações de crédito realizadas com o fim específico de atender às despesas vinculadas
                                        ao Fundo;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Os rendimentos de aplicações financeiras dos recursos provenientes da Compensação
                                        Ambiental;
                                    </th>
                                </tr>
                                <tr>
                                    <th class="Texto">
                                        - Outras receitas eventuais.
                                    </th>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

                <br><br>
                <div class="text-center">
                    <a href="Topico03.4.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico03.6.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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