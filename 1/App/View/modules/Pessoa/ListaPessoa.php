<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Pessoas</title>
    </head>
    <body>
        <?php

            foreach ($pessoaModel->rows as $view) {
                echo $view['UsuarioId']    . '</br>';
                echo $view['UsuarioNome']  . '</br>';
                echo $view['UsuarioEmail'] . '</br>';
                echo $view['UsuarioSenha'] . '</br></br>';
            }

        ?>
    </body>
</html>