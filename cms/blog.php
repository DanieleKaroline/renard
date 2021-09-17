<?php include("functions/conexao.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CMS - BLOG</title>
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
                width: 750px !important;
            }
            </style>
				 <div class="col-md-6">
					<div class="main-card mb-3 card">
						<div class="card-body"><h5 class="card-title" style="text-align: center;">Blog</h5>
							<form class="" action="functions/inserir.php" method="POST">
								<div class="position-relative form-group">
									<!--<table border='1'>
										<tr>
											<th>COD</th>
											<th>Titulo</th>
											<th colspan='2' >Ação</th>
										</tr>-->
									<table class="mb-0 table table-striped">
										<thead>
										<tr>
											<th>Codigo</th>
											<th>Titulo</th>
											<th>Data</th>
											<th>Editar</th>
											<th>Deletar</th>
										</tr>
										</thead>
										<tbody>
										<?php
											$query = mysqli_query($conexao, "SELECT * FROM blog ORDER BY Blog_Codigo DESC");
											while($exibe = mysqli_fetch_array($query)){
										?>
											<tr>
												<td><?php echo $exibe[0] ?></td>
												<td><?php echo $exibe[1] ?></td>
												<td><?php echo $exibe[3] ?></td>
												<td><a href="editar-blog.php?idu='<?php echo $exibe[0] ?>'">Editar</a></td>
												<td><a href="functions/deletar-blog.php?idu='<?php echo $exibe[0] ?>'">X</a></td>
											</tr>
										<?php
											}
										?>
										</tbody>
									</table> <br>
									<a href="novo-blog.php"><input type="button" style="height: 30px; width: 100px; margin-left: 300px;" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example" value="Inserir"></a>
								</div>									
							</form>									
						</div>									
					</div>									
				</div>									
			</div>									
			<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
