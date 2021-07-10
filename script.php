<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Script PHP</title>
    </head>
    <body>
        <h1>Recebendo dados do formulário</h1>

        <?php 
            //criando array ou lista de categorias
            $categories = array();

            //ver elementos do array
            //print_r($categories); 
            //echo "<br/>";

            //adicionando elementos no array
            array_push($categories, "Infantil");
            array_push($categories, "Adolescente");
            array_push($categories, "Adulto");
            $categories[] = "Idoso";

            //criando nome, idade e categoria e vendo
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
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
            }elseif($idade >= 18 && $idade < 65){
                $categoria = $categories[2];
            }else{
                $categoria = $categories[3];
            }

            //printar categoria
            echo "<b>Nome: </b>$nome<br/>";
            echo "<b>Idade: </b>$idade<br/>"; 
            echo "<b>Categoria: </b>$categoria<br/>";
        ?>

        <p><a href="index.php">Voltar</a></p>
    </body>
</html>