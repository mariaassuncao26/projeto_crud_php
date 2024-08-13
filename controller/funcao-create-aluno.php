<?php
    include("../model/connect.php");

    $arquivo = $_FILES["arquivo"];
    $destino = "../view/imgs/".$arquivo['name'];
    move_uploaded_file($arquivo['tmp_name'], $destino);

    $nome = $_POST["campo_nome"];
    $cidade = $_POST["campo_cidade"];
    $curso = $_POST["campo_curso"];
    mysqli_query($conexao, "INSERT INTO aluno (Aluno_Foto, Aluno_Nome, Aluno_Cidade, Aluno_Curso) VALUES ('". $arquivo['name'] ."','$nome', '$cidade', '$curso')");



    header("location:../view/");
?>