<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Krona+One&family=Playfair+Display&family=Poppins&family=Roboto:ital@1&family=Tilt+Warp&display=swap"
        rel="stylesheet">
    <title>New Project</title>
</head>

<style type="text/css">

    body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Krona One', sans-serif;
    background-image: url(./assets/kkajsd.png);
    width: 100%;
    height: 100vh;
}
ul{
    display: flex;
    list-style: none;
    justify-content: space-around;
}
button{
   padding: 5px 20px;
   background-color: #0A0A0A;
   color: #fff;
   border-radius: 8px;
}
input{
    padding: 5px 20px;
    border-radius: 8px;
    border: 1px solid #ccc;
}
.content{
    display: flex;
    justify-content: end;   
}
.content span {
    font-size: 32px;
}
h1{
    font-size: 90px;
    margin: 0;
}
.text{
    margin-top: 80px;
  
}
p{
    width: 500px;
    font-size: 15px;
}
.btn{
     padding: 5px 48px;

}


</style>
<body>
   
    <?php include 'menu.php' ?> 
   
    <div class="content">
        <div class="text">
            <span>Seu apoio faz a diferença!</span>
            <h1>contribua aqui</h1>
            <span>O poder da comunidade financeira.</span>
            <div>
                <p>Ajudamos mais de 3.500 projetos e causas. De
                 o pontapé inicial em sua ideia e inicie projetos 
                 incríveis.</p>
                 <button class="btn">começe hoje</button>
            </div>
        </div>
        <img src="./assets/teste.png" width="450" alt="icone de mão com coração">
    </div>
    
</body>
</html>