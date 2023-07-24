<?php include 'header.php' ?>

<div class="page">
    <div class="back">
        <img src="./assets/mulher.png" width="400" alt="">
    </div>
    <div class="funciona">
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
        <div class="test">
            <div class="paragrafo">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, natus amet vel impedit similique earum quis nemo est porro asperiores, a maxime blanditiis veritatis eaque consectetur modi incidunt. Dolores, inventore.</p>
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