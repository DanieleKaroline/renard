<?php
include ("functions/conexao.php")
?>
 <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <br> <br> <br> <br> <br> <br> <br> <br>
   <!-- Team Starts Here -->
   <div class="team-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="section-heading">
						<?php 
							$query5 = mysqli_query($conexao,"SELECT * FROM conteudo WHERE conteudo_codigo = 21;");        
							while($exibe5 = mysqli_fetch_array($query5)) { 
						?>
						<h2 style="text-align: center;"><?php echo $exibe5[1]?></h2>
						<p style="text-align: center;"><?php echo $exibe5[2]?></p>
					</div>
				</div>
				<?php 
					$query6 = mysqli_query($conexao,"SELECT  conteudo.conteudo_codigo, conteudo.conteudo_titulo, conteudo.conteudo_corpo, imagem.imagem_codigo, imagem.imagem_nome FROM conteudo INNER JOIN imagem ON conteudo.conteudo_codigo = imagem.imagem_conteudo_codigo WHERE conteudo_link_codigo = 2 ORDER BY conteudo.conteudo_codigo DESC LIMIT 3;");        
					while($exibe6 = mysqli_fetch_array($query6)) { 
				?>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="team-item">
						<img src="img/<?php echo $exibe6[4]?>" style="widht: 200px; height: 200px; align-items: center; margin-left: 80px;" alt="">
						<div class="down-content">
							<h4 style="text-align: center;"><?php echo $exibe6[1]; ?></h4>
							<h5 style="text-align: center; color: #a8a8a8;"><?php echo $exibe6[2]; ?></h5>
						</div>
					</div>
				</div>
				<?php } }?>	
            </div>
        </div>
    </div>
    <!-- Team Ends Here -->