# Introdução
Esta é uma das provas que aplicamos para seleção de novos desenvolvedores na KingHost. A prova consiste na aplicação de principios de _refactoring_ ([link](https://pt.wikipedia.org/wiki/Refatora%C3%A7%C3%A3o)) em um sistema de processamento do retorno bancário. Você deve aplicar os principios de refactoring para melhorar a clareza do código. Você pode ainda adicionar testes unitários para a garantia de qualidade do software.

# Regras

- Arquivo `processamento.php`: não deve ser modificado
- Arquivo `C12345.RET`: não deve ser modificado
- Classe `ApiPagamentos`: não deve ser modificada.
- Classe `ProcessamentoRetorno`: a interface (isto é, as assinaturas dos métodos que já estão no arquivo) não deve ser modificada, porém *o seu conteúdo deve ser refatorado*.
- Erros podem ser tratados.
- A saída do console pode ser modificada.
- Para testes deve ser utilizado apenas o `phpunit` ([link](https://phpunit.de/)).
- Comentários pode ser alterados/adicionados.

# Envio
- Os arquivos devem ser compactados (incluindo o diretório .git) e enviados para o email do RH (você deve ter recebido como parte do contato inicial). Tente preservar as permissões dentro do arquivo .zip, se possível.
- Só será avaliado o conteúdo do arquivo zip.
- Se o envio for feito via compartilhamento (GoogleDrive, oneDrive, Dropbox etc) atenção para as permissões do arquivo.

# Avaliação
O objetivo deste teste é avaliar a capacidade de abstração e melhoria do código existente, levando em consideração boas práticas e legibilidade do código. Dentre os tópicos avaliados estão:
- Testes
- Arquitetura
- Clareza do código
- Recomendações PSR
- Documentação
- Logs
- Performance
- Tratamento de Erros / Segurança
- Utilização de conceitos SOLID ([link](https://en.wikipedia.org/wiki/SOLID_(object-oriented_design))), YAGNI ([link](https://en.wikipedia.org/wiki/You_aren%27t_gonna_need_it)) e DRY([link](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself))


# Utilização do projeto

```
$ composer install
$ php -f processamento.php
```
