<?php 

namespace Unipago;

class ProcessamentoRetorno {

	private $_arquivo;

	public function __construct($configuracao) {
		$this->_arquivo = file_get_contents(trim($configuracao->toArray()['local_arquivo']));

		echo "iniciando processamento do arquivo \n";
	}

	public function execute() {
		
		$todoArquivo = explode("\n",$this->_arquivo);

		for ($i=0; $i < count($todoArquivo); $i++) { 
			if ($i == '0') {
				$tipo_linha = 'cabecalho';
			} else {
				if (substr($todoArquivo[$i], 0, 1) == '1') {
					$tipo_linha = 'corpo';
				} else {
					$tipo_linha = 'rodape';
				}
			}

			switch ($tipo_linha) {
				case 'cabecalho':
					$empresa = substr($todoArquivo[$i], 46, 30);
					$banco = substr($todoArquivo[$i], 79, 15);
					$data = substr($todoArquivo[$i], 94, 6);

					$dia = substr($data, 0, 2);
					$mes = substr($data, 2, 2);
					$ano = '20'.substr($data, 4, 2);
					var_dump($ano.'-'.$mes.'-'.$dia);

					if (strtolower(trim($empresa)) == 'unipago') {
						echo 'Arquivo válido'."\n";
					} else {
						throw new \Exception("Arquivo não é referente a empresa correta.");
					}
					break;
				
				case 'corpo':
					$nosso_numero = substr($todoArquivo[$i], 62, 8);
					$valorPago = substr($todoArquivo[$i], 152, 13) / 100; 
					$tarifa = substr($todoArquivo[$i], 175, 13) / 100; 
					$juros = substr($todoArquivo[$i], 266, 13) / 100; 
					$creditado = substr($todoArquivo[$i], 253, 13) / 100; 
					$ocorrencia = substr($todoArquivo[$i], 108, 2); 
					
					$arrayOcorrencias = array('06','09');

					if (in_array($ocorrencia, $arrayOcorrencias)) {
						if (number_format($creditado,2) == number_format($valorPago + $juros - $tarifa, 2)) {
							echo "Pagamento do título $nosso_numero efetuado com sucesso \n";
							ApiPagamentos::baixaTitulo($nosso_numero, $valorPago);
						} else {
							echo "Valor incorreto \n";
						}
					} else {
						echo "Tipo de entrada não encontrado \n";
					}

					break;
				
				default:
					$valorTotal = substr($todoArquivo[$i], 185, 14) / 100;

					$totalDoArquivo = 0;
					for ($i=0; $i < count($todoArquivo); $i++) { 
						$totalDoArquivo += substr($todoArquivo[$i], 253, 13) / 100; 
					}

					if (number_format($valorTotal, 2) != number_format($totalDoArquivo, 2)) {
						throw new \Exception("Arquivo inconsistente");
					} else {
						echo "arquivo importado com sucesso \n";
					}

					break;
			}
		}
	}
}