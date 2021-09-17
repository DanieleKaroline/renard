<?php
	include ("functions/conexao.php")
	
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
								Sobre			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Início</a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.php"> Sobre Nós</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<br> <br> <br> <br>
			<center>
				<?php
					$query1 = mysqli_query($conexao,"SELECT * FROM conteudo INNER JOIN imagem ON Imagem_Conteudo_Codigo = Conteudo_Codigo INNER JOIN link ON Conteudo_Link_Codigo = Link_Codigo WHERE Conteudo_Codigo = 4 AND Imagem_Codigo = 4");
					while($exibe1 = mysqli_fetch_array($query1)) { 
				?>
				<div class="col-lg-9" >
					<h1 style="padding: 15px"> <?php echo $exibe1[1] ?> </h1>
					<p style="text-align: justify; font-size: 15pt;">
						<?php echo $exibe1[2] ?>
					</p>
				</div>
			</center>
			<div class="container">
				<div class="row align-items-center" style="margin-left: 380px; width:500px; ">
					<div class="col-lg-6 home-about-center">
						<img class="mx-auto d-block img-fluid" src="img/<?php echo $exibe1[5] ?> "  alt= "">
					</div>
				<?php } ?>
				</div>
			</div><br><br><br><br><br><br><br><br>

			<center>
				<?php
					$query2 = mysqli_query($conexao,"SELECT * FROM conteudo INNER JOIN imagem ON Imagem_Conteudo_Codigo = Conteudo_Codigo INNER JOIN link ON Conteudo_Link_Codigo = Link_Codigo WHERE Conteudo_Codigo = 5 LIMIT 1");
					while($exibe2 = mysqli_fetch_array($query2)) { 
				?> 
				<div class="col-lg-9" >
					<h1 style="padding: 15px"> <?php echo $exibe2[1] ?> </h1>
					<p style="text-align: justify; font-size: 15pt;">
					<?php echo $exibe2[2]; } ?>
					</p>
				</div>
			</center>
			<div class="container">
				<div class="row align-items-center" style="margin-left: 360px; width: 800px; ">
					<div class="col-lg-6 home-about-center">
						<table>
							<tr>
								<td>
									<img class="mx-auto d-block img-fluid" src="img/computer.png"  alt= "" width="900px" height="900px">
								</td>
								<td>
									<img class="mx-auto d-block img-fluid" src="img/phone.png"  alt= "" width="900px" height="900px">
								</td>
								<td>
									<img class="mx-auto d-block img-fluid" src="img/site.png"  alt= "" width="900px" height="900px">
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<?php include("equipe.php"); ?>	
			<br> <br> <br> <br><br> <br> <br> <br><br> <br> <br> <br><br> 
			<?php include("footer.php");?>
		</body>
	</html>

<?php mysqli_close($conexao) ?>

