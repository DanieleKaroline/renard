<?php
include("functions/conexao.php");
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Renard</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Início</a></li>
				          <li><a href="about.php">Sobre</a></li>
				          <li><a href="services.php">Serviços</a></li>
				          <li><a href="products.php">Produtos</a></li>
				          <li ><a href="blog-home.php">Blog</a> </li>					         					          
				          <li><a href="contact.php">Contato</a></li>				          
					            </ul>
					          </li>	
				            </ul>
				          </li>				              
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-6 col-md-6">
							<h1>
								Renard <br>
								Para Melhorar o <br>
								Seu dia-a-dia			
							</h1>
							<p class="text-white text-uppercase">
								
							</p>
							
						</div>
						<div class="banner-img col-lg-6 col-md-6">
							<img class="img-fluid" src="img/blog/banner-img.png" alt="">
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
							$query1 = mysqli_query($conexao,"SELECT conteudo.Conteudo_Titulo, conteudo.Conteudo_Corpo FROM conteudo WHERE conteudo.Conteudo_Codigo = 13");
							while($exibe1 = mysqli_fetch_array($query1)) { 
						?>
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10"><?php echo $exibe1[0] ?></h1>
							<p>
							<?php echo $exibe1[1] ?>
							</p>
							
						</div>
						<?php } ?>
						<div class="row">
							<div class="row d-flex justify-content-center">
								<?php 
									$query2 = mysqli_query($conexao,"SELECT * FROM conteudo INNER JOIN imagem ON Imagem_Conteudo_Codigo = Conteudo_Codigo WHERE Conteudo_Link_Codigo = 3 ORDER BY Conteudo_Codigo  LIMIT 4");
									while($exibe2 = mysqli_fetch_array($query2)) { 
								?>
								<div class="col-lg-3 col-md-6" >

									<div class="single-product" onclick="location.href='product-details.php?idp=<?php echo $exibe2[0] ?>'">
									
										<div class="thumb">
											<img src="img/<?php echo $exibe2[5] ?>" alt="">
										</div>
										
										<div class="details" style="height: 10vw;">
											<h4><?php echo $exibe2[1] ?></h4>
						
											<!--a href="product-details.html" class="primary-btn text-uppercase">View Details</a-->
										</div>
										
									</div>
								</div>
								<?php } ?>					
							</div>
						</div>
					</div>
				</div>															
			</section>
			<!-- End products Area -->
			

			<!-- Start home-about Area -->
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
			</div><br> <br> <br> <br><br> <br> <br> <br>
			<center>
				<?php 
					$query2 = mysqli_query($conexao,"SELECT * FROM conteudo INNER JOIN imagem ON Imagem_Conteudo_Codigo = Conteudo_Codigo INNER JOIN link ON Conteudo_Link_Codigo = Link_Codigo WHERE Conteudo_Codigo = 5 LIMIT 1");
					while($exibe2 = mysqli_fetch_array($query2)) { 
				?> 
				<div class="col-lg-9" >
					<h1 style="padding: 15px"> <?php echo $exibe2[1] ?> </h1>
					<p style="text-align: justify; font-size: 15pt;">
						<?php echo $exibe2[2] ?>  <?php } ?>	
					</p>
				</div>
			</center>
						
			<div class="container">
				<div class="row align-items-center" style="margin-left: 360px; width: 800px; ">
					<div class="col-lg-6 home-about-center">
						<table>
						<tr>
						<td><img class="mx-auto d-block img-fluid" src="img/computer.png"  alt= "" width="900px" height="900px">
						<td><img class="mx-auto d-block img-fluid" src="img/phone.png"  alt= "" width="900px" height="900px">
						<td><img class="mx-auto d-block img-fluid" src="img/site.png"  alt= "" width="900px" height="900px">
						</tr>
						</table>
					</div>
				</div>
			</div><br><br><br><br><br><br><br><br><br>
		<!-- End home-about Area -->
			

			
			


			<!-- Start brand Area -->
		
			<!-- End brand Area -->
			

			<!-- Start blog Area -->
			<section class="blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Últimas Notícias do nosso Blog</h1>
							<p>Para saber mais sobre nosso projeto.</p>
						</div>
					</div>						
					<div class="row">
						<div class="row d-flex justify-content-center">
						<?php
							$query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blogImagem ON BlogImagem_Blog_Codigo = Blog_Codigo WHERE BlogImagem_Destaque = 's' GROUP BY Blog_Codigo ORDER BY Blog_Codigo DESC LIMIT 2");
							while($exibe = mysqli_fetch_array($query)){
						?>	
						<div class="col-lg-6 col-md-6">
							
							<div class="thumb" >
								<img class="img-fluid" src="img/blog/<?php echo $exibe[6] ?>"  alt="">
							</div>
							<div class="detais" >
								<a href="#"><h4><?php echo $exibe[1] ?></h4></a>
								<p>
									<a href="blog-single.php?idb=<?php echo $exibe[0] ?>">
										<?php echo substr($exibe[2],0,139) ?>
									</a>
                                </p>
								<p class="date"><?php echo $exibe[3] ?></p>
							</div>
							
						</div>
						<?php } ?>
						</div>
					</div>
				</div>	
			</section>
			<!-- End blog Area -->
			
			<?php
				include("footer.php");
			?>
			</body>
		</html>
<?php 
		mysqli_close($conexao);
?>