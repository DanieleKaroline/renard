<?php
include("conexao.php");
mysqli_query($conexao, "DELETE FROM blogImagem WHERE BlogImagem_Blog_Codigo = ".$_GET['idu'].";");
mysqli_query($conexao, "DELETE FROM blog WHERE Blog_Codigo = ".$_GET['idu'].";");

header('location:../blog.php')
?>