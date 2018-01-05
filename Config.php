<?php 
namespace Unipago;

class Config {
	public function toArray()
	{
		return [
			'empresa' => 'UNIPAGO SOLUCOES COBRANCA LTDA',
			'local_arquivo' => 'CN03018B.RET',
			#'local_arquivo' => 'C12345.RET',
		];
	}
}