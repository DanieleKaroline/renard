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
									Serviços				
								</h1>	
								<p class="text-white link-nav">
									<a href="index.php">Início </a>  
									<span class="lnr lnr-arrow-right"></span>  
									<a href="services.php"> Serviços</a>
								</p>
							</div>	
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start offered-service Area -->
			<section class="offered-service-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Os Serviços oferecidos a você:</h1>
						</div>
					</div>							
					<div class="row">
						<?php
							$query = mysqli_query($conexao, "SELECT Conteudo_Codigo, Conteudo_Titulo, Conteudo_Corpo, Imagem_Nome FROM conteudo INNER JOIN imagem ON Conteudo_Codigo = Imagem_Conteudo_Codigo WHERE Conteudo_Link_Codigo = 6 AND Imagem_Destaque = 's' ORDER BY Conteudo_Codigo DESC LIMIT 3");
							while($exibe = mysqli_fetch_array($query)){
						?>
						<div class="col-lg-4" onclick="location.href='services-details.php?ids=<?php echo $exibe[0] ?>'">
							<div class="single-offered-service">
								<img class="img-fluid" src="img/<?php echo $exibe[3] ?>" alt="">								
								<p>
									<h4><?php echo $exibe[1] ?></h4>
								</p>	
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