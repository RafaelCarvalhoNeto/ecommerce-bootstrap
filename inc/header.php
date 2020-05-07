<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark black fixed-top">
            <a class="navbar-brand ml-3" href="index.php">
                <img src="./assets/img/logotodapng.png" alt="Logo" width=100px height=30px>
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navdrops" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Promoções</a>
                        <div class="dropdown-menu" aria-labelledby="navdrops">
                            <a class="dropdown-item" href="#">Promoção</a>
                            <a class="dropdown-item" href="#">Descontos</a>
                            <a class="dropdown-item" href="#">Frete Grátis</a>
                            <a class="dropdown-item" href="#">Exclusivo</a>
                        </div>
                    </li>

                </ul>
                <form class="form-inline">
                    <div class="input-group">
                        <input class="form-control border-0" type="search" placeholder="Busca" aria-label="Search">
                        <div class="input-group-append">
                            <button class="search btn" type="submit"></button>
                        </div>
                        
                    </div>
                </form>
                <ul class="navbar-nav ml-2">
                     <li class="nav-item">
                        <a class="btn btn-outline-warning mr-2 arrendonar" href="carrinho.php"><i class="fas fa-shopping-cart"></i>Carrinho</a>
                    </li>
                    <li class="nav-item mr-sm-2">
                        <a class="btn btn-outline-warning arrendonar" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
                    </li>
                </ul>

            </div>

        </nav>
    </header>