<?php
// cookie: é um pequeno arquivo de computador ou pacote de dados enviados por
// um site de Internet para o navegador do usuário, quando o utilizador visita o site
//cookie fica gravado no navegador
//comando setcookie avisa que assim que o navegador receber a página e para ele criar o cookie
//ao terminar de executar a página, vai criar no navegador o cookie
//2 parametro time dizendo que a cada 60 segundos expira o cookie
//EXCLUIR: coloca um valor negativo time - 5 para EXCLUIR um cookie
//ler um cookie = $_COOKIE
setcookie('visitado',1, time() + 60);

//verificar o array de cockies
//vai dar erro no inicio, pois logo a abrir a página o array cookie não tem o index visitado
//@ na frente da variável para suprimir o NOTICE
if(@$_COOKIE['visitado']) {

  echo "Que bom que tu voltaste!";
} else {
  echo "Seja bem-vindo!";
}



?>