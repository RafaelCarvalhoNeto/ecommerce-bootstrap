<?php
    $buscaLista = file_get_contents("./data/usuarios.json");
    $listaUsuarios = json_decode($buscaLista, true);
?>


<?php $tituloDaPagina = "Lista de Usuários";?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php");?>

    <main class="container borda">
        <section class="row mt-5 py-5">
            <div class="col-12 border bg-light">

             

                <h3 class="col-12 text-center  my-5">Lista de usuários</h3>
                <table class="table fonteMenor"> 
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">UF</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Senha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaUsuarios["usuarios"] as $valor){ ?>
                        <tr>
                            <td><?= $valor["nome"];?></td>
                            <td><?= $valor["sobrenome"];?></td>
                            <td><?= $valor["endereco"];?></td>
                            <td><?= $valor["cep"];?></td>
                            <td><?= $valor["cidade"];?></td>
                            <td><?= $valor["uf"];?></td>
                            <td><?= $valor["email"];?></td>
                            <td><?= $valor["senha"];?></td>
                        </tr> <?php }; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

<?php require_once("./inc/footer.php"); ?>
