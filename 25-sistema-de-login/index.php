<?php
    // Conexão
    require_once 'db_connect.php';

    session_start();

    // Botão enviar
    if(isset($_POST['btn-entrar'])):
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if(empty($login) or empty($senha)):
            $erros[] = "<li>O campo login/senha precisa ser preenchido</li>";
        else: 
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0):
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                else:
                    $erros[] = "<li>Usuário e senha não conferem</li>";
                endif;
            else:
                $erros[] = "<li>Usuário inexistente</li>";
            endif;
        endif;
    endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        html,body{
            margin: 0;
            padding: 0;
        }

        button{
            boder-radius: 20px;
        }

        h1{
            margin:0;
        }

        form{
            background: lightgray;
            font-family: arial;
            padding: 25px;
        }

        h1{
            background: lightblue;
            font-family: arial;
            text-align: center;
        }

        input{
            margin-bottom: 5px;
        }

        .forms{
            align-items: center;
            max-width:600px;
            border: 1px solid black;
            margin: 0 auto;
        }
        
    </style>
</head>
<body>
    <?php
        if(!empty($erros)):
            foreach($erros as $er):
                echo $er;
            endforeach;
        endif;
    ?>

    <section class="forms">
        <h1>Login</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="loginContent">
                Login: <input type="text" name="login" placeholder="Digite o login"><br>
                Senha: <input type="password" name="senha" placeholder="Digite a senha"><br>
                <button type="submit" name="btn-entrar">Entrar</button><br>
            </div>
        </form>
    </section>
</body>
</html>