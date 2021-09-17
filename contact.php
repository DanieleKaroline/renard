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
							   Contate-Nos			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Início </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contato</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
                                <?php
                                $query1 = mysqli_query($conexao,"select conteudo.Conteudo_Titulo , conteudo.Conteudo_Corpo from conteudo where conteudo.Conteudo_Codigo = 6");
                                while($exibe1 = mysqli_fetch_array($query1)) { 
                                ?>
									<h5> <?php echo $exibe1[0] ?></h5>
									<p> <?php echo $exibe1[1] ?> </p>
                                </div>
                                <?php } ?>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
                                </div>                               
								<div class="contact-details">
                                <?php
									$query1 = mysqli_query($conexao,"select conteudo.Conteudo_Titulo , conteudo.Conteudo_Corpo from conteudo where conteudo.Conteudo_Codigo = 7");
									while($exibe1 = mysqli_fetch_array($query1)) { 
                                ?>
									<h5> <?php echo $exibe1[0] ?></h5>
									<p> <?php echo $exibe1[1] ?> </p>
                                <?php } ?>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<?php
										$query1 = mysqli_query($conexao,"select conteudo.Conteudo_Titulo , conteudo.Conteudo_Corpo from conteudo where conteudo.Conteudo_Codigo = 8");
										while($exibe1 = mysqli_fetch_array($query1)) { 
									?>
									<h5> <?php echo $exibe1[0] ?></h5>
									<p> <?php echo $exibe1[1] ?> </p>
									<?php } ?>
								</div>									
							</div>														
						</div>
						
						<form action="functions/inserir.php" method="POST" class="formCont"> <br>
							<h3>NOS ENVIE UMA MENSAGEM</h3> <br><br>
							<input type="text" name="nome" placeholder="Digite seu nome">  <br><br><br>
							<input type="text" name="email" placeholder="Digite seu e-mail">  <br><br><br>
							<input type="text" name="assunto" placeholder="Digite o assunto desse contato">  <br><br><br>
							<textarea rows="5" cols="33" name="mensagem" placeholder="Digite sua mensagem"></textarea> <br><br><br>
							<input type="submit" value="Enviar" class="btn">
						</form>
						<style type="text/css">
							.formCont{
								width: 450px;
								height: 550px;
								background-color: #8a90ff;
								opacity:0.80;
								text-align: center;
								margin-left: 300px; 
							}

							input{
								width: 250px;
								text-align: center;
							}
							textarea{
								text-align: center;
							}
							.btn {
							   -webkit-border-radius: 15px;
							   -moz-border-radius: 15px;
							   border-radius: 15px;
							   font-size: 31px;
							   font-weight: 100;
							   padding: 40px;
							   display: inline-block;
							   cursor: pointer;
							   text-align: center;
							}
							h3{
								color: white;
							}
						</style> 
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

			<?php
				include("footer.php");
			?>
		</body>
	</html>
	<?php 
    mysqli_close($conexao);
?>