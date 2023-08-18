### Work In Progress (...)

## O que é este repositório

Este repositório foi criado durante meus estudos no Curso de Desenvolvimento Web Avançado com PHP, Laravel e Vue.JS
do professor Jorge Sant Ana, comprado na plataforma Udemy pelo link https://www.udemy.com/course/curso-completo-do-desenvolvedor-laravel/

Este projeto foi desenvolvido durante o Seção 17 do Curso, uma aplicação preparada para que o aluno aprenda os 
conhecimentos sobre APIs, WebServices e Rest e com conceito inicial de ser um aplicativo de locação de carros

Dentro do desenvolvimento da aplicação foram explorados conceitos como:
- Grupos de Rotas Web e Api
- Métodos http e realização de CRUD com Laravel
- Aplicação de validações e entendimento de Regras de Validação
- Upload e Manipulação de Arquivos
- Entendimento e aplicação de Filtros de busca
- Repository Design Pattern

Ao final do Curso, pretendo refatorar este projeto criando uma interface para que seja possível o usuário 
acessar a aplicação conceito proposta. Por enquanto ele está sendo utilizado apenas para fins de estudo

# Como rodar o projeto e o que ele é

Este repositório contém alguns endpoints para ser utilizado apenas para fins de teste via Postman. Ele ainda não possui
uma interface e não funciona sem um banco de dados no seu ambiente local. O projeto pode ser rodado na sua máquina local,
desde que você siga a seguinte sequência de passos a Seguir

- Primeiro: clone o repositório do projeto na sua máquina com o git
- Segundo: acesse a pasta do projeto e execute via terminal o comando php artisan migrate (as migrations
foram criadas para que o seu banco de dados local seja criado com as tabelas correspondentes)
- Terceiro: rode o comando php artisan serve para servir a aplicação no seu navegador
- Quarto: Abra no link gerado pelo seu terminal a aplicação e verifique o funcionamento dos endpoints (
consultar o arquivo api.php) 




