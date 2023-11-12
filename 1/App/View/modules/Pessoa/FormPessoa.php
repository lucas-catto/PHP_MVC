<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Pessoa</title>
        <style>
            input { display: block; }
        </style>
    </head>
    <body>
        
        <fieldset>
            <form action="/pessoa/form/save" method="post">
                <input type="text" name="nome"  placeholder="Nome">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="senha" placeholder="Senha">

                <button type="submit">Enviar!</button>

            </form>
        </fieldset>
    </body>
</html>
