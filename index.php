<?php
  if(isset($_POST)&&$_POST){
    // 1 - receber as informacoes que o usuario preencheu no formulario 
    $nome = $_POST["inputNome"];
    $sobrenome = $_POST["inputSobrenome"];
    $endereco = $_POST["inputEndereco"];
    $cep = $_POST["inputCep"];
    $cidade = $_POST["inputCidade"];
    $uf = $_POST["inputUF"];
    $email = $_POST["inputEmail"];
    $senha = $_POST["inputSenha"];
    $confirma = $_POST["inputConfirma"];
    $aceita = $_POST["aceita"];

    $novoUsuario = [
      "nome" => $nome,
      "sobrenome" => $sobrenome,
      "endereco" => $endereco,
      "cep" => $cep,
      "cidade" => $cidade,
      "uf" => $uf,
      "email" => $email,
      "senha" => $senha,
      "confirma" => $confirma,
      "aceita" => $aceita
    ];

    $usuariosJson = file_get_contents("./data/usuarios.json");
    $arrayUsuarios = json_decode($usuariosJson, true);
    array_push($arrayUsuarios["usuarios"], $novoUsuario);
    $jsonUsuarios = json_encode($arrayUsuarios);
    $cadastrou = file_put_contents("./data/usuarios.json", $jsonUsuarios);


  }

?>

<?php $tituloDaPagina = "desLoja" ?>
<!-- TRAZ O HEAD -->
<?php require_once("./inc/head.php"); ?>
<!-- TRAZ O HEADER -->
<?php require_once("./inc/header.php"); ?>

<section class="container-fluid pr-5 pl-5 borda">
    <div class="row m-5 text-white">

        <!-- Carrossel Bootstrap -->
        <div class="col-lg-12 p-0 mt-2">
            <div id="carrosselBootstrap" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators movecarousel1">
                    <li data-target="#carrosselBootstrap" data-slide-to="0" class="active"></li>
                    <li data-target="#carrosselBootstrap" data-slide-to="1"></li>
                    <li data-target="#carrosselBootstrap" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div>
                            <img class="d-block w-100" src="./assets/img/banner2.png" alt="First slide"> 
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reducao">
                            <img class="d-block w-100" src="./assets/img/banner3.png" alt="Second slide"> 
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reducao">
                            <img class="d-block w-100" src="./assets/img/banner1.png" alt="Third slide"> 
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev buttonredondo" href="#carrosselBootstrap" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next buttonredondo" href="#carrosselBootstrap" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </div>
    <section class="row d-flex justify-center bg-dark ml-5 mr-5 p-4">
        <div class="text-white mr-4">
            <p class="mb-1">Se conecte com a gente!</p>
            <p>Receba ofertas recomendadas e preços exclusivos!</p>
        </div>
        <form class="form-row align-items-center">
            <div class="col-md-5 my-1">
                <label class="sr-only" for="inlineFormInputName">Nome</label>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="Nome">
            </div>
            <div class="col-md-5 my-1">
                <label class="sr-only" for="inlineFormInputName">E-mail</label>
                <input type="email" class="form-control" id="inlineFormInputName" placeholder="Email">
            </div>
            <div class="col-2 my-1">
                <button type="submit" class="btn btn-primary">Eu quero!</button>
            </div>
         </form>

    </section>
