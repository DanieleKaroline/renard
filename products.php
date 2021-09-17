<?php
	include("functions/conexao.php");
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
		<?php
			include("head.php");
		?>
		<body>	
			<?php
				include("header.php");
			?>
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Produtos				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Início </a>  <span class="lnr lnr-arrow-right"></span>  <a href="products.php"> Produtos</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start products Area -->
			<section class="products-area product-page section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<?php 
							$query1 = mysqli_query($conexao,"SELECT * FROM conteudo WHERE Conteudo_Link_Codigo = 7");
							while($exibe1 = mysqli_fetch_array($query1)) { 
						?>
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10"><?php echo $exibe1[1] ?></h1>
							<p>
								<?php echo $exibe1[2] ?>
							</p>
							<div class="row">
								<?php 
									$query2 = mysqli_query($conexao,"SELECT Conteudo_Codigo, Conteudo_Titulo, Imagem_Nome FROM loja INNER JOIN itemproduto ON ItemProduto_Codigo = Loja_ItemProduto_Codigo INNER JOIN conteudo ON Conteudo_Codigo = ItemProduto_Conteudo_Codigo INNER JOIN imagem ON Imagem_Conteudo_Codigo = Conteudo_Codigo WHERE Conteudo_Link_Codigo = 3 AND Loja_Destaque = 's' ORDER BY ItemProduto_Codigo DESC");
									while($exibe2 = mysqli_fetch_array($query2)) { 
								?>
								<div class="col-lg-3 col-md-6">

									<div class="single-product" onclick="location.href='product-details.php?idp=<?php echo $exibe2[0] ?>'">
									
										<div class="thumb">
											<img src="img/<?php echo $exibe2[2] ?>" alt="">
										</div>
										
										<div class="details">
											<?php echo $exibe2[1] ?>
											
											<!--a href="product-details.html" class="primary-btn text-uppercase">View Details</a-->
										</div>
										
									</div>
								</div>
								<?php } ?>															
							</div>
						</div>
						<?php } ?>
					</div>							
					
				</div>	
			</section>
							
			<?php
				include("footer.php");
			?>
			</body>
		</html>
<?php 
		mysqli_close($conexao);
?>