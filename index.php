<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>

        <h2>Formulário para Inscrição de competidores de natação</h2>
        <!--Exibir mensagem em caso de erro-->
        <div id="erro">
            <?php 
                if(isset($_SESSION['mensagem_erro']) && !empty($_SESSION['mensagem_erro'])){
                    echo "<script>alert('".$_SESSION['mensagem_erro']."')</script>";
                    unset($_SESSION['mensagem_erro']);
                }
            ?>
        </div>

        <!--Formulário para inserção de competidores-->
        <form action="script.php" method="POST" name="formulario" id="form">
            <fieldset>
                <legend>Dados do(a) competidor(a)</legend>
                <label for="nome">Seu nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Seu nome..."> <br>
                
                <br><label for="idade">Sua idade:</label>
                <input type="text" id="idade" name="idade" placeholder="Sua idade"> <br> <br>
                
                <input type="submit" value="Enviar" name="enviar"> <br>
            </fieldset>                    
        </form>

        <!--Mostrar informações dos competidores-->
        <div id="mostrar">
            <?php 
                if(isset($_SESSION['mostrar']) && $_SESSION['mostrar'] == true){
                    echo "<p><b>Nome: </b>".$_SESSION['nome']."</p>";
                    echo "<p><b>Idade: </b>".$_SESSION['idade']."</p>";
                    echo "<p><b>Categoria: </b>".$_SESSION['categoria']."</p>";
                    unset($_SESSION['mostrar']);
                    unset($_SESSION['categoria']);
                    unset($_SESSION['nome']);
                    unset($_SESSION['idade']);
                }
            ?>
        </div>
    </body>
</html>