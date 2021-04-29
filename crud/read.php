<?php
    require_once __DIR__."/config.php";
    public function __construct() {
        $this->instanciaConexaoPdoAtiva = PdoConexao::getInstancia();
    }
    public function read( $id ) {
        $sqlStmt = "SELECT * from 'pessoa' WHERE ID=:id";
        try {
            $operacao = $this->instanciaConexaoPdoAtiva->prepare($sqlStmt);
            $operacao->bindValue(":id", $id, PDO::PARAM_INT);
            $operacao->execute();
            $getRow = $operacao->fetch(PDO::FETCH_OBJ);
            $nome = $getRow->NOME;
            $email = $getRow->EMAIL;
            $usu_id = $getRow->USU_ID;
            $datacadastro = $getRow->DATACADASTRO;
            $dataalteracao = $getRow->DATAALTERACAO;
            $id = $this->getNewIdContato();

            $objeto = new Contato( $nome, $email, $usu_id, $datacadastro, $dataalteracao );
            $objeto->setId($id);
            return $objeto;
        } catch( PDOException $excecao ){
            echo $excecao->getMessage();
        }
    }
?>