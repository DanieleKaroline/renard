<?php
	include("conexao.php");
	mysqli_query($conexao, "UPDATE usuario SET Usuario_email = '". $_POST['email']. "', Usuario_senha = '" . $_POST['senha'] . "' WHERE Usuario_id = ". $_POST['id'] .";");
	
	//voltar p/ pagina inicial
	header('location:../index.php');
?>