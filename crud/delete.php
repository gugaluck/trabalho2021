<?php
    require_once __DIR__."/config.php";
    public function __construct() {
        $this->instanciaConexaoPdoAtiva = PdoConexao::getInstancia();
    }
    public function delete( $id ) {
        $sqlStmt = "DELETE FROM 'pessoa' WHERE ID=:id";
        try {
            $operacao = $this->instanciaConexaoPdoAtiva->prepare($sqlStmt);
            $operacao->bindValue(":id", $id, PDO::PARAM_INT);
            if($operacao->execute()){
                if($operacao->rowCount() > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch ( PDOException $excecao ) {
            echo $excecao->getMessage();
        }
    }
?>