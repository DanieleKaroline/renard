<?php
	include("conexao.php");
	mysqli_query($conexao, "UPDATE blog SET Blog_Titulo = '". $_POST['titulo']. "', Blog_Corpo = '" . $_POST['corpo'] . "' , Blog_Data = '" . $_POST['data'] . "', Blog_Texto = '" . $_POST['texto'] . "' WHERE Blog_Codigo = ". $_POST['id'] .";");
	
	//voltar p/ pagina inicial
	header('location:../blog.php');
?>