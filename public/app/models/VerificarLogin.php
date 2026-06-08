<?php
/**Função que verifica os dados de acesso para realizar login no sistema */
require_once 'MyConnect.php';

class VerificarLorin extends MyConnect{

    public function __construct()
    {
        parent::__construct();
        echo $this->verificarLogin();
    }
    
    protected function verificarLogin(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_URL);

            if(empty($email)){
                return 'Preencha o e-mail!';
            }

            if(empty($senha)){
                return 'Preencha a senha!';
            }

            if(isset($email) && isset($senha)){
                try {
                    $sql = "SELECT * FROM tbusuario WHERE emailUsuario = '$email' and senhaUsuario = '$senha'";
                    $qr = self::query($sql);
                    $totalLinhas = self::linhas($qr);
                    $dados = self::dados($qr);
                    if($totalLinhas == 1){
                        session_start();
                        $_SESSION['nome'] = $dados['nomeUsuario'];
                        $_SESSION['email'] = $dados['emailUsuario'];
                        $_SESSION['senha'] = $dados['senhaUsuario'];
                        $_SESSION['usuario'] = $dados['tipoUsuario'];
                        
                        if($_SESSION['usuario'] === "Professor"){
                            header('Location: ../controls/telaEspera.php');
                        }else if($_SESSION['usuario'] === "Admin"){
                            header('Location: ../setting/views/index.php');
                        }
                        
                    }else if($totalLinhas == 0){
                        return 
                        '<div class="alert alert-danger mt-2">
                            Usuário ou senha inválidos!
                         </div>';
                    }else if($totalLinhas > 1){
                        return 
                        '<div class="alert alert-danger mt-2">
                            Usuário bloqueado, entre em contado com o administrador do sistema!
                        </div>';
                    }
                } catch (Exception $e) {
                    return "Erro de SQL: " . $e->getMessage();
                }
            }
        }
    }
}