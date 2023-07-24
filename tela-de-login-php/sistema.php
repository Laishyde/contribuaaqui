<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: testlogin.php');


    $logado = $_SESSION['email'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="test.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&family=Roboto:ital@1&family=Tilt+Warp&display=swap"
        rel="stylesheet">
</head>



<body>
    <div class="content2">
        <div class="gg">
            <p id="mensagem"></p>

        </div>
    </div>
    <script type="text/javascript">
    const texto = "Obrigada por fazer parte deste projeto.  Laís Cristina";
let index = 0;

function escrever() {
  document.getElementById("mensagem").textContent += texto[index];
  index++;

  if (index < texto.length) {
    setTimeout(escrever, 100); // Ajuste o valor para controlar a velocidade da digitação
  }
}

escrever();

   
</script>

</body>

</html>