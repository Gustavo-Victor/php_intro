<?php 

//criando array ou lista de categorias
$categories = array();

//adicionando elementos no array
array_push($categories, "Infantil");
array_push($categories, "Adolescente");
array_push($categories, "Adulto");
$categories[] = "Idoso";
$categoria;

//função para definir a categoria 
function defineCategoria(string $nome, string $idade):?string{
    global $categoria;
    global $categories;

    if(ValidaNome($nome) && ValidaIdade($idade)){
        //verificar idade e definir categoria      
        if($idade >=6 && $idade <=12){    
            $categoria = $categories[0];    
        }elseif ($idade <= 18){
            $categoria = $categories[1];
        }elseif($idade >= 18 && $idade < 65){
            $categoria = $categories[2];
        }else{
            $categoria = $categories[3];
        }

        setaMensagemSucesso("$nome de $idade anos compete na categoria: $categoria");
        $_SESSION['nome'] = $nome; 
        $_SESSION['idade'] = $idade; 
        $_SESSION['categoria'] = $categoria;
        return null;
    }else{
        return obterMensagemErro();
    }
}



