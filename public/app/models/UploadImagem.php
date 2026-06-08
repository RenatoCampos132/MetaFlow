<?php
class UploadImagem{
    protected $url, $status;

    public function __construct($a, $l){
        echo $this->upload($a, $l);
        echo $this->getUrl();
        echo $this->getStatus();
    }

    /**Método para mover a imagem para o diretório correto */
    public function getUrl(){
        return $this->url;
    }
    /**Método para mostrar o status */
    public function getStatus(){
        return $this->status;
    }

    public function upload($arquivo, $local) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] === UPLOAD_ERR_OK) {
                $nome = $arquivo['name'];
                $nomeTmp = $arquivo['tmp_name'];
                
                // Verifica se é uma imagem válida pelas extensões permitidas sendo em caixa alta ou baixa
                $extensao = strtolower(pathinfo($nome, PATHINFO_EXTENSION));
                $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'bmp', 'gif'];

                if (!in_array($extensao, $extensoesPermitidas)) {
                    die("Formato de arquivo incompatível!");
                }

                // Evita sobrescrita gerando nome único
                $nomeFinal = uniqid('img_', true) . '.' . $extensao;

                // Caminho físico onde será salvo
                $diretorio = "../img/$local/$nomeFinal";

                if (move_uploaded_file($nomeTmp, $diretorio)) {
                    // Caminho para ser usado na URL
                    $this->url = "/projeto_01_begin/admin/img/$local/$nomeFinal";
                    echo $this->status = "Imagem enviada com sucesso! Caminho: $this->url"; 
                } else {
                    echo "Erro ao mover o arquivo!";
                }
            }else{
                return "Nenhuma imagem selecionada";
            }
        }
    }
}
?>