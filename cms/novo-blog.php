<?php include("functions/conexao.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>BLOG - INSERIR</title>
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
						<div class="card-body"><h5 class="card-title" style="text-align: center;">Inserir no Blog</h5>
							<form class="" action="functions/inserir_blog.php" enctype="multipart/form-data" method="post">
								<div class="position-relative form-group"><label for="exampleEmail" class="">TÍTULO</label><input name="titulo" id="exampleEmail" placeholder="Insira um Título"  class="form-control"></div>
								<div class="position-relative form-group"><label for="examplePassword" class="">CORPO</label><input name="corpo" id="examplePassword" placeholder="Insira o Corpo" type="text" class="form-control"> </div>
								<div class="position-relative form-group"><label for="examplePassword" class="">TEXTO</label><input name="texto" id="examplePassword" placeholder="Insira o Texto" type="text" class="form-control"> </div>
								<div class="position-relative form-group"><input type="file" style=" margin-left: 100px;"name="arquivo[]" multiple="multiple">  
							    <br><br>
                                <input style="height: 30px; width: 100px; margin-left: 300px;" type='submit' value='Enviar' class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example"> <br><br>
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