<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com GET</title>
</head>
<body>
    <?php

        /**
         * Sanitização de informações
         * FILTER_SANITIZE_SPECIAL_CHARS
         * FILTER_SANITIZE_NUMBER_INT
         * FILTER_SANITIZE_EMAIL
         * FILTER_SANITIZE_URL
         */
        if(isset($_POST['enviar-formulario'])):
            // Array de erros
            $erros = array();
           
            // Sanitize
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade,FILTER_VALIDADE_INT)):
                $erros[] = "Idade Precisa ser um inteiro";
            endif;

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email,FILTER_VALIDADE_EMAIL)):
                $erros[] = "Email inválido";
            endif;

            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url,FILTER_VALIDADE_URL)):
                $erros[] = "URL inválida";
            endif;

            if(!empty($erros)):
                foreach($erros as $er):
                    echo "<li>$er</li>";
                endforeach;
            else:
                echo "Dados Corretos!<br>";
            endif;
        endif;
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        Url: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>