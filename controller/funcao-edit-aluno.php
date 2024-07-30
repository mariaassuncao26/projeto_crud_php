<?php
    include("../model/connect.php");
    $query = mysqli_query($conexao, "SELECT * FROM aluno WHERE Aluno_Codigo = ".$_GET["ida"]);
    $exibe = mysqli_fetch_array($query);
?>