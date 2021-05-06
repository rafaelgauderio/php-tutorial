<?php
$catetorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve conter no mínimo 3 caracteres';
    return;
}
if(strlen($nome) > 40)
{
    echo "O nome deve conter menos de 40 caracteres";
    return;
}
if(!is_numeric($idade))
{
    echo "Informe um número inteiro para idade";
    return;
}


if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome. " compete na categoria " .strtoupper($categorias[$i]);
    }
}
else if($idade >= 13 && $idade < 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome. " compete na categoria ADOLESCENTE";
    }
}
else if ($idade >= 18 && $idade <65)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome. " compete na categoria ADULTO";
    }
}

else {
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'Idoso')
            echo "O nadador ".$nome. " compete na categoria IDOSO";
    }

}
?>