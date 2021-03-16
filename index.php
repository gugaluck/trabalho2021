<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>
        <div class="body">
            <div>
                <h3 class="h3">Login</h3>
                <div class="invalido">
                    <p>Nome ou senha inválido</p>
                </div>
                <div class="box">
                    <form action="login.php" method="POST">
                        <div class="campo">
                            <div class="nome">
                                <input name="nome" name="text" placeholder="Seu nome" autofocus="">
                            </div>
                        </div>

                        <div class="campo">
                            <div class="senha">
                                <input name="senha" type="password" placeholder="Sua senha">
                            </div>
                        </div>

                        <button type="submit" class="button">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>