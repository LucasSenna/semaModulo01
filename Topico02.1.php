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

                <h2 class="font-bold">2.1 - Educação Ambiental na Lei</h2>
                <hr>

                <!-- Citação -->
                <div class="col-md-12">
                    <blockquote class="blockquoteEad">
                        <p class="Texto">“Educação Ambiental é um processo contínuo de formação visando o desenvolvimento de
                            uma consciência crítica sobre relações históricas, entre a sociedade e a natureza, capaz
                            de promover a transformação de hábitos, atitudes e valores necessários à
                            sustentabilidade ambiental para efeito desta Lei.”
                        <footer class="blockquote-footer">(CEARÁ, 2011)</footer>
                    </blockquote>
                </div>
                <hr>

                <p class="Texto">
                    Esse conceito está previsto na lei estadual que traz os detalhes de como a educação
                    ambiental deve ser organizada e trabalhada no Ceará. Essa lei se chama <strong>Política
                        Estadual de Educação Ambiental, Lei Estadual nº14.892 de 2011.</strong>
                </p>

                <p class="Texto">
                    Essa Política elenca os objetivos da Educação Ambiental no Ceará:
                </p>

                <p class="pl-5">
                <ul style="list-style: none;">
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                        O desenvolvimento de uma consciência ambiental para o pleno exercício dos
                        direitos e dos deveres dos seres humanos com o meio ambiente;</li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                        A promoção do acesso aos recursos naturais de forma sustentável para garantir
                        sua preservação para as gerações futuras, atendidas as necessidades da atual;</li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                        O incentivo à participação de todos na edificação de uma sociedade
                        ambientalmente equilibrada;</li>
                    <li class="Texto"><i class="fas fa-angle-right CorLaranja"></i>
                        A integração entre os municípios, os demais estados e outros países, estimulando
                        a solidariedade entre todos, visando fomentar a troca de conhecimentos de
                        sustentabilidade para o futuro da humanidade.</li>
                </ul>
                </p>
                <hr>

                <p class="Texto">
                    A Coordenação da Política Estadual de Educação Ambiental é de responsabilidade de um
                    órgão gestor, formado pela Secretaria do Meio Ambiente do Estado do Ceará (SEMA) e
                    pela Secretaria da Educação do Estado do Ceará (SEDUC). O Órgão Gestor define todas
                    as diretrizes da educação ambiental a serem implementadas no Estado do Ceará. Ele
                    também faz a articulação, coordenação, monitoramento e avaliação dos planos,
                    programas e projetos na área de educação ambiental que ocorram no âmbito estadual.
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
                            <a href="https://www2.al.ce.gov.br/legislativo/legislacao5/leis2011/14892.htm" target="_blank">CLIQUE AQUI Para ler sobre a Política Estadual de Educação Ambiental - Lei Estadual no 14.892/2011.</a>
                        </p>
                    </div>
                </div>

                <br><br>
                <div class="text-center">
                    <a href="Topico02.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.2.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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