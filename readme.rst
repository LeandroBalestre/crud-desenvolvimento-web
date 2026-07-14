# CRUD Desenvolvimento Web

## Descrição

Este projeto consiste em um sistema CRUD desenvolvido como parte dos estudos de Desenvolvimento Web utilizando o framework **CodeIgniter 3**, PHP, HTML, CSS, JavaScript e MySQL.

O sistema permite o gerenciamento de **Clientes** e **Vendas**, aplicando o padrão de arquitetura **MVC (Model-View-Controller)**.

---

## Funcionalidades

### Menu Principal

* Navegação entre os módulos do sistema.
* Acesso ao cadastro de clientes.
* Acesso ao cadastro de vendas.

### Clientes

* Cadastrar clientes.
* Consultar clientes cadastrados.
* Editar informações do cliente.
* Excluir clientes.
* Validação de campos obrigatórios.
* Impede a exclusão de clientes que possuem vendas vinculadas.

### Vendas

* Cadastrar vendas.
* Consultar vendas cadastradas.
* Editar vendas.
* Excluir vendas.
* Seleção do cliente através de uma lista (select).
* Validação de campos obrigatórios.

---

## Tecnologias Utilizadas

* PHP
* CodeIgniter 3
* HTML5
* CSS3
* JavaScript
* MySQL
* XAMPP

---

## Estrutura do Projeto

```text
application/
│
├── controllers/
│   ├── Cliente.php
│   ├── Menu.php
│   └── Vendas.php
│
├── models/
│   ├── Cliente_model.php
│   └── Venda_model.php
│
├── views/
│   ├── clientes/
│   ├── vendas/
│   └── Menu_Inicial.php
│
assets/
└── css/
```

---

## Funcionalidades Implementadas

* Arquitetura MVC.
* Operações CRUD completas.
* Relacionamento entre Clientes e Vendas.
* Utilização de Models para acesso ao banco de dados.
* Controllers responsáveis pela lógica da aplicação.
* Views responsáveis pela interface do usuário.
* Utilização de JavaScript para abertura e fechamento de painéis.
* Validação de formulários antes do envio.
* Navegação entre telas através do Menu Principal.

---

## Regras de Negócio

* Todos os campos obrigatórios são validados antes do envio do formulário.
* Uma venda deve estar vinculada a um cliente existente.
* Não é permitido excluir um cliente que possua vendas cadastradas.

---

## Como Executar o Projeto

### Pré-requisitos

* PHP 7.x ou superior
* MySQL
* XAMPP
* CodeIgniter 3

### Passos

1. Clone ou copie o projeto para a pasta:

```text
xampp/htdocs/
```

2. Inicie o Apache e o MySQL pelo XAMPP.

3. Crie o banco de dados.

4. Importe as tabelas utilizadas pelo sistema.

5. Configure os dados de conexão em:

```text
application/config/database.php
```

6. Acesse pelo navegador:

```text
http://localhost/nome-do-projeto
```

---

## Conceitos Aplicados

* Arquitetura MVC
* Controllers
* Models
* Views
* Rotas
* Formulários HTML
* JavaScript
* Manipulação do DOM
* CSS
* Integração PHP com banco de dados
* Relacionamento entre tabelas
* Boas práticas de organização de código

---

## Objetivo

O objetivo deste projeto foi colocar em prática os principais conceitos de desenvolvimento web utilizando CodeIgniter, compreendendo a separação de responsabilidades entre Model, View e Controller, manipulação de dados em banco de dados e construção de interfaces para operações de CRUD.

---

## Autor

Desenvolvido por **Leandro** para fins de estudo e aprendizado em Desenvolvimento Web.
