<?php

$x = 15;
$y = 20;
$result = $x + $y;

?>


<h1>Página Tesde de html</h1>

<p> Vocé é visitante de número #<?php echo $result ?>
<br> os valores das variáveis x e y são <?=$x?> e <?=$y?>, respectivamente.
<br>

<h2> Exemplo de laço de repetição</h2>

<h3>lista ordenada com for</h3>
<ol>
<?php for($i=0 ; $i < 15; $i++) {?>
		<li>Teste<?=($i+1)?></li>	
<?php }	?>
</ol>

<br>

<h3>lista não ordenada com while</h3>
<ul>
<?php $j=0;
	while ($j <= 20):
	echo "<li>Item $j</li>";
		$j++;
	endwhile;
?>
</ul>

<br>
<h3>lista ordenada  descrescente</h3>
<ol>
<?php for($i=20; $i> 0 ; $i--):?>
	<li>Novo Item <?=$i?></item>
<?php endfor; ?>
</ol>
	