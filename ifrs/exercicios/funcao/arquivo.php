<h2>Função que recebe uma array como argumento e imprime uma lista não ordenada</h2>
<?php

	$vetor = array("Tênis","Camiseta","Calça","Gravata","Cinto","Meia");
	
	
	function imprimeArray(array $vetor) {	  
		
	    foreach ($vetor as $valor) {
	      echo "<li> $valor </li>";
	    }
	  
	}

?>
<ul>
<?php  echo imprimeArray($vetor) ?>
</ul>

<h2>Função que recebe vários argumentos e imprime uma lista não ordenada</h2>
<?php
	
	function imprimeAnyArgumentos(...$args) {
		foreach ($args as $value) {
			echo "<li> $value </li>";
		}

	}	

?>

<ul>
	<?php echo imprimeAnyArgumentos("Rafael",true,"Claudia",3.1415,chr(35),"String qualquer",chr(321),"Final da lista") ?>
</ul>	




	

