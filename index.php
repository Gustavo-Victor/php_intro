<?php 

//título pra ficar bonitinho
echo "<h1>Competição de Natação</h1>";
echo "<p>Decidindo categoria...</p>";

//criando array ou lista de categorias
$categories = array();

//ver elementos do array
//print_r($categories); 
//echo "<br/>";

//adicionando elementos no array
array_push($categories, "Infantil");
array_push($categories, "Adolescente");
array_push($categories, "Adulto");

//ver elementos do array
//print_r($categories);
echo "<br/>";

//criando nome, idade e categoria e vendo
$nome = "Gustavo";
$idade = 16;
$categoria; 
//var_dump($nome, $idade);

//definir categoria com base na idade
if($idade < 6){
    $categoria = "";
    echo "Categoria inválida - você não pode participar";
}elseif($idade >=6 && $idade <=12){    
    $categoria = $categories[0];    
}elseif ($idade <= 18){
    $categoria = $categories[1];
}else{
    $categoria = $categories[2];
}

//printar categoria
echo "<b>Nome: </b>$nome<br/>";
echo "<b>Idade: </b>$idade<br/>"; 
echo "<b>Categoria: </b>$categoria<br/>";
