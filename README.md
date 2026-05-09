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
  - Corrigidos os caminhos dos arquivos JS (jQuery, Bootstrap, iCheck) para apontar para arquivos existentes no sistema admin.
  - jQuery: alterado para `views/js/jquery-2.2.4.min.js` (versão mais recente e sem erros de sintaxe).
  - Bootstrap: `sistema/_views/bootstrap/js/bootstrap.min.js`
  - iCheck: `sistema/_views/plugins/iCheck/icheck.min.js`
  - Isso resolve os erros de "Unexpected token '<'" e "Invalid or unexpected token" no console, que ocorriam porque os caminhos estavam incorretos ou os arquivos estavam corrompidos.

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

### 4. Criação do usuário admin

- Execute o script `criar_admin.php` no navegador (ex: http://localhost/script-loja06/criar_admin.php) para inserir o usuário admin padrão.
- Credenciais: usuário `admin`, senha `123456`.
- O script usa MD5 para hash, conforme esperado pelo sistema.

### 5. Teste do login

- Acesse http://localhost/script-loja06/sistema/ (ou o domínio configurado).
- Use as credenciais acima para fazer login.
- Se houver erros, verifique os logs de erro do PHP (habilitados no _config.php).

### 6. Problemas resolvidos

- Compatibilidade com PHP 8.3: removidas chamadas para `get_magic_quotes_gpc()` deprecated.
- Campos do formulário de login: corrigidos para `login_usuario` e `login_senha`.
- Caminhos dos JS: corrigidos para arquivos existentes.
- Erros de sintaxe no jQuery: resolvido usando versão mais recente sem corrupção.

## Recomendações

- Testar o login administrativo novamente após o deploy - agora deve aceitar usuário e senha corretamente.
- Se ainda der "Usuário ou senha incorretos!", verificar se há usuários criados na tabela `adm_usuario` do banco de dados. O sistema usa MD5 para armazenar usuário e senha.
- **Para criar usuário admin padrão**: Execute o arquivo `criar_admin.php` no navegador (ex: https://seudominio.com/criar_admin.php). Isso criará um usuário com login "admin" e senha "123456".
- Verificar se os erros de JavaScript no console desapareceram.
- Verificar o webhook do Mercado Pago se o sistema utiliza esses endpoints.
- Continuar usando `display_errors` apenas em ambiente de desenvolvimento para diagnosticar problemas.
