<?php
include("conexao.php");
mysqli_query($conexao, "DELETE FROM contato WHERE id = ".$_GET['idu'].";");

header('location:../contatos.php')
?>