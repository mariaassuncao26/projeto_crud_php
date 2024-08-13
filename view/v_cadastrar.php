<?php include("blades/top.php") ?>

    <div class="container mt-5">
        <a href="index.php" class="btn btn-primary text-white"> Voltar </a>
    </div>

    <div class="container mt-5 border bg-white rounded-3 p-3">
    <h1>Cadastrar informações</h1>
        <form action="../controller/funcao-create-aluno.php" method="post" enctype="multipart/form-data">
            <label for="" class="form-label"> Nome: </label>
            <input type="text" class="form-control" name="campo_nome">

            <label for="" class="form-label"> Cidade: </label>
            <input type="text" class="form-control" name="campo_cidade">

            <label for="" class="form-label"> Curso: </label>
            <input type="text" class="form-control" name="campo_curso">

            <label for="" class="form-label"> Enviar foto: </label>
            <input type="file" class="form-control" name="arquivo">

            <div class="d-flex justify-content-end container mt-5">
                <input type="submit" value="Salvar" class="btn btn-success">
            </div>
        </form>
    </div>

<?php include("blades/footer.php") ?>