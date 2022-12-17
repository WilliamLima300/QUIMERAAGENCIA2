<?php
    //incluir a pagina dados com as configurações

    include("dados.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agência Quimera</title>

    <link rel="stylesheet" type="text/CSS" href="CSS/styles2.css">


    <link rel="icon" href="images/Logo/icone_quimera_300x300.png" type="image/icon type">

    
   
</head>


<body>

<header class="topo-projetos">

    <a style="width:25%"href="index.php"><img src="images/Logo/logo_02.svg" alt="LOGO"></a>

    <a href="index.php"><button  class="btn">Voltar !</button></a>

</header>

<section class="projeto-marca">
    <?php
        if(isset($_GET['id']) && !empty($_GET['id'])){ // validando a variavel ID

            $id = $_GET['id'];
        
            foreach($projetos as $key => $value){ // imprimir o projeto selecionado pela ID na Tela
                if($value['id']==$id){
    ?>
    <article class="projeto-marca">
        <h1>Identidade Visual</h1>
        
      
        <a href="page.php?id=<?=$value['id'];?>"><img src=<?=$value['apresentacao'];?>
                alt="<?=$value['nome']?>"></a>

    </article>
    <?php
                }
            }
        }else{
            echo "<p>Escolha outro projeto &#128077<p>";
        }
    ?>

</section>

<div class="texto-final">
    
    <p> Vamos fazer<br>algo assim juntos ?</p>

    <a href="https://api.whatsapp.com/send?phone=5531998128719&text=Olá%20gostaria%20de%20fazer%20um%20orçamento."><button  class="btn-final">Faça um orçamento!</button></a>

    <p><br></p>

</div>

<footer>

<a href="https://github.com/WilliamLima300" target="_blank" ><img src="images/Assinatura/assinatura.png"></a>
</footer>

</html>