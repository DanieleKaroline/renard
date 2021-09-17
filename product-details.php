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
								Detalhes do Produto			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="product-details.html"> Detalhes do Produto</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start price Area -->
			<section class="price-area section-gap">
				<div class="container">
					<div class="row">
						<?php 
							$query2 = mysqli_query($conexao,"SELECT * FROM itemproduto INNER JOIN conteudo ON Conteudo_Codigo = ItemProduto_Conteudo_Codigo INNER JOIN imagem ON Imagem_Conteudo_Codigo = Conteudo_Codigo WHERE Conteudo_Link_Codigo = 3 AND ItemProduto_Conteudo_Codigo = ".$_GET["idp"]);
							
							$idi = mysqli_query($conexao,"SELECT Imagem_Codigo FROM imagem WHERE Imagem_Conteudo_Codigo = ".$_GET["idp"]);
							$exibe2 = mysqli_fetch_array($query2) ;
							$idimg = mysqli_fetch_array($idi);
						?>
						<div class="col-lg-12 col-md-6" >
							<div class="single-price" style=" padding: 5% 10% 10% 10%;">
								<center>
									<div class="title text-center">
										<h1 class="mb-10">Sistema de Monitoramento TEA</h1>
										<p>Para agradar todos os gostos.</p>
									</div>
								</center>
								<div class="container" >
									<div class="row" style=" margin: 5% 0 5%;">
										<div class="col-lg-6 home-about-left">
											<img src="img/<?php echo $exibe2[12] ?>" style="width: auto; height: auto; " alt="">
										</div>
										<div class="col-lg-6 home-about-right no-padding" >
											<h2><?php echo $exibe2[8] ?></h2>
											<p style="text-align: left"><?php echo $exibe2[9] ?></p>
											<div class="package-list">
												<ul>
													<li>Fácil de usar </li>
													<li>Modelo leve</li>										
													<li><h1>R$<?php echo $exibe2[5] ?>.00</h1></li>										
												</ul>	
											</div>
											<a class="primary-btn text-uppercase">Adquirir</a>
										</div>
									</div>
								</div>
								<div class="container" >
									<div class="row align-items-center">
										<?php
											$id = mysqli_query($conexao,"SELECT * FROM loja INNER JOIN itemproduto ON Loja_ItemProduto_Codigo = ItemProduto_Codigo WHERE Loja_Servico_Codigo = 3 AND Loja_Conteudo_Codigo = ".$_GET["idp"]);
											
											include "outrosItens.php";
										?>
									</div>
								</div>
							</div>							
						</div>							
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
			<?php
				include("footer.php");
			?>
		</body>
	</html>
<?php 
    mysqli_close($conexao);
?>


