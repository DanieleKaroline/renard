<?php
    include("functons/conexao.php");

    $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blogImagem ON BlogImagem_Blog_Codigo = Blog_Codigo WHERE BlogImagem_Destaque = 's' GROUP BY Blog_Codigo ORDER BY Blog_Codigo DESC LIMIT 4");
    while($exibe = mysqli_fetch_array($query)){
?>