<?php
    include_once("conexao.php");
    
    if(isset($_POST['cadastrar'])) {
        $nome = $_POST['nome']; 
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
    
        $sql = "INSERT INTO cadastro_usuarios(nome, email, telefone, mensagem) VALUES('$nome', '$email', '$telefone', '$mensagem')";
        
        if(mysqli_query ($connection, $sql)) {
            echo "<script>
                    window.alert('Dados registrados com sucesso!!')
                    window.location.href = 'index.php'
                  </script>";
        } else {
            echo "Erro ao registrar as informações!!";
        }
        
    }
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- Poppins -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!-- League Gothic -->

    <script src="https://kit.fontawesome.com/b334bf6b00.js" crossorigin="anonymous"></script> <!-- Font Awesome -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <!-- Jquery Libraries Cdnjs-->
    
    <script src="https://unpkg.com/scrollreveal"></script> <!-- https://scrollrevealjs.org/-->

    <link rel="stylesheet" href="styles.css">
    <title>Home Robuu</title>
</head>

<body>

    <header>

        <img src="robot-LOGO-01.png" alt="logo">


        <nav id="navbar">
            <ul id="nav_list">
                <li class="nav-item active"><a href="#showcase">Home</a></li>
                <li class="nav-item active"><a href="#products">Produtos</a></li>
                <li class="nav-item active"><a href="#testimonials">Avaliações</a></li>
                <li class="nav-item active"><a href="#contactus">Contato</a></li>
            </ul>

        <!-- botão mobile -->
        <button id="mobile_btn">
            <i class="fa-solid fa-bars"></i>
        </button>

    </nav>
    
    <!-- mobile menu-->
    <div id="mobile_menu">
        <ul id="mobile_nav_list">
            <li class="nav-item"><a href="#showcase">Home</a></li>
            <li class="nav-item"><a href="#products">Produtos</a></li>
            <li class="nav-item"><a href="#testimonials">Avaliações</a></li>
            <li class="nav-item"><a href="#contactus">Contato</a></li>
        </ul>
    </div>

    </header>

    <!-- VITRINE primeiros robôs -->
    <section class="container" id="showcase">

        <div class="list">
            <div class="item active">
                <div class="rob-img">
                    <img src="robo-removebg-preview.png" alt="imagem robo">
                </div>
                <div class="content">
                    <p class="rob-information">
                        2024
                    </p>
                    <h2>
                        Robuu1
                    </h2>
                    <p class="description">
                        Conecte-se à natureza com tecnologias sustentáveis para um turismo consciente.
                    </p>
                    <!--                     <button class="information" id="btn_wht">
                        <a href="https://www.whatsapp.com/" target="_blank">Compre ou Alugue</a>
                    </button> -->
                </div>
            </div>

            <div class="item">
                <div class="rob-img">
                    <img src="robo2-removebg-preview.png" alt="imagem robo">
                </div>
                <div class="content">
                    <p class="rob-information">
                        2024
                    </p>
                    <h2>
                        Robuu2
                    </h2>
                    <p class="description">
                        Conecte-se à natureza com tecnologias sustentáveis para um turismo consciente.
                    </p>
                    <!--                     <button class="information" id="btn_wht">
                        <a href="https://www.whatsapp.com/" target="_blank">Compre ou Alugue</a>
                    </button> -->
                </div>
            </div>

            <div class="item">
                <div class="rob-img">
                    <img src="robo3-removebg-preview.png" alt="imagem robo">
                </div>
                <div class="content">
                    <p class="rob-information">
                        2024
                    </p>
                    <h2>
                        Robuu3
                    </h2>
                    <p class="description">
                        Conecte-se à natureza com tecnologias sustentáveis para um turismo consciente.
                    </p>
                    <!--                     <button class="information" id="btn_wht">
                        <a href="https://www.whatsapp.com/" target="_blank">Compre ou Alugue</a>
                    </button> -->
                </div>
            </div>

        </div>

        <div class="arrows">
            <button id="prev"> <img src="arrow.png" alt="seta esquerda"></button>
            <button id="next"> <img src="arrow.png" alt="seta direita"></button>
        </div>

        <div class="indicators">
            <div class="number">01</div>
            <ul>
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
            

        </div>

        <section class="home-end">
            <div class="btn-home">
                <button>
                    <a href="https://www.canva.com/design/DAGTroed93E/MQW3Va_SDFTb3m8JLsykXw/view?utm_content=DAGTroed93E&utm_campaign=designshare&utm_medium=link&utm_source=editor" target="_blank">Compre ou Alugue</a>
                </button>
            </div>
        </section>

    </section> <!-- TERMINA VITRINE primeiros robôs -->



