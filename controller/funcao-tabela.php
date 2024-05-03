<?php

    function funcaoTabela(){
        include("../model/connect.php");
        $query = mysqli_query($conexao, "SELECT * FROM aluno ORDER BY Aluno_Codigo DESC");

        while($exibe = mysqli_fetch_array($query)){
            echo "<tr>
            <td>". $exibe[0]. "</td>
            <td>". $exibe[1]. "</td>
            <td>". $exibe[2]. "</td>
            <td>". $exibe[3]. "</td>
            <td class='text-center'><a href='#' class='btn btn-success'>Editar</a></td>
            <td class='text-center'><a href='#' class='btn btn-danger'>Excluir</a></td>
            </tr>";
        }
    }    
    
?>