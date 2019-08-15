## Bem vindo(a) ao sistema de controle de torcedores dos All Blacks!

Esse projeto é um sistema de controle de torcedores dos AllBlacks, sendo possível ao administrador do sistema gerar uma planilha Excel e enviar e-mails a todos os torcedores cadastrados no banco de dados. É possível também fazer upload de arquivos XML que já possuem dados de clientes a fim de popular a base de dados.


## Como rodar o projeto

### Prepare o ambiente de desenvolvimento
* É necessário ter instalado na sua máquina um ambiente de desenvolvimento PHP (APACHE + MYSQL + PHP). Existem inúmeras opções na web, sugiro o [XAMPP](https://www.apachefriends.org/pt_br/download.html), que foi usado na criação dessa projeto.

* Uma vez instalado, clone o projeto para o diretório raiz do servidor (htdocs, por exemplo):
   
   `$ git clone https://github.com/manell98/desafio-all-blacks.git`
   
   `$ cd desafio-all-blacks`

### Instale as dependências com o composer
   
   `$ composer install`

   [Clique aqui](https://getcomposer.org/download/) caso não tenha o composer instalado na sua máquina
 
### Importe o Banco de Dados
 * No caso do Xampp, acesse o [PhpMyAdmin](http://localhost/phpmyadmin/) para realizar a importação do banco
 * Vá até a guia Base Dados e crie um banco de dados chamado: dbdesafio_all_blacks com a seguinte Collaction: utf8mb4_unicode_ci 
  * Depois disso, selecione o bd que acabou de criar e vá até a guia Importar
  * Clique em Escolher arquivo
  * Selecione o arquivo localizado em '/desafio-all-blacks/banco-de-dados-curriculo/dbdesafio_all_blacks.sql'
  * Em seguida clique em Executar


### Configure username e password do banco de dados
  Configure corretamente o username e o password do seu banco de dados no arquivo `.env` do projeto

### Configuração para enviar email
  Configure corretamente seu endereço de e-mail(no teste do projeto foi usado o gmail) e senha no arquivo `.env` do projeto
  * [Clique aqui](https://myaccount.google.com/lesssecureapps?pli=1) e ative a opção para permitir que sua conta possa enviar e-mails através da aplicação
 
 
### Acesse o sistema
 * Para acessar o sistema: `http://localhost/desafio-all-blacks/public/admin`
    * login: admin@admin.com
    * senha: admin
  
  * Obs.: a porta de acesso `:80` pode mudar de acordo com as configurações do seu servidor

### Solução do problema

<p> Como a funcionária que era dedicada exclusivamente para realizar as operações de controle dos torcedores foi demitida e a secretária que realizará essas funções agora não pode perder tempo, a solução elaborada foi pensada para agilizar o máximo possível, o usuário acessa o sistema e poderá realizar o upload do arquivo XML enviado pela loja virtual da seleção na internet, em seguida ele é redirecionado para uma página que lista todos os registros desse arquivo em uma tabela HTML que por sua vez contém um botão para adicionar os clientes "recuperados" do arquivo XML no banco de dados do sistema, sendo possível também adicionar o e-mail/telefone ou qualquer outro campo que pode eventualmente não ter sido disponibilizado pela loja virtual. </p>
<p> Depois de adicionado, o usuário é redirecionado para uma página que lista todos os torcedore/clientes cadastrados no sistema, nessa página são disponilizados 3 botões, um para exportar todos os registros para uma tabela Excel, um para editar algum registro, e o último que pode ativar ou desativar um determinado torcedor no banco de dados. </p>
<p> Para completar a solução, existem mais duas opções para o usuário, um botão em que ele pode fazer o cadastro de algum torcedor/cliente que não foi enviado pela loja virtual e outro onde ele pode enviar e-mails/comunicados para todos os torcedores cadastrados no sistema. </p>