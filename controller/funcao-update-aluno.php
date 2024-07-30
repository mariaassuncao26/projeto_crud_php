<?php
include("../model/connect.php");
mysqli_query($conexao, "UPDATE aluno SET Aluno_Nome = '".$_POST['campo_nome'] ."', Aluno_Cidade = '".$_POST['campo_cidade'] ."', Aluno_Curso = '".$_POST['campo_curso'] ."' WHERE Aluno_Codigo =" .$_POST['campo_codigo']);
header("location:../view/v_edit.php?ida=".$_POST['campo_codigo']);
?>