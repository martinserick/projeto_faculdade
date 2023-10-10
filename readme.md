# Projeto Faculdade FAEL

## Avaliação Discursiva - Programação WEB

##### Prosposta: Criar sistema com login, onde ao realiza-lo terá a acesso a um menu  com as opções de:

- Listagem e Cadastro de Produtos (Contendo: nome, marca, e quantidade/tamanho)
- Listagem e Cadastro de Estabelecimentos ( Contendo: nome, endereco, cidade e número de lojas.)
- Cadastro de Preços de Produtos nos estabelecimentos.
- Listagem de Menores Preços, tendo a possibilidade de escolher o estabelcimento, sendo que produtos iguais cadastrado em diferentes estabelecimentos só devem ser listados nos estabelcimentos onde estes estiverem com os menores preços.

### Setup do Projeto

#

- Docker
- Linguagem PHP 7.4
- PDO
- Adminer para Acesso ao Gerenciador do DB

## Links Uteis

-   Projeto
    -   [Projeto](http://localhost:8080)
-   Adminer
    -    [Adminer](http://localhost:8081)

## Dados de acesso:

-   Sistema (login.php)
    -   Usuário: admin
    -   Senha: admin
-   Adminer
    -   Server: db
    -   User: root
    -   Senha: example

>Lembrando que este projeto tem intuito acadêmico e não visa prática de segurança e nem mesmo layout bonito e responsivo.

### Incializando o Docker

> Tendo em vista que o projeto possui os arquivos docker-compose.yml e Dockerfile.

Rode o comando:

```docker compose up --build```

Isso subirá os containers do PHP7.4 com Apache e Adminer com o banco devidamente populado.

Para acesso ao sistema acesse: [Projeto](http://localhost:8080)

>É possível utilizar também com o XAMP o projeto, utilizando o arquivo ***.sql*** na pasta db do projeto.

