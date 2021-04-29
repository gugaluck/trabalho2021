<?php
    require_once __DIR__."/config.php";
    public function __construct() {
        $this->instanciaConexaoPdoAtiva = PdoConexao::getInstancia();
    }
    public function create( $objeto ) {
        $id = $this->getNewIdContato();
        $nome = $objeto->getNome();
        $email = $objeto->getEmail();
        $usu_id = $objeto->getUsuId();
        $datacadastro = $objeto->getDatacadastro();
        $dataalteracao = $objeto->getDataalteracao();
        $sqlStmt = "INSERT INTO `pessoa` (`id`, `nome`, `email`, `usu_id`, `datacadastro`, `dataalteracao`) VALUES ($id, $nome, $email, $usu_id, $datacadastro, $dataalteracao)";
        try {
            $operacao = $this->instanciaConexaoPdoAtiva->prepare($sqlStmt);
            $operacao->bindValue(":id", $id, PDO::PARAM_INT);
            $operacao->bindValue(":nome", $nome, PDO::PARAM_STR);
            $operacao->bindValue(":email", $email, PDO::PARAM_STR);
            $operacao->bindValue(":usu_id", $usu_id, PDO::PARAM_INT);
            $operacao->bindValue(":datacadastro", $datacadastro, PDO::PARAM_STR);
            $operacao->bindValue(":dataalteracao", $dataalteracao, PDO::PARAM_STR);
            if($operacao->execute()){
                if($operacao->rowCount() > 0) {
                    $objeto->setID($id);
                    return true;
                } else {
                    return false;
                }
                } else {
                return false;
            }
        } catch( PDOException $excecao ) {
                echo $excecao->getMessage();
        }
    }
?>