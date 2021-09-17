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
                                Detalhes da Notícia           
                            </h1>   
                            <p class="text-white link-nav"><a href="index.php">Início</a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-single.html"> Notícias</a></p>
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
							<div class="single-post">
                        <!--INICIO BLOG-->     

                             <?php
                                $query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blogImagem ON BlogImagem_Blog_Codigo = Blog_Codigo WHERE BlogImagem_Destaque = 's' AND Blog_Codigo = ".$_GET["idb"]);
                                $exibe = mysqli_fetch_array($query);
                            ?>

								<img class="img-fluid" src="img/blog/<?php echo $exibe[6] ?>" alt="">
						
                        		<ul class="tags">
									<li><a href="#">Saúde,</a></li>
									<li><a href="#">Tecnologia,</a></li>
									<li><a href="#">Desenvolvimento</a></li>
                                </ul>
                        
								<a href="#">
                        
                                    <h1>
                                    
                                        <?php echo $exibe[1] ?>
                                
                                    </h1>
                                
                                
                                </a>
								<div class="content-wrap">
                                    
                                    <p>
                                    
                                        <?php echo $exibe[2] ?>
                                    
                                    </p>

                        
                                    
                               	<?php 
                                   $query1 = mysqli_query($conexao,"SELECT blog.Blog_Texto FROM blog WHERE Blog_Codigo =" .$_GET["idb"]);
                                   while($exibe1 = mysqli_fetch_array($query1)) { 
                               ?>

									<blockquote class="generic-blockquote">
										<p style="text-align: justify;"> <?php echo $exibe1[0] ?></p>
									</blockquote>
                                   <?php } ?>
                                   
                                    <?php 
                                    /*INICIO GALERIA*/

                                        $query2 = mysqli_query($conexao, "SELECT * FROM blogimagem WHERE BlogImagem_Blog_Codigo = ".$_GET['idb']. " AND BlogImagem_Destaque = 'n'");

                                        if(mysqli_num_rows($query2) < 1){
                                            echo "Não há imagens na galeria<hr>"; 
                                       }

                                        while($exibe2 = mysqli_fetch_array($query2)){
									?>
									
                                            <p>
											
													
												<img class="img-fluid" src="img/blog/<?php echo $exibe2[1] ?>" width="800px" alt="">
												
										
                                            </p>
                                    <?php
                                        }
                                    /*FIM GALERIA*/
									?>
									<style>
											.coluna{
											float: left;
											width: 38%;
											}
											.row::after {
											content: "";
											clear: both;
											display: inline;
											}
										</style>

								</div>
							

						<!--FIM BLOG-->
						<br><br><br><br><br><br>
						<center>
					<?php include("functions/facebook-cont.html")?>
									</center>
									<br><br><br>
							<!-- Start nav Area -->
							
                            <section class="blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-40 header-text text-center">
							<h1 class="pb-10">Outras Postagens</h1>
							
						</div>
					</div>						
					<div class="row">
						<div class="row d-flex justify-content-center">
						<?php
							$query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blogImagem ON BlogImagem_Blog_Codigo = Blog_Codigo WHERE BlogImagem_Destaque = 's' AND BlogImagem_Blog_Codigo != ".$_GET['idb']." GROUP BY Blog_Codigo ORDER BY Blog_Codigo DESC LIMIT 2");
							while($exibe = mysqli_fetch_array($query)){
						?>	
						<div class="col-lg-6 col-md-6">
							
							<div class="thumb">
							
									<img class="img-fluid" src="img/blog/<?php echo $exibe[6] ?>"  alt="">
							
							</div>
							
							<div class="detais" >
								<a href="blog-single.php?idb=<?php echo $exibe[0] ?>">
									<h4><?php echo $exibe[1] ?></h4>
									<p>
										<?php echo substr($exibe[2],0,139) ?>
									</p>
								</a>
								<p class="date"><?php echo $exibe[3] ?></p>
							</div>
							
						</div>
						<?php } ?>
						</div>
					</div>
				</div>	
			</section>
                            <!-- End nav Area -->

                        


							</div>																		
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