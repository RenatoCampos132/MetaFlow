<?php
class VerificarVazio{
    protected $inputs = [];

    public function adicionarInput($indice, $valor){
        $this->inputs[$indice] = $valor;
    }

    public function vazio(){
        $inputVazio = [];

        foreach ($this->inputs as $indice => $valorInput) {
            if(empty(trim($valorInput ?? ''))){
                $inputVazio[] = $indice;
            }
        }
        return $inputVazio;
    }
}

