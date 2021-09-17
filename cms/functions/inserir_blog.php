<?php
	include("conexao.php");
	
	//pasta que recebera os arquivos
	$diretorio="../../img/blog";
	
	//insere os dados na tabela blog
	mysqli_query($conexao, "INSERT INTO blog(Blog_Titulo, Blog_Corpo, Blog_Texto, Blog_Data) VALUES('".$_POST['titulo']."', '".$_POST['corpo']."', '".$_POST['texto']."', NOW());");
	
	//grava na variavel '$x' a ultima id inserida no banco
	$x = mysqli_insert_id($conexao);
	
	//se o diretório 'arquivos' não existe
	if(!is_dir($diretorio)){
		echo "Diretório $diretorio não existe!";
	}
	
	//se o diretório 'arquivos' existir
	else{
		
		//ternario - verifica se a variavel "$_FILES['arquivo']" existe 
		$arquivo=isset($_FILES['arquivo']) ? $_FILES['arquivo']: false;
			for($k = 0; $k < count($arquivo['name']); $k++){
            $extensao = PATHINFO($arquivo['name'] [$k], PATHINFO_EXTENSION);
			$nomeArquivo = md5(date("i") * date("s") * rand(0,10000)).".".$extensao;
            $destino = $diretorio."/".$nomeArquivo;
            
			if(move_uploaded_file($arquivo['tmp_name'][$k],$destino)){
				mysqli_query($conexao, "INSERT INTO blogImagem(BlogImagem_Nome, BlogImagem_Blog_Codigo, BlogImagem_Destaque) VALUES('".$nomeArquivo."', ".$x.", 's');");
                echo "<script type='text/javascript'> alert('Enviado!'); window.location.href = '../novo-blog.php'; </script>" ;
			}
			else{
				echo "<script type='text/javascript'> alert('Não enviado!'); window.location.href = '../novo-blog.php'; </script>" ;
             }
			}
		}
	
?>