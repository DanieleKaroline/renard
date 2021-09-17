<?php include("functions/conexao.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>BLOG - EDITAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
	<?php include("menus.php"); ?>
<!--FORM--><div class="app-main__outer">
<style>
            .card{
                width:700px !important;
            }
            </style>
				 <div class="col-md-6">
					<div class="main-card mb-3 card">
						<div class="card-body"><h5 class="card-title" style="text-align:center;">EDITAR BLOG</h5>
							<?php
								$query = mysqli_query($conexao, "SELECT * FROM blog WHERE Blog_Codigo = ". $_GET['idu']. ";");
								$exibe = mysqli_fetch_array($query);
							?>
							<form action='functions/atualizar-blog.php' method='post'>
							  <input type="hidden" name="id" style="width:250px;margin-left: 250px;text-align:center;" value="<?php echo $exibe[0] ?>">
							  <h6 style="text-align:center;">Título</h6><br> 
							  <input type="text" name="titulo"  style="width:250px;margin-left: 
							  250px;text-align:center;" value="<?php echo $exibe[1] ?>"> <br><br>
							  <h6 style="text-align:center;">Corpo</h6> <br>
							  <textarea name="corpo" style="width:250px;margin-left: 250px;text-align:center;"><?php echo $exibe[2] ?></textarea><br><br>
							  <h6 style="text-align:center;">Data</h6> <br>
							  <input type="datetime" style="width:250px;margin-left: 250px;text-align:center;" name="data" value="<?php echo $exibe[3] ?>"> <br><br>
							  <h6 style="text-align:center;">Texto</h6> <br>
							  <textarea name="texto" style="width:250px;margin-left: 250px;text-align:center;"><?php echo $exibe[4] ?> </textarea><br><br><br><br>
							  
							  <input type="submit" style="height: 30px; width: 100px; margin-left: 300px;" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
							</form>				

					
						</div>									
					</div>									
				</div>									
			</div>		
			<style type="text/css">
								.input{
								
								}
								</style>							
			<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
	<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>