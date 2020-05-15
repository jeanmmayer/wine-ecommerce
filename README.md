
![logo](https://i.ibb.co/4svckDx/logo.png)

Sistema simples de cadastro de produtos e realização de vendas, mostrando o valor da venda com cálculo de frete.


## Requisitos para instalação

  - XAMPP com PHP e MYSQL;
  - NodeJs;

## Instalação do aplicativo

  - Pela linha de comando, ir até a pasta de projetos do xampp, geralmente fica em `cd c:/xampp/htdocs`;
  - Faça o clone do repositório na pasta supracitada executando `git clone https://github.com/jeanmmayer/wine-ecommerce.git`;
  - Navegar até a nova pasta criada `cd wine-ecommerce`;
  - Executar `npm install`;
  - Iniciar os serviços Apache e Mysql do xampp.

## Instalação do banco de dados
  - Com os serviços Apache e Mysql rodando, abrir o phpmyadmin no navegador `localhost/phpmyadmin`;
  - Criar um banco de dados `wineecommerce`;
  - Importar [este arquivo SQL](https://github.com/jeanmmayer/wine-ecommerce/blob/master/sql/wineecommerce.sql) na base de dados criada;
  - O usuário utilizado para conectar é o `root` sem senha;
  - Acessar o sistema em [http://localhost/wine-ecommerce](http://localhost/wine-ecommerce).