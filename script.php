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
            //criando variáveis iniciais
            $nome = "";
            $idade = "";
            $categoria = "";
            
            //criando array ou lista de categorias
            $categories = array();

            //adicionando elementos no array
            array_push($categories, "Infantil");
            array_push($categories, "Adolescente");
            array_push($categories, "Adulto");
            $categories[] = "Idoso";

            if(isset($_POST['enviar'])){                
                if(empty($_POST['nome']) OR empty($_POST['idade'])){
                    echo "<script>
                    alert('Preencha todos os campos')
                    window.location.href='index.php'
                    </script>";                    
                }else{
                    if(strlen($_POST['nome'])<4 OR strlen($_POST['nome']) >100){
                        echo "<script>
                        alert('Nome não pode ter mais que 100 ou menos que 4 caracteres')
                        window.location.href='index.php'
                        </script>";
                    }else{
                        if(!filter_var($_POST['idade'], FILTER_VALIDATE_INT)){
                            echo "<script>
                            alert('Idade precisa ser um número')
                            window.location.href='index.php'
                            </script>";
                        }else{
                            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
                            
                            //verificar idade e definir categoria
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
                        }
                    }
                } 
            }
            

            //printar categoria
            echo "<b>Nome: </b>$nome<br/>";
            echo "<b>Idade: </b>$idade<br/>"; 
            echo "<b>Categoria: </b>$categoria<br/>";
        ?>

        <p><a href="index.php">Voltar</a></p>
    </body>
</html>