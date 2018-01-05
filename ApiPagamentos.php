<?php 

namespace Unipago;

class ApiPagamentos 
{
	/**
	 * Este método é uma simulação de baixa de título no sistema competente.
	 * Por padrão ele sempre retorna true, indicando que a baixa ocorreu com sucesso.
	 */
	public static function baixaTitulo($nossoNumero, $valorPago)
	{
		return true;
	}
}