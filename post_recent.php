<div class="single-widget recent-posts-widget">					
	<h4 class="title">Postagens Recentes</h4>
	<?php	
		$query = mysqli_query($conexao, "SELECT * FROM blog INNER JOIN blogImagem ON BlogImagem_Blog_Codigo = Blog_Codigo WHERE BlogImagem_Destaque = 's' GROUP BY Blog_Codigo ORDER BY Blog_Codigo DESC LIMIT 4");
		while($exibe = mysqli_fetch_array($query)){
	?>
	<div class="blog-list ">
		<div class="single-recent-post d-flex flex-row" style=" margin: 0.5vw;">
			<div class="recent-thumb">
				<img src="img/blog/<?php echo $exibe[6]?>" style="width: 80px" alt="">
			</div>
			<div class="recent-details">
				<a href="blog-single.php?idb=<?php echo $exibe[0] ?>">
					<h4>
					<?php echo $exibe[1] ?>
					</h4>
				</a>
			</div>
		</div>																															
	</div>
	<?php } ?>				
</div>

