<?php include 'header.php' ?>

<div class="page">
    <div class="back">
        <img src="./assets/sanduiche.png" width="400" alt="">
    </div>
    <div class="funciona">
        <h3>Ajude-nos a lançar um livro de receitas
            para pais e filhos</h3>
        <div class="test">
            <div class="paragrafo">
                <p>Queremos criar um livro de culinária bonito e útil para pais e filhos se divertirem na cozinha. A Kid
                    Cooking Organization é especializada na publicação de conteúdo dietético e na divulgação de uma
                    dieta
                    saudável.</p>
                <button id="openModal">Encontre um projeto</button>
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <h3>Faça uma doação</h3>
                        <span class="close">&times;</span>
                        <input type="text" id="valor" placeholder="$30">
                        <button id="enviar">Pagar agora</button>
                    </div>
                </div>
                <div id="mensagem"></div>
            </div>
            <div>
                <p>$2.500</p>
                <div class="porcentagem2  porcentagem3"></div>
            </div>

        </div>

    </div>
   <script src="modal.js"></script>
</div>




<?php include 'rodape.php' ?>