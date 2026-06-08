<?php
require_once "MyConnect.php";
class ManipularDados extends MyConnect{
    protected $tabela, $campo, $campoId, $valor, $sql;
    
    /**Método para setar a tabela */
    public function setTabela($t){
        $this->tabela = $t;
    }
    public function getTabela(){
        return $this->tabela;
    }
    public function lerTabela($t){
        $this->setTabela($t);
        $this->getTabela();
    }
    /**Método para setar os campos */
    public function setCampo($c){
        $this->campo = $c;
    }
    public function getCampo(){
        return $this->campo;
    }
    /**Método para setar o campo id */
    public function setCampoId($cId){
        $this->campoId = $cId;
    }
    public function getCampoId(){
        return $this->campoId;
    }
    /**Método para setar o valor */
    public function setValor($v){
        $this->valor = $v;
    }
    public function getValor(){
        return $this->valor;
    }

    /**Método para inserir dados no banco */
    public function inserir(){
        $sql = "INSERT INTO $this->tabela ($this->campo) VALUES ($this->valor)";
        
        if(self::query($sql)){
            echo '<div class="alert alert-success">Cadastrado com sucesso!</div>'; 
        }else{
            echo '<div class="alert alert-danger">Erro ao cadastrar!</div>'; 
        }
    }
    /**Método para apagar dados no banco */
    public function apagar(){
        $sql = "DELETE FROM $this->tabela WHERE $this->campoId = $this->valor";
        // DELETE FROM $tabela WHERE $campoId = $valorId
        
        if(self::query($sql)){
            echo '<h3 class="fw-bold text-dark-emphasis mb-3">Item Removido</h3>';
            echo '<div class="alert alert-success">Apagado com sucesso!</div>';
        }else{
            echo '<div class="alert alert-danger">Erro ao apagar!</div>';
        }
    }
    /**Método para atualizar dados no banco */
    public function atualizar(){
        $sql = "UPDATE $this->tabela SET $this->campo WHERE $this->campoId = $this->valor";
        echo self::query($sql) ? '<div class="alert alert-success">Dados atualizados com sucesso</div>' : '<div class="alert alert-success">Erro ao atualizar os dados!</div>';
    }
    /**Método para verificar a existência de dados duplicados*/
    public function duplicados($valorId){
        $sql = "SELECT * FROM $this->tabela WHERE $this->campoId = '$valorId'";
        $qr = self::query($sql);
        $dado = self::linhas($qr);
        return $dado;
    }
    /**Método para verificar a quantidade de dados encontrados e retornará um valor inteiro*/
    public function totalDados(){
        $this->sql = "SELECT $this->campoId FROM $this->tabela ORDER BY $this->campoId";
        $this->query = self::query($this->sql);
        return self::linhas($this->query);
        // return $dado;
    }
}
?>