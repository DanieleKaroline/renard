<?php include("functions/conexao.php"); ?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CMS - CONTATOS SINGLE</title>
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
    <div class="app-main__outer">
        <style>
            .card{
                width:750px !important;
            }
            </style>
				 <div class="col-md-6" style="">
					<div class="main-card mb-3 card" >
						<div class="card-body"><h5 class="card-title" style="text-align: center;">Contatos</h5>
							<form class="" action="functions/inserir.php" method="POST" style="width:auto;">
								<div class="position-relative form-group">
									<!--<table border='1'>
										<tr>
											<th>COD</th>
											<th>Email</th>
											<th colspan='2' >Ação</th>
										</tr>-->
									<table class="mb-0 table table-striped">
										<thead>
										<tr>
											<th>Codigo</th>
											<th>Email</th>
											<th>Nome</th>
                                            <th>Assunto</th>
                                        
										</tr>
										</thead>
										<tbody>
										<?php
											$query = mysqli_query($conexao, "SELECT * FROM contato WHERE id = ".$_GET["idb"]);
											while($exibe = mysqli_fetch_array($query)){
                                        ?>
                                        <?php
                                         $string1= $exibe[4] ;
                                                
                                                ?>
											<tr>
												<td><?php echo $exibe[0] ?></td>
												<td><?php echo $exibe[2] ?></td>
                                                <td><?php echo $exibe[1] ?></td>
                                                <td><?php echo $exibe[3] ?></td>
                                               
                                            </tr>     
                                            <tr>                                                                                 
                                            <th>Mensagem:</th>
                                            <td><?php echo $exibe[4] ?></td>
                                                <td></td>
                                            </tr>
                                            
										<?php
											}
										?>
                                        </tbody>
                                       
									</table><br>
                                    <a href="https://mail.google.com/mail/"><input type="button" style="height: 30px; width: 100px; margin-left: 230px;" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example" value="Responder"></a>
                                    <a href="contatos.php"><input type="button" style="height: 30px; width: 100px; margin-left: 50px;" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example" value="Voltar"></a>
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

                    <script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>