<?php
require_once("../includes/banco.php");
require_once("../includes/tabelas.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/revista.css" />
    <title>Bandas</title>
  </head>
  <body>
    <header>
      <div class="flex-container menu">
        <div><h1>Música em revista</h1></div>
        <ul class="list-menu">
          <li><a href="index.html" target="_blank">Página inicial</a></li>
          <li><a href="bandas.html" target="_blank">Bandas</a></li>
          <li><a href="cadastro.html" target="_blank">Cadastro</a></li>
          <li><a href="cifra.html" target="_blank">Cifras</a></li>
        </ul>
      </div>
    </header>
    <div class="flex-container entrevista">
      <div class="texto-entrevista">
        <h1>Sua revista de música digital</h1>
        <h2>Dica de bandas</h2>
        <table id="bandas">
          <thead>
            <tr>
              <th>Nome da Banda</th>
              <th>Ano de formação:</th>              
              <th>Albuns Gravados:</th>
              <th>Maior HIT:</th>
            </tr>
			<?php
			$registros = select_bandas();			
			foreach($registros as $registro) {
				echo "<TR>\n";
				//echo "<td>{$registro['id_banda']}</td>\n";
				echo "<td>{$registro['nome_banda']}</td>\n";
				echo "<td>{$registro['ano_banda']}</td>\n";	
				echo "<td>";
				
				echo "</td>\n";	
				echo "</TR>\n";
			}				
			?>
          </thead>
          <tbody>            
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
