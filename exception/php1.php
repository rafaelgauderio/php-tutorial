<?php


/* ordem de argumentos que podem ser passados na classe Exception 
	message, code, file, line
	A exceção pode ser tratada ou capturada
	Geram um erro fatal e interrompem a execução do script quando não capturadas.
	É possível obter a mensagem, código, arquivo e linha geradores da exceção.
	Podem facilmente ser capturadas e tratadas através da estrutura Try - Catch - Finally.
*/
throw new Exception("Essa é uma exceção teste");

echo "\n... executando ... \n";