    <?php
        //Include de conexão
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
								Principais Notícias				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Início </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-home.php"> Noticias</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
                            


                <!-- INICIO DO BLOG -->
                    <?php
                        $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blogImagem ON BlogImagem_Blog_Codigo = Blog_Codigo WHERE BlogImagem_Destaque = 's' GROUP BY Blog_Codigo ORDER BY Blog_Codigo DESC LIMIT 4");
                        while($exibe = mysqli_fetch_array($query)){
                    ?>

                            <div class="single-post">
								<img class="img-fluid" src="img/blog/<?php echo $exibe[6] ?>" width="1000" heigth="688"  alt="">
								<ul class="tags">
									<li><a href="#">Saúde, </a></li>
									<li><a href="#">Tecnologia, </a></li>
									<li><a href="#">Desenvolvimento</a></li>
								</ul>
								<a href="blog-single.php?idb=<?php echo $exibe[0] ?>">
									<h1>
                                        <?php echo $exibe[1] ?>
									</h1>
									<p>
										<?php echo substr($exibe[4],0,150); echo '...' ?>
                                    </p>
								</a>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 curtidas</a></li>
												
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
                            </div>
                    <?php } ?>
                <!--FIM DO BLOG-->	
                            																				
                        </div>
                        
						<div class="col-lg-4 sidebar">
							<div class="single-widget search-widget">
								<form class="example" action="#" style="margin:auto;max-width:300px">
								  <input type="text" placeholder="Buscar Posts" name="search2">
								  <button type="submit"><i class="fa fa-search"></i></button>
								</form>								
							</div>

							<div class="single-widget protfolio-widget">
								<img src="img/blog/user2.jpg" alt="">
								<a href="#"><h4>Daniele Karoline Carvalho</h4></a>
								<p>
									Estudante do curso Técnico em Desenvolvimento de Sistemas na ETEC de Registro.
									Desenvolvedora do projeto da equipe Renard.
								</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>								
							</div>

							<div class="single-widget category-widget">
								<h4 class="title">Categorias</h4>
								<ul>
									<li><a href="blog-home.php" class="justify-content-between align-items-center d-flex"><h6>Desenvolvimento</h6> <span>3</span></a></li>
									<li><a href="blog-home.php" class="justify-content-between align-items-center d-flex"><h6>Tecnologia</h6> <span>3</span></a></li>
									<li><a href="blog-home.php" class="justify-content-between align-items-center d-flex"><h6>Saúde</h6> <span>3</span></a></li>
								</ul>
							</div>
						
							<?php include("post_recent.php")?>
							
							<div class="single-widget category-widget">
								<h4 class="title">Arquivos</h4>
								<ul>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Nov. 2019</h6> <span>2</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Out. 2019</h6> <span>1</span></a></li>
			      				</ul>
							</div>			

							<div class="single-widget tags-widget">
								<h4 class="title">Tags</h4>
								 <ul>
								 	<li><a href="#">Saúde</a></li>
								 	<li><a href="#">Tecnologia</a></li>
								 	<li><a href="#">Desenvolvimento</a></li>
								 </ul>
							</div>				

						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
			
			<?php
				include("footer.php");
			?>	
		</body>
	</html>
<?php 
    mysqli_close($conexao);
?>
