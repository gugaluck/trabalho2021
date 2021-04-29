<?php
//require('autoload.php');
require_once __DIR__."/libs/audio.class.php";
require_once __DIR__."/libs/Body.class.php";
require_once __DIR__."/libs/Div.class.php";
require_once __DIR__."/libs/form.class.php";
require_once __DIR__."/libs/Head.class.php";
require_once __DIR__."/libs/Html.class.php";
require_once __DIR__."/libs/Html2.class.php";
require_once __DIR__."/libs/input.class.php";
require_once __DIR__."/libs/label.class.php";
require_once __DIR__."/libs/li.class.php";
require_once __DIR__."/libs/Link.class.php";
require_once __DIR__."/libs/LinkCss.class.php";
require_once __DIR__."/libs/Meta.class.php";
require_once __DIR__."/libs/Nav.class.php";
require_once __DIR__."/libs/Script.class.php";
//require_once __DIR__."/libs/Span.class.php";
require_once __DIR__."/libs/Tag.I.class.php";
require_once __DIR__."/libs/Texto.class.php";
require_once __DIR__."/libs/Title.class.php";
require_once __DIR__."/libs/ul.class.php";
require_once __DIR__."/libs/video.class.php";
require_once __DIR__."/crud/create.php";
require_once __DIR__."/crud/delete.php";
require_once __DIR__."/crud/read.php";
require_once __DIR__."/crud/update.php";

$metaCharset = new Meta("UTF-8");
$metaHttEquiv = new Meta(null, null, "X-UA-Compatible", "IE=edge");
$metaName = new Meta(null, "viewport", null, "width=device-width, initial-scale=1.0");

$title = new Title("Minha Página");

$linkBootstrap = new LinkCss("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css","stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl","anonymous");

$head = new Head();
$head->addElement($metaCharset);
$head->addElement($metaHttEquiv);
$head->addElement($metaName);
$head->addElement($linkBootstrap);
$head->addElement($title);

$body = new Body("body");

$container = new Div("container");

$barra = new Div("row");
$conteudoBarra = new Div("col bg-primary");
$texto = new Texto("Menu");
$conteudoBarra->addElement($texto);
$barra->addElement($conteudoBarra);

$areaprincipal = new Div("row");
$menu = new Div("col-sm-2");
//$menu->addElement($texto);

//itens do menu
$menuConteudo = new Ul("list-group");
$menuConteudo->addElement(new li("list-group-item", "Pessoas"));
$menuConteudo->addElement(new li("list-group-item", "Produtos"));
$menuConteudo->addElement(new li("list-group-item", "Contas"));
$menuConteudo->addElement(new li("list-group-item", "Créditos"));
$menu->addElement($menuConteudo);

$miolo = new Div("col-sm-10 bg-danger");
$miolo->addElement($texto);

$areaprincipal->addElement($menu);
$areaprincipal->addElement($miolo);

$container->addElement($barra);
$container->addElement($areaprincipal);

$body->addElement($container);

$html = new Html("pt-br", $head, $body);

echo $html;

$contato1 = new Contato( "3", "gudfgdf", "teste@teste", "1", "10/10", "10/10");

$PersitenciaContato1 = new Contato();
if($PersitenciaContato1->create($contato1)){
       echo 'Inserido no banco';
}

var_dump($PersitenciaContato1->read(1));
$contato2 = $PersitenciaContato1->read(1);

$contato1->setNome("gustavo");
$contato1->setEmail("teste@testewfew");

if($PersitenciaContato1->update($contato1)){
       echo 'Atualizado no banco';
}

var_dump($PersitenciaContato1->read(1));
if($PersitenciaContato1->delete(1)){
    echo 'Excluído do banco';
}

?>

<hr>
    <a href="index.php" class="btn btn-default">Voltar para o início</a>
    <a href="cadastro.php" class="btn btn-success">Cadastrar</a>
<hr>