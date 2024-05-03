<?php
    include("../model/connect.php");
    $nome = $_POST["campo_nome"];
    $cidade = $_POST["campo_cidade"];
    $curso = $_POST["campo_curso"];
    mysqli_query($conexao, "INSERT INTO aluno (Aluno_Nome, Aluno_Cidade, Aluno_Curso) VALUES ('$nome', '$cidade', '$curso')");
    header("location:../view/");
?>