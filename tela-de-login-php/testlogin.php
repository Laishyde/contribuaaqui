<?php
session_start();

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// if($conexao ->connect_errno){

//     echo "Erro";
// }else{
//     echo "conexão sucesso";
// }
if(isset($_POST['submit'])){

// print_r($_POST['senha']);
//  print_r('<br>');
//   print_r($_POST['email']);



$email = ($_POST['email']);
$senha = ($_POST['senha']);
$result = mysqli_query($conexao, "INSERT INTO usuarios(email, senha) VALUES('$email', '$senha')");

$sql = "SELECT * FROM usuarios WHERE email = '$email ' and senha = '$senha'";
$result = $conexao ->query($sql);


if(mysqli_num_rows($result) < 1){
     unset ($_SESSION['email'] );
     unset($_SESSION['senha'] );
    header('Location: testlogin.php');
}
else{
    $_SESSION['email'] = $email;
     $_SESSION['senha'] = $senha;
     header('Location: second.php');
}
}
else{
    header('Location: testlogin.php');

}



?>
