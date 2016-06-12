# Webservice REST - Tweet (Desafio Social Base)

[Link para o site do desafio](http://motorcloud.com.br/DesafioSocialBase/public/) 

Webservice REST desenvolvido com o framework Laravel para listagem, consulta, adição e apagar pequenos textos (twitter - like) de no máximo 140 carecteres e no minímo 5.

## Como usar:

1° Para utilizar está API REST clone o projeto em: https://github.com/joabelkasper/desafio-sb

2° Troque as configurações de acesso para o seu banco de dados e APP URL no arquivo .env na raiz do projeto.

3° Faça a migração do banco de dados pelo laravel com o comando "php artisan migrate" ou faça o import do sql para sua base de dados, [link do SQL](http://motorcloud.com.br/DesafioSocialBase/public/desafio_social_base.sql).;.

Pronto já pode começar a usar.



## Como funciona:

Listagem: Para receber o json com todos os tweets já cadastrados faça a chamada HTPP com GET para http://urldoseuprojeto.com/public/api/tweet.
URL para testar o funcionamento: [http://motorcloud.com.br/DesafioSocialBase/public/api/tweet](http://motorcloud.com.br/DesafioSocialBase/public/api/tweet)

Novo tweet: Para salvar um novo tweet faça uma requesição HTTP com POST para http://urldoseuprojeto.com/public/api/tweet passando na body um paramêtro "tweet" com no minímo 5 caracteres e no máximo 140 caracteres.
URL para testar o funcionamento: [http://motorcloud.com.br/DesafioSocialBase/public/api/tweet](http://motorcloud.com.br/DesafioSocialBase/public/api/tweet)

Pegar um tweet: Para pegar apenas um tweet faça uma requesição HTTP com GET para http://urldoseuprojeto.com/public/api/tweet/{ID} passando na body um paramêtro "tweet" com o ID do tweet que você deseja pegar.
URL para testar o funcionamento: [http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/3](http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/3)

Alterar um tweet: Para alterar um tweet faça uma requesição HTTP com PUT para http://urldoseuprojeto.com/public/api/tweet/{ID} passando na body um paramêtro "tweet" com o ID do tweet que você deseja alterar.
URL para testar o funcionamento: [http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/2](http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/2)

Deletar um tweet: Para deletar um tweet faça uma requesição HTTP com DELETE para http://urldoseuprojeto.com/public/api/tweet/{ID} passando na body um paramêtro "tweet" com o ID do tweet que você deseja apagar.
URL para testar o funcionamento: [http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/3](http://motorcloud.com.br/DesafioSocialBase/public/api/tweet/3)

## Caminho para os principais arquivos:


    Rotas: App > Htpp > routes.php
    Controller REST Tweet: App > Htpp > Controllers > TweetController.php
    Model REST Tweet: App > Tweet.php


## Tecnologias utilizadas:


    Laravel
    Eloquent (ORM)
    MySql
    HTML
    JavaScript
    HTML5
    CSS
    Versionamento (Git)

