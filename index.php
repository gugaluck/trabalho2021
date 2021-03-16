<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
 
<body>
    <section>
        <div>
            <div>
                <div>
                    <h3>Login</h3>
                    <?php
                        if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                        <p>Nome ou senha inválidos</p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="campo">
                                <div class="control">
                                    <input name="nome" name="text" placeholder="Seu nome" autofocus="">
                                </div>
                            </div>
 
                            <div class="campo">
                                <div class="control">
                                    <input name="senha" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>