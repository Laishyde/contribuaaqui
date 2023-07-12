// Obtém os elementos do DOM
const openModalButton = document.getElementById("openModal");
const modal = document.getElementById("modal");
const closeButton = document.getElementsByClassName("close")[0];
const enviarButton = document.getElementById("enviar");
const mensagemElement = document.getElementById("mensagem");

// Evento de clique para abrir o modal
openModalButton.addEventListener("click", function () {
    modal.style.display = "block";
});

// Evento de clique para fechar o modal
closeButton.addEventListener("click", function () {
    modal.style.display = "none";
});

// Evento de clique para enviar o valor e exibir a mensagem de agradecimento
enviarButton.addEventListener("click", function () {
    const valor = document.getElementById("valor").value;
    mensagemElement.textContent = "Obrigado por enviar o valor " + valor + "!";
    modal.style.display = "none";

    window.location.href = "obrigado.php";
});
