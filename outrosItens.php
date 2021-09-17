<?php
$k = mysqli_num_rows($id);
if($k != 0){
	while($row = $id->fetch_array()){
		$query3 = mysqli_query($conexao,"SELECT * FROM conteudo INNER JOIN itemproduto ON ItemProduto_Conteudo_Codigo = Conteudo_Codigo INNER JOIN imagem ON imagem_Conteudo_Codigo = Conteudo_Codigo WHERE ItemProduto_Codigo = ".$row[1]." AND Imagem_Destaque = 's'");
		$exibe3 = mysqli_fetch_array($query3);
		if($row[1] % 2 == 0){
		?>
		<div class="container" style=" margin: 5% 0 5%;">
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-left">
					<h1> <?php echo $exibe3[1] ?> </h1>
					<p style="float: left">
						<?php echo $exibe3[2] ?>
					</p>
				</div>
				<div class="col-lg-6 ">
					<img class="mx-auto d-block img-fluid" src="img/<?php echo $exibe3[12]; ?>" style="height:10%; width: auto;" alt="">
				</div>				
			</div>
			<?php  ?>
		</div>
		<?php
		include "galeria.php";
		}else{
		?>
		<div class="container" style=" margin: 5% 0 5%;">
			<div class="row align-items-center">
				<div class="col-lg-6 home-about-left">
					<img class="mx-auto d-block img-fluid" src="img/<?php echo $exibe3[12]; ?> " style="height:10%; width: auto;" alt= "">
				</div>
				<div class="col-lg-6 home-about-right no-padding">
					<h1> <?php echo $exibe3[1] ?> </h1>
					<p style="float: left">
						<?php echo $exibe3[2] ?>
					</p>
				</div>	
			</div>
		</div>
		<?php
		include "galeria.php";
		}
	} 
}else{
	echo "<div></div>";
}
?>