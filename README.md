# Projeto Loja PHP 01

## Correções aplicadas

Foram realizados ajustes para compatibilidade com PHP 8.x sem quebrar o sistema existente.

### 1. Compatibilidade com PHP 8 - `get_magic_quotes_gpc()`

O código original usava `get_magic_quotes_gpc()` em pontos que são executados em PHP 8.3, onde a função não existe mais e causa erro fatal.

Ajustes feitos:

- `sistema/_system/system.php`
  - Método `post($name)` agora verifica `function_exists('get_magic_quotes_gpc')` antes de chamar a função.
  - Isso mantém o tratamento de entrada seguro em PHP 7.4 e evita erro fatal em PHP 8.x.

- `sistema/mercadopago_retorno/index.php`
  - Ajuste na função `get($string)` para não chamar `get_magic_quotes_gpc()` diretamente.

- `sistema/mercadopago_retorno/index_pix.php`
  - Mesmo ajuste na função `get($string)`.

### 2. Ajuste no login do sistema

- `sistema/_controllers/controller_autenticacao.php`
  - Agora o login processa corretamente os campos `login_usuario` e `login_senha`, que são os nomes enviados pelo formulário.
  - Isso corrige o fluxo de autenticação do painel administrativo.

### 3. Correção de caminhos dos arquivos JavaScript

- `sistema/_views/htm_entrar.php`
  - Corrigidos os caminhos dos arquivos JS (jQuery, Bootstrap, iCheck) para apontar para arquivos existentes no sistema.
  - Isso resolve os erros de "Unexpected token '<'" no console, que ocorriam porque os caminhos estavam incorretos e retornavam HTML de erro em vez do JS.

## Por que isso era relevante

- `sistema/_system/system.php` é usado por grande parte dos controllers para leitura de `$_POST` via `$this->post('campo')`.
- Sem o ajuste, qualquer formulário POST do sistema poderia gerar erro 500 em PHP 8.x.
- Os caminhos incorretos dos JS causavam falha no carregamento das bibliotecas, resultando em erros de JavaScript no console.

## Arquivos alterados

- `sistema/_system/system.php`
- `sistema/_controllers/controller_autenticacao.php`
- `sistema/mercadopago_retorno/index.php`
- `sistema/mercadopago_retorno/index_pix.php`
- `sistema/_views/htm_entrar.php`

## Recomendações

- Testar o login administrativo novamente após o deploy - agora deve aceitar usuário e senha corretamente.
- Verificar se os erros de JavaScript no console desapareceram.
- Verificar o webhook do Mercado Pago se o sistema utiliza esses endpoints.
- Continuar usando `display_errors` apenas em ambiente de desenvolvimento para diagnosticar problemas.
