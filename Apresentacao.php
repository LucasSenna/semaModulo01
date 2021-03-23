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

                <h2 class="font-bold">Apresentação</h2>
                <hr>

                <p class="Texto">
                    Neste curso você conhecerá mais sobre os eventos presenciais, digitais e híbridos como ferramenta de educação.
                </p>

                <p class="Texto">
                    Apresentaremos o panorama do comportamento do novo estudante digital, os formatos e exemplos de eventos presenciais, híbridos e 100% virtuais como ferramenta de educação e tópicos relevantes para criar e planejar eventos digitais.
                </p>
                <br>

                <h2 class="font-bold">Objetivo</h2>

                <p class="Texto">
                    Construir um repertório básico para o planejamento de eventos digitais de caráter técnico, científico, educacional e corporativo.
                </p>


                <br><br>

                <div class="text-center">
                    <a href="Topico01.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
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
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>