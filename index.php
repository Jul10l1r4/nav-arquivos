<!DOCTYPE html>
<html lang="pt-BR">
	<head>
      <meta charset="utf-8"/>
      <title>Julio Lira desenvolvimento de sites - Julio Lira aplicações e colaborações </title>	
      <!--link rel="icon" type="image/png" href="img/favicon.png" /-->
      <meta name="viewport" content="width=device-width, user-scalable=no"/>
      <link rel="stylesheet" href="https://jul10l1r4.github.io/HTTP_-_Resposta/style/texto.css"/>
			<style>
				body{
					background:#fff;
				}
				.saida{
					width:500px;
					padding:5px;
					background:#ddd;
					color:#000;
					margin:5px;
					font-size:20px;
					border-radius:15px;
					display:block;
				}
			</style>
    </head>
    <body>
			<h1>Encontre seus arquivos</h1>
			<code>
					Ordenar por:
				 <a href="?valor=-t">
					data de modificação
				</a>,
				<a href="?valor=-S">
					por tamanho
				</a>,
				<a href="?valor=-X">
					por ordem alfabética
				</a>
			</code>
			<?php
				$val = $_GET['valor'] ? $_GET['valor'] : "";
				$row = exec("ls $val",$output,$error);
					while(list(,$row) = each($output)){
						echo " <a class=\"saida\" href=\"$row\">$row</a> ";
				}
				if($error){
					echo "porra deu erro";
				}
			?>
    </body>
  </html>
