<?php
include('conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

mysqli_query($conexao,"insert into contato(nome, email, assunto, mensagem) VALUES ('$nome','$email','$assunto','$mensagem')");

header('location:../contact.php');
?>