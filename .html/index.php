<!DOCTYPE html>
<html>
<head>
	<title>Will Server</title>
	<link rel="stylesheet" type="text/css" href=".css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href=".css/bootflat.css">
	<link rel="stylesheet" type="text/css" href=".css/style.css">
</head>
<body>

	<nav>
	    <div class="nav-wrapper">
	      <span>My Personal Server</span>
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
			   print "<a href='$diretorio/$listar' href='#!' class='collection-item'><div class='col-md-2'><div class='color-swatches'><div class='swatches'><div class='clearfix'><img src='.css/pasta.png' class='img'></div><div class='infos'>$listar</div></div></div></div></a>";}
			   }
			if ($arquivos != "") {
			foreach($arquivos as $listar){
			   print "<a href='$diretorio/$listar' href='#!' class='collection-item'><div class='col-md-2'><div class='color-swatches'><div class='swatches'><div class='clearfix'><img src='.css/pasta.png' class='img'></div><div class='infos'>$listar</div></div></div></div></a>";}
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