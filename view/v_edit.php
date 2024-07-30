<?php
    include("blades/top.php");
    include("../controller/funcao-edit-aluno.php");
?>
    <div class="container mt-5">
        <a href="index.php" class="btn btn-primary text-white"> Voltar </a>
    </div>
    
    <div class="container mt-5 border bg-white rounded-3 p-3">
    <h1>Editar informações</h1>
        <form action="../controller/funcao-update-aluno.php" method="post">
            <input type="hidden" name="campo_codigo" value="<?php echo $exibe[0]?>">

            <label for="" class="form-label"> Nome: </label>
            <input type="text" class="form-control" name="campo_nome" value="<?php echo $exibe[1] ?>">

            <label for="" class="form-label"> Cidade: </label>
            <input type="text" class="form-control" name="campo_cidade" value="<?php echo $exibe[2] ?>">

            <label for="" class="form-label"> Curso: </label>
            <input type="text" class="form-control" name="campo_curso" value="<?php echo $exibe[3] ?>">

            <div class="d-flex justify-content-end container mt-5">
                <input type="submit" value="Atualizar" class="btn btn-success">
            </div>
        </form>
    </div>

<?php include("blades/footer.php") ?>