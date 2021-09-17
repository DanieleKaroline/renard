<?php 
	$query4 = mysqli_query($conexao, "SELECT * FROM imagem INNER JOIN itemproduto ON Imagem_Conteudo_Codigo = ItemProduto_Conteudo_Codigo WHERE ItemProduto_Codigo = ".$row[1]." AND Imagem_Destaque = 'n'");
	if(mysqli_num_rows($query4) != 0){
?>
		<h3 style=" left: 0; margin-bottom: 30px;">Galeria</h3><br>
		<div style="display: flex; flex-wrap: wrap; min-width: 100%;">
<?php
			while($exibe4 = mysqli_fetch_array($query4)){
?>		
				<div style="margin: 1%; " >
					<img class="img-fluid" src="img/blog/<?php echo $exibe4[1] ?>" style="height:100px;" alt="">
				</div>
<?php
			}
?>
		</div>
<?php
	}
?>	



