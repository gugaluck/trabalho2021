<?php
session_start();
?>
 
<body>
    <div>
        <div>
            <div>
                <h3>Login</h3>
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div>
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
</body>
 
</html>