</section>
<!-- MEXI NA PAARTE DO CONTAINER SER FLUID, COLOQUEI MARGEM EM TODAS AS ROWS E ALINHEI NO CENTRO -->
<main class="container-fluid pr-5 pl-5">
    


    <!--ROTEIROS-->
    <section class="row ml-5 mr-5 align-items-center justify-content-center">
            
        <h2 class="col-12 p-3 mt-4 mb-3 border-bottom">produtos</h2>
        
        <div id="carrosselRoteiros" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <ol class="carousel-indicators carrosel-de-vendas ">
                    <li data-target="#carrosselRoteiros" data-slide-to="0" class="bg-dark active"></li>
                    <li data-target="#carrosselRoteiros" data-slide-to="1" class="bg-dark"></li>
                </ol>

                
                <div class="carousel-item active">
                    <div class="row">

                        <div class="col-sm-6 col-md-3">
                            <a href="produto.php?var=9">
                                <div class="card mb-3 avancar">
                                    <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                                        <img src="./assets/img/produto9.png" width=140px height=140px>  
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text descricao">Porta tacos de dinossauro - Um dos acessores mais úteis no seu dia</p>
                                        <p class="preco">R$ 99,00</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <a href="produto.php?var=10">
                                <div class="card mb-3 avancar">
                                    <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                                        <img src="./assets/img/produto10.png" width=140px height=140px>  
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text descricao">Travesseiro de pipoca - Melhor acompanhante para filmes</p>
                                        <p class="preco">R$ 99,00</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <a href="produto.php?var=11">
                                <div class="card mb-3 avancar">
                                    <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                                        <img src="./assets/img/produto11.png" width=140px height=140px>  
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text descricao">Travesseiro de pão - A coisa mais aleatória já inventada</p>
                                        <p class="preco">R$ 99,00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-sm-6 col-md-3">
                            <a href="produto.php?var=12">
                                <div class="card mb-3 avancar">
                                    <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                                        <img src="./assets/img/produto12.png" width=140px height=140px>  
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text descricao">Jogo da velha de papel higiência - Não inclui papel</p>
                                        <p class="preco">R$ 99,00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <a href="produto.php?var=13">
                                <div class="card mb-3 avancar">
                                    <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                                        <img src="./assets/img/produto13.png" width=140px height=140px>  
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text descricao">Mini Trump - Boneco mais feio não tem - importado</p>
                                        <p class="preco">R$ 99,00</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <a href="produto.php?var=14">
                                <div class="card mb-3 avancar">
                                    <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                                        <img src="./assets/img/produto14.png" width=140px height=140px>  
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text descricao">Trump floral - Porque alguém inventaria um negócio desse?</p>
                                        <p class="preco">R$ 99,00</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <a href="produto.php?var=15">
                                <div class="card mb-3 avancar">
                                    <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                                        <img src="./assets/img/produto15.png" width=140px height=140px>  
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text descricao">Pen-drive burger, 8GB, 250GB RAM, 3 entradas USBs</p>
                                        <p class="preco">R$ 99,00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-sm-6 col-md-3">
                            <a href="produto.php?var=16">
                                <div class="card mb-3 avancar">
                                    <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                                        <img src="./assets/img/produto16.png" width=140px height=140px>  
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text descricao">Privada com neon azul - 300MW de potencia</p>
                                        <p class="preco">R$ 99,00</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--PROMOÇÕES-->
    <section id="catY" class="row ml-5 mr-5">
        <h2 class="col-12 p-3 mt-4 mb-3 text-dark border-bottom">promoções</h2>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card avancar">
                    <a href="produto.php?var=5">
                        <div class="card-header bg-success text-white text-center">
                            <p class="faixa-promo">Promoção</p>
                        </div>
                        <div class="card-img-top d-flex justify-content-center p-4">
                            <img src="./assets/img/produto5.png" alt="Card image cap" width=140px heigh=140px>
                        </div>
                        <div class="card-body">
                            <p class="card-text descricao">Maiô Thanos do último filme dos Vingadores</p>
                            <small class="promo">de R$ 80,00 por</small>
                            <p class="mb-0 preco">R$ 99,00</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card avancar">
                    <a href="produto.php?var=6">
                        <div class="card-header bg-danger text-white text-center">
                            <p class="faixa-promo">5% de Desconto</p>
                        </div>
                        <div class="card-img-top d-flex justify-content-center p-4">
                            <img src="./assets/img/produto6.png" alt="Card image cap" width=140px heigh=140px>
                        </div>
                        <div class="card-body">
                            <p class="card-text descricao">Máquina de lavar super potencia de jato de água</p>
                            <small class="promo">de R$ 80,00 por</small>
                            <p class="preco">R$ 99,00</p>
                        </div>
                    </a>
                </div>
            </div>   
            <div class="col-sm-6 col-md-3">
                <div class="card avancar">
                    <a href="produto.php?var=7">
                        <div class="card-header bg-warning text-white text-center">
                            <p class="faixa-promo">Frete Grátis</p>
                        </div>
                        <div class="card-img-top d-flex justify-content-center p-4">
                            <img src="./assets/img/produto7.png" alt="Card image cap" width=140px heigh=140px>
                        </div>
                        <div class="card-body">
                            <p class="card-text descricao">Fantasia de centauro egípcio para dedos</p>
                            <small class="promo">de R$ 80,00 por</small>
                            <p class="preco">R$ 99,00</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card avancar">
                    <a href="produto.php?var=8">
                        <div class="card-header bg-info text-white text-center">
                            <p class="faixa-promo">Exclusivo</p>
                        </div>
                        <div class="card-img-top d-flex justify-content-center p-4">
                            <img src="./assets/img/produto8.png" alt="Card image cap" width=140px heigh=140px>
                        </div>
                        <div class="card-body">
                            <p class="card-text descricao">Metade de um copo de cerveja gelado</p>
                            <small class="promo">de R$ 80,00 por</small>
                            <p class="preco">R$ 99,00</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--OFERTAS-->
    <section class="row ml-5 mr-5">
        <h2 class="col-12 p-3 mt-4 mb-3 text-dark border-bottom">ofertas</h2>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="row bg-info text-dark m-0 mb-3 avancar" style="align-items:center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <img class="p-2 d-block w-100" src="./assets/img/mercha1.png" alt="">
                    </div>
                    <div class="p-3 col-lg-6 col-md-12 text-white">
                        <h4>Melhores fantasias de homem-aranha</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row bg-danger text-white m-0 mb-3 avancar" style="align-items:center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <img class="p-2 d-block w-100" src="./assets/img/mercha2.png" alt="">
                    </div>
                    <div class="p-3 col-lg-6 col-md-12">
                        <h4>Gaste todo seu dinheiro aqui</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="row bg-warning text-dark m-0 mb-3 avancar" style="align-items:center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <img class="p-2 d-block w-100" src="./assets/img/mercha3.png" alt="">
                    </div>
                    <div class="p-3 col-lg-6 col-md-12">
                        <h4 class="card-text">Melhores jogos de tabuleiro do planeta</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="row bg-secondary text-white m-0 mb-3 avancar" style="align-items:center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <img class="p-2 d-block w-100" src="./assets/img/mercha4.png" alt="">
                    </div>
                    <div class="p-3 col-lg-6 col-md-12">
                        <h4>Todas as mascaras de proteção roubadas pelos USA</h4>
                    </div>
                </div>
            </div>
        </div>
                
    </section>
    
     
    </section>

    <section class="ml-5 mr-5 align-items-center justify-content-center">
            
        <h2 class="col-12 p-3 mt-5 mb-3 border-bottom">mais procurados</h2>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href="produto.php">
                    <div class="card mb-3 avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="./assets/img/produto1.png" width=140px height=140px>  
                        </div>
                        <div class="card-body">
                            <p class="card-text descricao">Spot Popper - Esprema o nariz nojento</p>
                            <p class="preco">R$ 99,00</p>
                            <p class="m-0"><span class="badge badge-pill badge-success">#promoção</span></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="produto.php">
                    <div class="card mb-3 avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="./assets/img/produto2.png" width=140px height=140px>  
                        </div>
                        <div class="card-body">
                            <p class="card-text descricao">Urso Esqueleto - Veja um urso por dentro</p>
                            <p class="preco">R$ 99,00</p>
                            <p class="m-0"><span class="badge badge-pill badge-success">#promoção</span></p>
                        </div>
                    </div>
               </a>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="produto.php">
                    <div class="card mb-3 avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="./assets/img/produto3.png" width=140px height=140px>  
                        </div>
                        <div class="card-body">
                            <p class="card-text descricao">Pegador de salgados - O mais moderno</p>
                            <p class="preco">R$ 99,00</p>
                            <p class="m-0"><span class="badge badge-pill badge-info">#exclusivo</span></p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-sm-6 col-md-3">
                <a href="produto.php">
                    <div class="card mb-3 avancar">
                        <div class="card-img-top d-flex align-items-center justify-content-center p-4">
                            <img src="./assets/img/produto4.png" width=140px height=140px>  
                        </div>
                        <div class="card-body">
                            <p class="card-text descricao">Avião da galáxia - Kit colecionador</p>
                            <p class="preco">R$ 99,00</p>
                            <p class="m-0"><span class="badge badge-pill badge-warning">#frete grátis</span></p>
                        </div>
                    </div>
                </a>
            </div>
            

        </div>
    </section>

</main>
<!-- TRAZ O FOOTER -->
<?php require_once("./inc/footer.php"); ?>