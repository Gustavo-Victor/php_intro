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

        <form action="script.php" method="POST" name="formulario" id="form">
            <fieldset>
                <legend>Dados do(a) competidor(a)</legend>
                <label for="nome">Seu nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Seu nome..." required="required"> <br>
                
                <br><label for="idade">Sua idade:</label>
                <input type="number" id="idade" name="idade" required="required" placeholder="Sua idade"> <br> <br>
                
                <input type="submit" value="Enviar"> <br>
            </fieldset>
        </form>
    </body>
</html>