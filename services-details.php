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
			<?php
				$query1 = mysqli_query($conexao,"SELECT * FROM conteudo INNER JOIN imagem ON Imagem_Conteudo_Codigo = Conteudo_Codigo WHERE Conteudo_Link_Codigo = 6 AND Imagem_Destaque = 's' AND Conteudo_Codigo = ".$_GET["ids"]);
				$exibe1 = mysqli_fetch_array($query1) 
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
									<a href="index.php">Home</a>  
									<span class="lnr lnr-arrow-right"></span>
									<a href="services.php"> <?php echo $exibe1[1] ?></a>
								</p>
							</div>	
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<section class="about-home-area section-gap">
				<div class="container">
					
					<img class="mx-auto d-block img-fluid" src="img/<?php echo $exibe1[5] ?> " width="800" alt= "">
					<div class="row align-items-center">
						<center>
							<div class="col-lg-9" >
								<center><h1 style="padding: 15px"> <?php echo $exibe1[1] ?> </h1></center>
								<center><p style="text-align: justify; font-size: 15pt;">
									&nbsp<?php echo $exibe1[2] ?>
								</p></center>
							</div>
						</center>
					</div>
				</div>
				<div class="container">
					<div class="row align-items-center" style=" padding: 5% 12% 10% 12%;">
						<?php
							$id = mysqli_query($conexao,"SELECT * FROM loja INNER JOIN servico ON Loja_Servico_Codigo = Servico_Codigo WHERE Servico_Conteudo_Codigo = ".$_GET["ids"]." GROUP BY Loja_ItemProduto_Codigo");
							
							include "outrosItens.php";
						?>
					</div>
				</div>
				<div class="container" style="margin-top: 100px; width: 800px;">
					<div class="row align-items-center">
						<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
							<div class="row">	
								<div class="col-lg-6 form-group">
									<input name="name" placeholder="Digite seu nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
								
									<input name="email" placeholder="Digite seu email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

									<input name="subject" placeholder="Nos diga o motivo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
								</div>
								<div class="col-lg-6 form-group">
									<textarea class="common-textarea form-control" name="message" placeholder="Mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>						
								</div>
								<div class="col-lg-12 d-flex justify-content-between">
									<div class="alert-msg" style="text-align: left;"></div>
									<button class="genric-btn primary circle" style="float: right;">Enviar mensagem</button>						
								</div>							
							</div>
						</form>	
					</div>
				</div>
			</section>
						<!-- End feature Area -->					
			
			<?php
				include("footer.php");
			?>
		</body>
	</html>
<?php 
    mysqli_close($conexao);
?>