<?php
include("conexao.php");

$email = $_POST['email'];
$senha =  $_POST['senha'];

mysqli_query($conexao, "insert into usuario (Usuario_email,Usuario_senha) values('$email','$senha')");

header('location:../index.php')
?>