<!-- PRODUTOS -->
<section id="products">
        <h2 class="section-title">Produtos</h2>
        <h3 class="section-subtitle">Nossas tecnologias</h3>
        
        <button class="btn-default">
            <a href="produtos.html" target="_blank">Mais detalhes</a>
        </button>
        
    </section> <!-- TERMINA PRODUTOS -->

     

<!-- PRODUCT SLIDER -->
<section class="product"> 
        <h2 class="product-category"></h2>
        <button class="pre-btn"><img src="arrow-slider2.png" alt=""></button>
        <button class="nxt-btn"><img src="arrow-slider2.png" alt=""></button>
        
        <div class="product-container" >
            <!-- produto1 RoBoot-->
            <div class="product-card">
                <div class="product-image">
                <div class="robot-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                    <span class="discount-tag">30% off</span>
                    <img src="roon-boot.jpg" class="product-thumb" alt="">
                    
                    <a href="produtos.html"><button class="card-btn"><i class="fa-solid fa-basket-shopping"></i></button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">RoBoot</h2>
                    <p class="product-short-description">Bota de alta tecnologia ...</p>
                    <span class="price">Super</span><span class="actual-price">Promo</span>
                </div>
            </div>

    <!-- produto2 Backpack-->
            <div class="product-card">
                <div class="product-image">
                <div class="robot-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                    <span class="discount-tag">50% off</span>
                    <img src="Eco-mochila.jpeg" class="product-thumb" alt="">
                    
                    <a href="produtos.html"><button class="card-btn"><i class="fa-solid fa-basket-shopping"></i></button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Backpack</h2>
                    <p class="product-short-description">Mochila com inteligência artificial ...</p>
                    <span class="price">Super</span><span class="actual-price">Promo</span>
                </div>
            </div>

<!-- produto3 BuuKnife-->
            <div class="product-card">
                <div class="product-image">
                <div class="robot-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                    <span class="discount-tag">50% off</span>
                    <img src="FutOn-knife.jpeg" class="product-thumb" alt="">
                    
                    <a href="produtos.html"><button class="card-btn"><i class="fa-solid fa-basket-shopping"></i></button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">BuuKnife</h2>
                    <p class="product-short-description">Faca futurista equipada ...</p>
                    <span class="price">Super</span><span class="actual-price">Promo</span>
                </div>
            </div>

