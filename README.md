# Introdução
O sistema atual serve para processamento do retorno bancário efetuando a baixa dos títulos para cada registro.

# Objetivos
Seu objetivo nessa avaliação é refatorar ([link](https://pt.wikipedia.org/wiki/Refatora%C3%A7%C3%A3o)) o código da aplicação. Podendo também melhorar a estrutura e organização. Assim como adicionar testes para garantia de qualidade do software.

# Regras

- Arquivo `processamento.php`: não deve ser modificado
- Arquivo `C12345.RET`: não deve ser modificado
- Classe `ApiPagamentos`: não deve ser modificada.
- Classe `ProcessamentoRetorno`: a interface não deve ser modificada, porém *o seu conteúdo deve ser refatorado*.
- Erros podem ser tratados.
- A saída do console pode ser modificada.
- Para testes deve ser utilizado apenas o phpunit.
- Comentários pode ser alterados/adicionados.

# Envio
- Os arquivos devem ser compactados (junto com a pasta .git) e enviados para o email do RH.
- Não serão avaliados repositórios clonados, apenas a pasta recebida via email.
- Se o envio for feito via compartilhamento (drive, onedrive, dropbox etc) atenção para as permissões do arquivo.

# Avaliação
O objetivo deste teste é avaliar a capacidade de abstração e melhoria do código existente, levando em consideração boas práticas e legibilidade do código. Dentre os tópicos avaliados estão:  
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
