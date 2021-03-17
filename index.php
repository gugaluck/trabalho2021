<?php
session_start();
require_once __DIR__."/libs/Html.class.php";
require_once __DIR__."/libs/Body.class.php";
require_once __DIR__."/libs/Div.class.php";
require_once __DIR__."/libs/Meta.class.php";
require_once __DIR__."/libs/Head.class.php";
require_once __DIR__."/libs/Title.class.php";
/* 
$metaCharset = new Meta("UTF-8");
$metaHttEquiv = new Meta(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Meta(null, "viewport", null, "width=device-width, initial-scale=1.0");

$title = new Title("Login");

$head = new Head();
$head->addElement($metaCharset);
$head->addElement($metaHttEquiv);
$head->addElement($metaName);
$head->addElement($title);

$body = new Body("body");
echo $title;
$container = new Div("container");

$html = new Html("pt-br", $head, $body);

echo $html;
*/
if(isset($_SESSION['nao_autenticado'])):
?>
<div>
    <p>Nome ou senha inválidos</p>
</div>
<?php
    endif;
    unset($_SESSION['nao_autenticado']);
?>
<h3>LOGIN</h3>
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
</body>
 
</html>