##Laravel com Vue.js

Repositório criado para um curso da Udemy.
quem se interessou é o curso Laravel com Vue.

as instruções estão em inglês para ficarem mais globalizadas,
estão em inglês simples, qualquer tradutor online pode traduzir.

in a bash:

1 - run ```bash composer install ```;
2 - run ```bash npm install ```;
3 - create a file in ```path database ``` folder called ```file database.sqlite ``` or create a mysql database and edit ```path ./config/database.php ```;
4 - create ```file .env ``` file and setup;
4.1 - if you using sqlite, set ```bash DB_DATABASE=C:\xampp\htdocs\laravel-dinamic-content\database\database.sqlite ``` in ```path .env ``` 
for an unknown reason only ```path database/database.sqlite ``` is not working :c ;
5 - run ```bash php artisan migrate ```;
6 - run ```bash php artisan key:generate ```;
7 - well done! run ```bash php artisan serve ```;
8 - for vue js or anyone sass or js file changes run ```bash npm run watch ```;
