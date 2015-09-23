# Phalcon API Rest
Esta é um projeto de API Rest baseado em [Apigee Best Practices](http://apigee.com/about/resources/ebooks/web-api-design) usando o [Phalcon PHP Framework](http://phalconphp.com) (O PHP framework 
mais rápido)

CRUD completo(Create, Read, Update, Delete) de todas as tabelas do seu banco de dados (incluindo o relacionamento), apenas aponte o banco de dados (que vocês passaram) e gere os modelos. 
Toda a comunicação de response/request é feita com JSON.

### Exemplo:

`GET /Usuario` retorna todos os usuários
`GET /Usuario/1` retorna um usuario com o id 1
`POST /Usuario` insere usuario no banco


## Começando
Da instalação do framework até seu CRUD do banco de dados

1. [Instale o Phalcon Framework](https://phalconphp.com/en/download)
2. [Instale Phalcon Developer Tools](http://phalconphp.com/en/download/tools) 
- Esta é uma ferramenta de desenvolvedor muito útil para os desenvolvedores phalcon php
3. Clone o projeto para seu servidor APACHE.

    `git clone https://github.com/desenvolvedor6/axm.git`
    
4. Ajueste as configurações do seu banco de dados em app/config/config.php
  
        'database' => array(
            'adapter'     => 'Mysql',` 
            'host'        => 'localhost',
            'username'    => 'root',
            'password'    => 'root',  
            'dbname'      => 'dbname',
        ) 
