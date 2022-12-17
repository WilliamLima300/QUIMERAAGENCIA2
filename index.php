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

    <link rel="stylesheet" type="text/CSS" href="CSS/styles.css">

    <link rel="stylesheet" type="text/css" href="CSS/bulma.min.css">

    <link rel="icon" href="images/Logo/icone_quimera_300x300.png" type="image/icon type">

    
   
</head>


<body>
    <script src="https://kit.fontawesome.com/98fabc8589.js" crossorigin="anonymous"></script>
    <header>
       
        <a href="index.php"><img src="images/Logo/logo_02.png"></a>

        <a href="#form"><button  class="btn">Faça um orçamento!</button></a>

    </header>

    <section>
        <div class="bloco1" style="margin-bottom:30px">
            <h1>A sua marca<br> reflete o seu sonho.</h1>

            <h2>Identidade Visual</h2>

            <p> A Agência Quimera alia modernidade, sensibilidade e
                conexão para fazer com que o seu negócio, seja exatamente
                o que ele é: a materialização daquilo que está em sua mente e seu coração.<br><br>
                A quimera é um ser mitológico ligado à fantasia e à homogeneidade de ideias.<br><br>
                E ela reflete exatamente isso: juntar as suas ideias com a nossa
                expertise para que o resultado final da sua marca seja perfeito
                para você e atrativo para seu cliente. Vamos juntos!<br><br>
            </p>
            
        </div>
    </section>

    <section class="main-projeto">

        <?php
            if(is_array($projetos) && !empty($projetos)){ //verificar se tem cadastros de projetos
                foreach($projetos as $key => $value){ // imprimir os projetos na tela
        ?>
                <article>

                    <a href="page.php?id=<?=$value['id'];?>"> 
                        <img src=<?=$value['imagem'];?> alt="<?=$value['nome']?>">
                    </a>

                </article>
                
                <?php
                        }
                    }else{
                        echo "<h1>Devido algum erro estamos sem projetos para apresentar por hoje pessoal &#128077</h1>"; //caso nao tenha projetos para imiprimir
                    }
                ?>
    </section>

    <section class="main-servicos">
        <h1>E que tal<br>irmos <span style="color: #33B0A4;">além?</span></h1>

        <div class="image-servico1"></div>
        <hr size="8" width="16%" align="center" color="#FFF" >
        <div class="image-servico2"></div>
    </section>

    <!-- Slideshow container -->
    <div class="slideshow-Container2 fade2">
        <!-- Full images with numbers and message Info -->
        <div class="Containers2">
        <img src="images/Banner/banner_deixe_uma_marca_foda_no_mundo_1384x486.png" style="width: 100%"/>
        </div>

        <div class="Containers2">

        <img src="images/Banner/banner_entre_em_contato_1384x486.png" style="width: 100%"/>

        </div>


       <script>
        var slidePosition = 1;
        Slide(slidePosition);

        // forward/Back controls
        function plusSlides(n) {
            Slide((slidePosition += n));
        }

        //  images controls
        function currentSlide(n) {
            Slide((slidePosition = n));
        }

        function Slide(n) {
            var i;
            var slides = document.getElementsByClassName("Containers2");
            var circles = document.getElementsByClassName("dots2");
            if (n > slides.length) {
            slidePosition = 1;
            }
            if (n < 1) {
            slidePosition = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            }
            for (i = 0; i < circles.length; i++) {
            circles[i].className = circles[i].className.replace(" enable", "");
            }
            slides[slidePosition - 1].style.display = "block";
            circles[slidePosition - 1].className += " enable";
        }

        function Slide() {
            var i;
            var slides = document.getElementsByClassName("Containers2");
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            }
            slidePosition++;
            if (slidePosition > slides.length) {
            slidePosition = 1;
            }
            slides[slidePosition - 1].style.display = "flex";
            setTimeout(Slide, 4000); // Change image every 2 seconds
        }
        </script>
    
      
    </div>

    <footer>


        <div class="main-contato" id="form">
            <section class="section ">
                <div class="container">
                    <div class="columns is-mobile">
                        <div class="column is-mobile">
                            <h1 class="title has-text-centered" style="font-family:Hagrid-Regular;font-weight:normal;color:#33B0A4;">Faça um orçamento!</h1>
                            
                            <form action="https://getform.io/f/d3534c8d-12d8-4b73-a072-744d20ef997d" method="POST">
                                <div class="field">
                                    <label class="label"></label>
                                    <div class="control is-large">
                                        <input class="input is-primary" style="border-color:#FFF;font-family: Qanelas-Regular, Helvetica;background-color:#FFF; color:#24242c;" name="nome" class="input is-info" type="text" placeholder="Digite seu nome" name="name" required>
                                    </div>
                                </div>
            
                                <div class="field">
                                    <label class="label"></label>
                                    <div class="control is-large">
                                        <input class="input is-primary  " style=" border-color:#FFF;font-family: Qanelas-Regular, Helvetica;background-color:#FFF; color:#24242c;" name="email" class="input is-info" type="email" placeholder="Digite seu e-mail:" name="email" required>
                                    </div>
                                </div>
            
            
            
                                <div class="field">
                                    <label class="label"></label>
                                    <div class="control is-large">
                                        <textarea class="textarea is-primary" style="border-color:#FFF;font-family: Qanelas-Regular, Helvetica;background-color:#FFF;color:#24242c;" name="mensagem" class="textarea is-info" placeholder="Escreva uma mensagem:" maxlength="2000" name="message" required></textarea>
                                    </div>
                                </div>

                                <div class="field">
                                    
                                    <div class="control is-large">

                                        <label class="checkbox" style="color:#FFF" dark>
                                            <input type="checkbox" name="TermsandConditions" value="yes" checked>
                                            Li e concordo com a 
                                            <a  style="color:#fff;" target="_blank" href="./TERMO DE ADEQUAÇÃO À  LGPD.pdf">
                                            política de privacidade de dados</a>.
                                        </label>
                                    
                                    </div>
                                </div>
            
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button style="border-color:#FFF;font-family: Qanelas-Regular, Helvetica;background-color:#FFF;color:#000047;font-weight:bold;" class="button is-link is-medium" >Enviar!</button>
                                    </div>
                                </div>
                            </form>
            
                        </div>
                    </div>
                </div>
            </section>
         
        </div>

        <div class="social">

            <p>Veja mais do<br> nosso trabalho</p>

            <div class="s-m">

                <a href="https://www.behance.net/quimeradesigner?tracking_source=search_projects_recommended%7Cquimeradesigner"target="_blank"><i class="fab fa-behance"></i></a>

                                
                <a href="https://www.instagram.com/quimera.designer/"target="_blank"><i class="fab fa-instagram"></i></a>
                
                
                             
                
            </div>

            <a href="https://github.com/WilliamLima300" target="_blank" ><img src="images/Assinatura/assinatura.png"></a>
            
        </div>

    </footer>

</html>
