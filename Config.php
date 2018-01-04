<?php 
namespace Unipago;

class Config {
	public function toArray()
	{
		return [
			'empresa' => 'unipago',
			'local_arquivo' => 'C12345.RET',
		];
	}
}