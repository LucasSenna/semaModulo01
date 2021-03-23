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

                <h2 class="font-bold">2.2 - Atuação do Agente Jovem Ambiental na Educação Ambiental</h2>
                <hr>

                <p class="Texto">
                    O Agente Jovem Ambiental é um ator social que será capacitado para atuar em sua área
                    de influência, com o objetivo de sensibilizar mais pessoas para o cuidado com o nosso
                    planeta. Sua tarefa é levar a Educação Ambiental por onde for, ou seja, na sua
                    Comunidade, Bairro, Escola, Distrito ou Município.
                </p>

                <p class="Texto">
                    Ao longo deste curso, você irá aprender muita coisa sobre meio ambiente, desde
                    germinar uma planta, até elaborar um projeto de educação ambiental. Aliás, no final deste
                    curso, será elaborado um projeto, chamado de Plano de Ação Comunitário (PAC), no qual
                    vão constar as atividades dos AJAs no seu município. Então vá exercitando seu olhar
                    sobre a sua comunidade e o seu município: quais os problemas, quais as soluções, quais os meios para resolver, quais os parceiros, dentre outros itens que vamos explicar no
                    último módulo.
                </p>

                <div class="bd-callout bd-callout-success">
                    <p class="Texto">
                        Perguntas que devem ficar na cabeça dos AJAS desde já:
                    </p>
                </div>

                <div class="bd-callout bd-callout-warning">
                    <ul class="Texto pl-5">
                        <li>
                            Quais ações podem ser realizadas?
                        </li>
                        <li>
                            Quem, quando e onde pode realizá-las?
                        </li>
                        <li>
                            Quais podem ser os parceiros que apoiem cada ação?
                        </li>
                        <li>
                            Quais são os objetivos ou resultados esperados de cada ação?
                        </li>
                </div>

                <br><br>
                <div class="text-center">
                    <a href="Topico02.1.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.3.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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