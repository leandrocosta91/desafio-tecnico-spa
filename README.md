# spa
Construção de CRUD utilizando API Laravel na versão 5.5 com validação na requisição.

Após realizar o clone do repositório, é necessário executar os seguintes comandos:
1. composer install
2. php artisan migrate

Após os passos acima, caso tenha o docker instalado, pode executar:
1. docker-compose up -d --build

O projeto possui dois seeders: um da tabela produtos e outro da tabela campanhas.

Para executar o seed, digite o seguinte comando:
php artisan db:seed
