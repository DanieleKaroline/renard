<?php
include("conexao.php");
mysqli_query($conexao, "DELETE FROM usuario WHERE Usuario_Id = ".$_GET['idu'].";");

header('location:../index.php')
?>