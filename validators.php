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
         * Validadores de informações
         * FILTER_VALIDATE_INT
         * FILTER_VALIDATE_EMAIL
         * FILTER_VALIDATE_URL
         * FILTER_VALIDATE_FLOAT
         * FILTER_VALIDATE_IP
         */
        if(isset($_POST['enviar-formulario'])):
            $erros = array();
           
            if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = "Idade Precisa ser um inteiro";
            endif;

            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email inválido";
            endif;

            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                $erros[] = "Peso precisa ser um float";
            endif;

            if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                $erros[] = "URL inválida";
            endif;

            if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                $erros[] = "IP inválido";
            endif;

            if(!empty($erros)):
                foreach($erros as $er):
                    echo "<li>$er</li>";
                endforeach;
            else:
                echo "Seus dados estão corretos!";
            endif;

        endif;
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        Url: <input type="text" name="url"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="ip"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>
</html>