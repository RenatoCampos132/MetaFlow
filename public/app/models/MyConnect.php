<?php
require_once "ConfigDb.php";
abstract class MyConnect extends ConfigDb{
    protected $conect, $query, $sql, $dados, $totalItens;

    public function __construct(){
        /**Requisitar o acesso ao bando */
        self::configAcesso();
        /**Executar a função que acesso o banco */
        self::conectar();
    }
    /**Método para conectar ao banco */
    protected function conectar(){
        try {
            $this->conect = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->banco);
        } catch (Exception $e) {
            echo '<div class="alert alert-danger">Erro ao conectar no banco:' . $this->banco ; 
            echo "<br>Banco: $this->banco";
            echo "<br>Servidor: $this->servidor";
            echo "<br>Usuário: $this->usuario";
            echo "<br>Senha: $this->senha";
            echo "<br>Mensagem do MySql: " . $e->getMessage();
        }
    }
    /**Método para preparar a sql, para gerar uma query */
    protected function query($sql){
        try {
            return $this->query = $this->conect->query($sql);
        } catch (Exception $e) {
            echo '<div class="alert alert-primary">Sql: ' . $sql . "</div>"; 
            echo '<div class="alert alert-primary">Mensagem do MySql: ' . $e->getMessage() . "</div>";
        }
    }
    /**Método para executar a query */
    protected function dados($qr){
        try{
            return $this->dados = mysqli_fetch_assoc($qr);
        }catch(Exception $e){
            echo ":" . $e->getMessage();
        }
    }
    /**Método para retornar os dados encontrados */
    protected function linhas($qr){
        return $this->totalItens = mysqli_num_rows($qr);
    }
}