    <?php include("blades/top.php") ?>
    <?php include("../controller/funcao-tabela.php")?>

    <div class="container mt-5">
        <a href="v_cadastrar.php" class="btn btn-primary text-white"> Cadastrar </a>
    </div>

    <div class="container mt-5">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Curso</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>

               <?php funcaoTabela() ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" class="text-center"> Fim da Tabela </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php include("blades/footer.php") ?>