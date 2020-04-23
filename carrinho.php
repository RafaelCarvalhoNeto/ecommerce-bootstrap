<!-- TRAZ O HEAD -->
<?php require_once("./inc/head.php"); ?>
<!-- TRAZ O HEADER -->
<?php require_once("./inc/header.php"); ?>


<section class="jumbotron jumbotron-fluid borda">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Carrinho</h1>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Produtos selecionados</h2>
            <p>Confira os produtos selecionados e clique em Finalizar Compra</p>
            <table class="table text-center mt-5">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" colspan="2">Produto</th>
                        <th scope="col">Preço Unitário</th>
                        <th scope="col">Preço Total</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="d-flex">
                                <img src="./assets/img/produto16.png" idth="72" height="72" alt="">
                                <div class="text-left mx-0 mx-md-3">
                                    <h5 class="my-0"><span class="cart-qtd">1</span> Produto 16</h5>
                                    <p class="my-0">Tamanho: <span class="cart-size">M</span></p>
                                    <small class="text-muted my-0">Indentificação do produto</small>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">R$ 90,00</td>
                        <td class="align-middle font-weight-bold">R$ 90,00</td>
                        <td class="align-middle">
                            <a href="#" class="ml-3 text-dark"><i class="fas fa-pencil"></i></a>
                            <a href="#" class="ml-3 text-dark"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="d-flex">
                                <img src="./assets/img/produto18.png" idth="72" height="72" alt="">
                                <div class="text-left mx-0 mx-md-3">
                                    <h5 class="my-0"><span class="cart-qtd">2</span> Produto 18</h5>
                                    <p class="my-0">Tamanho: <span class="cart-size">M</span></p>
                                    <small class="text-muted my-0">Indentificação do produto</small>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">R$ 90,00</td>
                        <td class="align-middle font-weight-bold">R$ 180,00</td>
                        <td class="align-middle">
                            <a href="#" class="ml-3 text-dark"><i class="fas fa-pencil"></i></a>
                            <a href="#" class="ml-3 text-dark"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="d-flex">
                                <img src="./assets/img/produto19.png" idth="72" height="72" alt="">
                                <div class="text-left mx-0 mx-md-3">
                                    <h5 class="my-0"><span class="cart-qtd">4</span> Produto 19</h5>
                                    <p class="my-0">Tamanho: <span class="cart-size">M</span></p>
                                    <small class="text-muted my-0">Indentificação do produto</small>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">R$ 90,00</td>
                        <td class="align-middle font-weight-bold">R$ 360,00</td>
                        <td class="align-middle">
                            <a href="#" class="ml-3 text-dark"><i class="fas fa-pencil"></i></a>
                            <a href="#" class="ml-3 text-dark"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-inline">
                <div class="form-group col-md-6">
                    <label for="cupomDesconto" class="col-auto pl-0">Cupom de Desconto</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="cupomDesconto" id="cupomDesconto" placeholder="INSIRA SEU CUPOM">
                    </div>
                </div>
                <div class="form-group col-md-2 offset-4">
                    <button type="submit" class="btn btn-primary" form="carrinhoForm">Finalizar Compra</button>
                </div>
            </div>

        </div>
    </div>




</section>

<!-- TRAZ O FOOTER -->
<?php require_once("./inc/footer.php"); ?>