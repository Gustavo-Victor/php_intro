<?php 
    include_once ('servicos/servicoMensagem.php');
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
                $mensagem_sucesso = obterMensagemSucesso();
                if(!empty($mensagem_sucesso)){
                    echo "<script>alert('".$mensagem_sucesso."')</script>";
                    removerMensagemSucesso();
                }else{
                    $mensagem_erro = obterMensagemErro();
                    if(!empty($mensagem_erro)){
                        echo "<script>alert('".$mensagem_erro."')</script>";
                        removerMensagemErro();
                    }
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
    </body>
</html>