# Back-end Challenge - Dictionary

## Introdução

Este projeto foi realizado a fim de completar o desafio proposto pela Coodesh a fim de que eu possa demonstrar as minhas habilidades como Back-end Developer. A proposta está alocada no repositório [coodesh/backend-dictionary](https://github.com/coodesh/backend-dictionary).

O intuito desse projeto é desenvolver um aplicativo para listar palavras em inglês, utilizando como base a API [Free Dictionary API](https://dictionaryapi.dev/), de modo que possam ser exibidos termos em inglês e gerenciar as palavras visualizadas.


## Desenvolvimento do Projeto

Nesse tópico serão descritas as etapas realizadas para a produção do presente projeto, sendo dividido em subtópicos para melhor compreensão.

### Primeiros Passos

A princípio, as instruções foram lidas atentamente a fim de identificar a lógica e as tecnologias, metodologias e modo de desenvolvimento que deveriam ser aplicados.

As tecnologias, metodologias e modo de desenvolvimento foram escolhidos atendendo aos seguintes pontos:
- Adequação à proposta do desafio;
- Enquadramento ao que foi proposto e ao prazo;
- Requisitos e diferenciais na vaga pretendida;
- Demonstração das habilidade da autora.

Diante disso, a princípio, para o projeto será utilizado:
- a linguagem PHP 8.2;
- o framework Laravel 11.34;
- o banco de dados MySQL;
- para os testes unitários PHPUnit;
- conteinerização com o Docker;
- aplicação de padrões Clean Code;
- validação de chamadas assíncronas;
- descrição da documentação da API utilizando o conceito de Open API 3.0;
- instrução de como instalar e usar o projeto;
- deploy na AWS;
- implementação de paginação com cursores;
- commit do projeto no GitHub após a finalização de etapas;
- descriçãodas atividades realizadas no README.md após a finalização de etapas.

### Instalação do Projeto

Para a instalação do projeto, foi iniciado dentro do terminal Ubuntu (usando WSL2) um projeto Laravel usando Sail para a conteinerização no Docker.
Na sequência, o projeto iniciado foi sincronizado com o repositório remoto do GitHub.

### Criação do Banco de Dados
Localmente, foi criado o banco de dados e o arquivo .env foi configurado para que o projeto possa se conectar ao banco de dados.
Após, foi criada a tabela "Words" através de uma migration para que o projeto possa ser executado, bem como o *model* e o *factory* da mencionada tabela.
