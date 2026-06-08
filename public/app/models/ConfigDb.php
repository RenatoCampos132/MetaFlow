<?php
class ConfigDb{
    protected $servidor, $usuario, $senha, $banco;

    public function configAcesso(){
        $this->servidor = "127.0.0.1";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "appsimulado";
    }
}
/**Criar um layout com um formulário para o usuário escolher os dados de acesso ao banco. Estas informações deverão estar listadas */