<!DOCTYPE html>
<html>
<head>
	<title>Will Server</title>
	<link rel="stylesheet" type="text/css" href=".css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href=".css/bootflat.css">
	<link rel="stylesheet" type="text/css" href=".css/materialize.css">
	<link rel="stylesheet" type="text/css" href=".css/style.css">
</head>
<body>

	<nav>
	    <div class="nav-wrapper">
	      <a href="localhost" class="brand-logo center">My Personal Server</a>
	    </div>
	</nav>
	
	<div class="collection wrapper">
		<?php
			$diretorio = "../"; 
			$ponteiro  = opendir($diretorio);
			while ($nome_itens = readdir($ponteiro)) {
			    $itens[] = $nome_itens;
			}
			sort($itens);
			foreach ($itens as $listar) {
			   if ($listar!="." && $listar!=".."){ 
			                if (is_dir($listar)) { 
			                        $pastas[]=$listar; 
			                } else{ 
			                        $arquivos[]=$listar;
			                }
			   }
			}
			if ($pastas != "" ) { 
			foreach($pastas as $listar){
			   print "<div class='col-md-2'><div class='color-swatches'><div class='swatches'><div class='clearfix'><img src='.css/pasta.png' class='img'></div><div class='infos'><a href='$diretorio/$listar' href='#!' class='collection-item'>$listar</a></div></div></div></div>";}
			   }
			if ($arquivos != "") {
			foreach($arquivos as $listar){
			   print "<div class='col-md-2'><div class='color-swatches'><div class='swatches'><div class='clearfix'><img src='.css/pasta.png' class='img'></div><div class='infos'><a href='$diretorio/$listar' href='#!' class='collection-item'>$listar</a></div></div></div></div>";}
			   }

		?>
	</div> 
	
    <footer>
      <div class="col-md-13">
            <div class="footer-copyright text-center footer"><img src=".css/logo.png" />Copyright &copy; 2016 Wilfison Batista.All rights reserved.</div>
      </div>
    </footer>
            
</body>
</html>