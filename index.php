<h3> LOGIN </h3>
<?php
include('config.php');
if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario where (nome = '{$nome}') and (senha = '{$senha}')";
    $sql = $pdo->prepare($sql);
    $sql->execute();

    try {
        $conexao = new PDO("mysql:host=localhost; dbname=crudsimples", "root", "123456");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("set names utf8");
    } catch (PDOException $erro) {
        echo "Erro na conexão:" . $erro->getMessage();
    }
    
    if($sql->rowCount() == 1){
        $info = $sql->fetch();
        echo $info['senha'];
        if(password_verify($senha, password_hash($info['senha'], PASSWORD_DEFAULT))) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $info['id'];
            $_SESSION['nome'] = $info['nome'];
            header("Location: menu.php");
            die();
        }else{
            echo 'Nome ou senha incorretos!';
        }
    }else{
        echo 'Nome não encontrado!';
        
    }
}
?>
<form method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="password" name="senha" placeholder="Senha">
    <input type="submit" value="Entrar" name="acao">
</form>