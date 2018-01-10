# Regras

- O arquivo processamento.php não deve ser modificado.
- O arquivo C12345.RET é um modelo, não deve ser alterado.
- A interface da classe ProcessamentoRetorno não deve ser alterada, o arquivo "processamento.php" deve continuar funcionando.
- Comentários podem ser alterados.
- Erros podem ser tratados.
- Arquivo ApiPagamentos.php serve apenas para utilização, *seu conteudo* não pode ser modificado.
- Para testes, utilizar apenas phpunit.

# Envio
- Os arquivos devem ser compactados (junto com a pasta .git) e enviados para o email do RH.
- Não serão avaliados repositórios clonados, apenas a pasta recebida via email.

# Avaliação

- Testes
- Arquitetura
- Clareza do código
- Recomendações PSR
- Documentação
- Logs
- Performance
- Utilização de conceitos SOLID, YAGNI e DRY
- Tratamento de Erros / Segurança

# Utilização do projeto

```
$ composer install
$ php -f processamento.php
```