<!-- produto3 Glasses-->
            <div class="product-card">
                <div class="product-image">
                <div class="robot-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                    <span class="discount-tag">50% off</span>
                    <img src="RoOn-Glasses.jpeg" class="product-thumb" alt="">
                    
                    <a href="produtos.html"><button class="card-btn"><i class="fa-solid fa-basket-shopping"></i></button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Glasses</h2>
                    <p class="product-short-description">Óculos inovadores que ...</p>
                    <span class="price">Super</span><span class="actual-price">Promo</span>
                </div>
            </div>


            <!-- produto4 Cartão Identificador Digital-->
            <div class="product-card">
                <div class="product-image">
                <div class="robot-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                    <span class="discount-tag">50% off</span>
                    <img src="high-tech-tracking-cards.jpeg" class="product-thumb" alt="">
                    
                    <a href="produtos.html"><button class="card-btn"><i class="fa-solid fa-basket-shopping"></i></button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Cartão Digital</h2>
                    <p class="product-short-description">Inclui funcionalidades ...</p>
                    <span class="price">Super</span><span class="actual-price">Promo</span>
                </div>
            </div>

           <!-- produto5 EcoDrone-->
           <div class="product-card">
                <div class="product-image">
                <div class="robot-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                    <span class="discount-tag">50% off</span>
                    <img src="ecodrone.jpeg" class="product-thumb" alt="">
                    
                    <a href="produtos.html"><button class="card-btn"><i class="fa-solid fa-basket-shopping"></i></button></a>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">EcoDrone</h2>
                    <p class="product-short-description">Um drone inovador que ...</p>
                    <span class="price">Super</span><span class="actual-price">Promo</span>
                </div>
            </div>



            </div>
        </div>
    </section>



    <!-- DEPOIMENTOS -->
    <section id="testimonials">
        <img src="Guia-turismo.jpeg" id="testimonial_guia" alt="">
        <div id="testimonial_content">
            <h2 class="section-title">
                Depoimentos
            </h2>
            <h3 class="section-subtitle">
                O que os clientes falam sobre nós
            </h3>
            <!-- passoa 1 -->
            <div id="feedbacks">
                <div id="feedback">
                    <img src="avatar_ela.png" class="feedback-avatar" alt="">
                    <div class="feedback-content">
                        <p>
                            <strong>Amanda Silva</strong>
                            <span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </p>
                        <p>
                            Mergulhei profundamente na beleza da natureza, guiada por um guia acompanhado por uma
                            tecnologia que, além de me conduzir com segurança, me ensinou a respeitar e preservar cada
                            detalhe desse cenário deslumbrante, tornando a aventura ainda mais significativa.
                        </p>
                    </div>
                </div>

                <!-- passoa 2 -->
                <div id="feedbacks">
                    <div id="feedback">
                        <img src="avatar_ele.png" class="feedback-avatar" alt="">
                        <div class="feedback-content">
                            <p>
                                <strong>Rodrigo Gomes</strong>
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                O Robô Inteligente não foi apenas um companheiro de aventura, mas um elo entre a
                                inovação e o equilíbrio da natureza. Cada passo que dei, foi um convite à reflexão sobre
                                o que é mais puro e essencial na Terra.
                            </p>
                        </div>
                    </div>

                </div>
                <button class="btn-default">
                    <a href="https://g.page/r/CbejMZX8_ds4EAI/review" target="_blank">Ver mais avaliações</a>
                </button>

            </div>
    </section> <!-- TERMINA DEPOIMENTOS -->

    <!-- FALE CONOSCO -->

   
    <section id="contactus">
        <div id="contactus_content">
            <h2 class="section-title">
                Fale Conosco
            </h2>
            <h3 class="section-subtitle" id="section-subtitle">
                Deixe aqui suas dúvidas ou sugestões
            </h3>

            <aside class="formulario">
                <form action="" onsubmit="return validar_dados()" method="post">
                    <input type="text" placeholder="Nome" id="nome" name="nome">
                    <p id="erroNome" class="erro"></p>

                    <input type="telefone" placeholder="Seu Whatsapp" id="whatsapp" name="telefone">
                    <p id="erroFone" class="erro"></p>

                    <input type="email" placeholder="Seu e-mail" id="email" name="email">
                    <p id="erroEmail" class="erro"></p>


                    <textarea cols="60" rows="5" minlength="10" maxlength="500"
                        placeholder="Digite sua mensagem com até 500 caracteres *" id="mensagem" name="mensagem"></textarea>
                        <p id="erroMensagem" class="erro"></p>

                    <div class="buttonform"><button type="submit" class="buttonsubmitform" name="cadastrar">
                            <h3>Enviar</h3>
                        </button></div>
                </form>
            </aside>


    </section>

    <!-- RODAPÉ -->
    <footer>
        <div id="footer_items">
            <span id="copyright">
                &copy 2024 Robuu
            </span>

            <div class="social-media-buttons">
                <a href="https://www.canva.com/design/DAGTroed93E/MQW3Va_SDFTb3m8JLsykXw/view?utm_content=DAGTroed93E&utm_campaign=designshare&utm_medium=link&utm_source=editor" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="https://www.canva.com/design/DAGTr3A-KtE/X0Y6-NMOZbx-9kTZzIH8Qg/view?utm_content=DAGTr3A-KtE&utm_campaign=designshare&utm_medium=link&utm_source=editor" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://www.canva.com/design/DAGTr66HKoc/s_q3em28SdWamb3phthurw/view?utm_content=DAGTr66HKoc&utm_campaign=designshare&utm_medium=link&utm_source=editor" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>

    </footer> <!-- TERMINA RODAPÉ -->

    <script src="scripts.js"></script>
</body>

</html>