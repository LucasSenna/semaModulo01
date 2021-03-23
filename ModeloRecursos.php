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

                <hr>
                <!-- Título -->
                <h2 class="font-bold">Titulo</h2>
                <hr>
                <!-- Sub Título -->
                <p class="SubTitulo">Sub_Titulo</p>
                <hr>
                <!-- Sub Sub Título -->
                <p class="SubSubTitulo">Sub_Sub_Titulo</p>
                <hr>
                <!-- Texto -->
                <p class="Texto">Texto</p>
                <hr>

                <!-- Citação -->
                <div class="col-md-12">
                    <blockquote class="blockquoteEad">
                        <p class="Texto"><strong>“A educação não muda o mundo, mas muda as pessoas que vão mudar o mundo”.</strong>
                        <footer class="blockquote-footer">Paulo Freire</footer>
                    </blockquote>
                </div>
                <br>

                <!-- Importante -->
                <div class="Importante">
                    <p class="ImportanteTitulo"> IMPORTANTE!</p>
                    <p class="Texto">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ut natus officia unde autem laborum! Explicabo nisi nostrum unde, aspernatur, eum consectetur rem animi cum officia laudantium ullam consequuntur amet?
                    </p>
                </div>
                <hr>

                <!-- Titulo Figura -->
                <div class="text-center">
                    <p class="TituloFigura"><strong>Figura 1:</strong> Titulo_da_Figura</p>
                    <a href="imagens/imagem01.png" data-toggle="lightbox" data-footer="Texto_Imagem_Modal">
                        <img class="img-fluid" src="imagens/imagem01.png" alt="Alt_da_Imagem">
                    </a>
                    <p class="FonteFigura">Legenda_da_Imagem</p>
                </div>
                <hr>
                <!-- Fique Atento -->
                <div class="FiqueAtento">
                    <p class="FiqueAtentoTitulo"> FIQUE LIGADO</p>
                    <p class="Texto">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ut natus officia unde autem laborum! Explicabo nisi nostrum unde, aspernatur, eum consectetur rem animi cum officia laudantium ullam consequuntur amet?
                    </p>
                </div>
                <hr>
                <!-- Curiosidade -->
                <div class="Curiosidade">
                    <p class="CuriosidadeTitulo"> Curiosidades</p>
                    <p class="Texto">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum ut natus officia unde autem laborum! Explicabo nisi nostrum unde, aspernatur, eum consectetur rem animi cum officia laudantium ullam consequuntur amet?
                    </p>
                </div>
                <hr>
                <!-- Nota de Rodapé -->
                <p class="NotaDeRodape"> Nota_de_Rodapé_fica_aqui</p>
                <hr>
                <!-- Atividade -->
                <div>
                    <p class="AtividadeTitulo"> <br>Atividade</p>
                    <p class="AtividadeTexto">Texto_do_Atividade</p>
                </div>
                <hr>

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

                <!-- HR LATERAL VERDE -->
                <div class="bd-callout bd-callout-success">
                    <p class="Texto">
                        <strong>Reflita em silêncio: “O que é meio ambiente?” Pense aí por alguns segundos.</strong>
                    </p>
                </div>

                <!-- HR LATERAL LARANJA -->
                <div class="bd-callout bd-callout-warning">
                    <p class="Texto">
                        O que veio na sua mente? Plantas, bichos, um rio, uma praia, um açude, o sertão, a
                        chuva?
                    </p>
                </div>



                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
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

</html>