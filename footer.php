<!--section class="brand-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col single-brand">
                <img class="img-fluid" src="img/l1.png" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="img/l2.png" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="img/l3.png" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="img/l4.png" alt="">
            </div>
            <div class="col single-brand">
                <img class="img-fluid" src="img/l5.png" alt="">
            </div>
        </div>
    </div>	
</section-->

<!-- End brand Area -->	
<?php
include("functions/conexao.php")
?>
<!-- start footer Area -->		
<footer class="footer-area section-gap" > 
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="single-footer-widget">
                    <h6>Melhores Produtos</h6>
                    <ul class="footer-nav">
                        <?php
                            $query = mysqli_query($conexao, "SELECT Conteudo_Codigo, Conteudo_Titulo FROM conteudo WHERE Conteudo_Link_Codigo = 6 ORDER BY Conteudo_Codigo DESC LIMIT 3");
                            while($exibe = mysqli_fetch_array($query)){
                        ?>
                        <li><a href="services-details.php?ids=<?php echo $exibe[0] ?>"><?php echo $exibe[1] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  col-md-12">
                <div class="single-footer-widget newsletter">
                    <h6>Boletim de Notícias</h6>
                    <p>Você pode confiar em nós. enviamos apenas ofertas promocionais, não um único spam.</p>
                    <div id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                            <div class="form-group row" style="width: 100%">
                                <div class="col-lg-8 col-md-12">
                                    <input name="EMAIL" placeholder="Enviar Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                </div> 
                            
                                <div class="col-lg-4 col-md-12">
                                    <button class="nw-btn primary-btn">Cadastrar<span class="lnr lnr-arrow-right"></span></button>
                                </div> 
                            </div>		
                            <div class="info"></div>
                        </form>
                    </div>		
                </div>
            </div>
            <!--div class="col-lg-3  col-md-12">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Instragram Feed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="img/i1.jpg" alt=""></li>
                        <li><img src="img/i2.jpg" alt=""></li>
                        <li><img src="img/i3.jpg" alt=""></li>
                        <li><img src="img/i4.jpg" alt=""></li>
                        <li><img src="img/i5.jpg" alt=""></li>
                        <li><img src="img/i6.jpg" alt=""></li>
                        <li><img src="img/i7.jpg" alt=""></li>
                        <li><img src="img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>						
        </div-->

        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
				Copyright &copy;
				<script>
					document.write(new Date().getFullYear());
				</script>
				Todos os direitos reservados | Este modelo é feito por Renard
			</p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->	

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>			
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>			
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>	
<script src="js/owl.carousel.min.js"></script>	
<script src="js/hexagons.min.js"></script>							
<script src="js/jquery.nice-select.min.js"></script>	
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>							
<script src="js/mail-script.js"></script>	
<script src="js/main.js"></script>	