<?php

require_once "MyConnect.php"; //Incluir a classe de conexão

class CriaPaginacao extends MyConnect //Indicar o arquivo que será herdado
{
	private $ida, $param;
	private $maxPage, $maxLink, $numeroPaginas;
	private $sqlA, $sqlB;
	private $fileName, $nomeArquivoHTML;
	private $temp;
	private $passoA, $passoB;
	private $qrA, $qrB;
	private $totRegA, $totRegB;
	private $resultadoTotal, $resultadoParcial, $resultadoDiv, $numeroInt;
	private $pagAtual, $proxPag, $ultPag, $pagAnt;
	private $regInicial;
	private $dadosGerados;
	private $registroFinal;
	private $lnk_impressos;

	public function setParametro($cod)
	{
		$this->ida = $cod;
	}

	public function setFileName($file)
	{
		$this->fileName = $file;
	}

	public function setInfoMaxPag($max)
	{
		$this->maxPage = $max;
	}

	public function setMaximoLinks($max)
	{
		$this->maxLink = $max;
	}

	public function setSQL($qr)
	{
		$this->sqlA = $qr;
	}

	public function setContador($cont)
	{
		$this->registroFinal = $this->param + $cont;
	}

	public function setNomeArquivoHTML($arq)
	{
		$this->nomeArquivoHTML = $arq;
	}

	/**********************************************************************************************************/

	protected function iniciaPaginacao()
	{
		if (empty($this->ida)) {
			$this->param = 0;
		} else {
			$this->temp = $this->ida;
			$this->passoA = $this->temp - 1;
			$this->passoB = $this->passoA * $this->maxPage;
			$this->param = $this->passoB;
		}
		//$parametroTemp = $this->parametro - 1;
		$this->sqlB = $this->sqlA . " LIMIT " . $this->param . "," . $this->maxPage;

		//cria as conexões Aqui deve inserir os métodos da conexao
		$this->qrA = self::query($this->sqlA); // Colocar o método da conexão que executa uma SQL
		$this->qrB = self::query($this->sqlB); // Colocar o método da conexão que executa uma SQL
		$this->totRegA = self::linhas($this->qrA); // Colocar o método da conexão verifica o total de dados encontratos
		$this->totRegB = self::linhas($this->qrB); // Colocar o método da conexão verifica o total de dados encontratos

		//carrega as variáveis

		$this->resultadoTotal = $this->totRegA;
		$this->resultadoParcial = $this->totRegB;
		$this->resultadoDiv = $this->resultadoTotal / $this->maxPage;
		$this->numeroInt = (int)$this->resultadoDiv;
		if ($this->numeroInt < $this->resultadoDiv) {
			$this->numeroPaginas = $this->numeroInt + 1;
		} else {
			$this->numeroPaginas = $this->resultadoDiv;
		}
		$this->pagAtual = $this->param / $this->maxPage + 1;
		$this->regInicial = $this->param + 1;
		$this->pagAnt = $this->pagAtual - 1;
		$this->proxPag = $this->pagAtual + 1;
	}
	protected function results()
	{
		$this->dadosGerados = self::dados($this->qrB); //Aqui deve inserir os dados da conexao
		return $this->dadosGerados;
	}

	/**********************************************************************************************************/

	public function geraNumeros()
    {
        // Botão Anterior
        if ($this->ida > 1) {
            echo "<li class=\"page-item\">\n";
            echo "    <a class=\"page-link prev-next\" href=\"{$this->fileName}&pg={$this->pagAnt}\" aria-label=\"Anterior\">\n";
            echo "        <i class=\"bi bi-chevron-left\"></i>\n";
            echo "    </a>\n";
            echo "</li>\n";
        }

        // Lógica de limite de links
        if ($this->temp >= $this->maxLink) {
            if ($this->numeroPaginas > $this->maxLink) {
                $n_maxlnk = $this->temp + 6;
                $this->maxLink = $n_maxlnk;
                $n_start = $this->maxLink - 6;
                $this->lnk_impressos = $n_start;
            }
        }

        // Mostra os números das páginas
        while (($this->lnk_impressos < $this->numeroPaginas) and ($this->lnk_impressos < $this->maxLink)) {
            $this->lnk_impressos++;
            
            // Página atual
            if ($this->pagAtual == $this->lnk_impressos) {
                echo "<li class=\"page-item active\">\n";
                // Usando um span ou a sem href para a página ativa
                echo "    <span class=\"page-link\">{$this->lnk_impressos}</span>\n";
                echo "</li>\n";
            } else {
                // Outras páginas
                echo "<li class=\"page-item\">\n";
                echo "    <a class=\"page-link\" href=\"{$this->fileName}&pg={$this->lnk_impressos}\">{$this->lnk_impressos}</a>\n";
                echo "</li>\n";
            }
        }

        // Botão PRÓXIMO
        if ($this->registroFinal < $this->resultadoTotal) {
            echo "<li class=\"page-item\">\n";
            echo "    <a class=\"page-link prev-next\" href=\"{$this->fileName}&pg={$this->proxPag}\" aria-label=\"Próximo\">\n";
            echo "        <i class=\"bi bi-chevron-right\"></i>\n";
            echo "    </a>\n";
            echo "</li>\n";
        }
    }

    // Método extra para exibir o texto de contagem no rodapé
    public function getInfoPaginacao()
    {
        // Garante que o registro final não ultrapasse o total real
        $exibindoAte = ($this->registroFinal > $this->resultadoTotal) ? $this->resultadoTotal : $this->registroFinal;
        return "Mostrando {$this->regInicial} de {$this->resultadoTotal}";
    }
	public function getTime()
	{
		list($sec, $usec) = explode(" ", microtime());
		return ($sec + $usec);
	}
}
