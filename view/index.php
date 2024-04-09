    <?php include("blades/top.php") ?>

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
                <tr>
                    <td>01</td>
                    <td>João da Silva</td>
                    <td>Jacupiranga</td>
                    <td>TDS</td>
                    <td><a href='#' class="btn btn-success">Editar</a></td>
                    <td><a href='#' class="btn btn-danger">Excluir</a></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Maria da Silva</td>
                    <td>Registro</td>
                    <td>TDS</td>
                    <td><a href='#' class="btn btn-success">Editar</a></td>
                    <td><a href='#' class="btn btn-danger">Excluir</a></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Tiemi da Silva</td>
                    <td>Cajati</td>
                    <td>TDS</td>
                    <td><a href='#' class="btn btn-success">Editar</a></td>
                    <td><a href='#' class="btn btn-danger">Excluir</a></td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Kauã da Silva</td>
                    <td>Cajati</td>
                    <td>TDS</td>
                    <td><a href='#' class="btn btn-success">Editar</a></td>
                    <td><a href='#' class="btn btn-danger">Excluir</a></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>Renan da Silva</td>
                    <td>Miracatu</td>
                    <td>TDS</td>
                    <td><a href='#' class="btn btn-success">Editar</a></td>
                    <td><a href='#' class="btn btn-danger">Excluir</a></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="text-center"> Fim da Tabela </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php include("blades/footer.php") ?>