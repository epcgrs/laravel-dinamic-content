## Laravel com Vue.js

Repositório criado para um curso da Udemy.
quem se interessou é o curso Laravel com Vue.

as instruções estão em inglês para ficarem mais globalizadas,
estão em inglês simples, qualquer tradutor online pode traduzir.

in a bash:

1 - run ```composer install ```;

2 - run ```npm install ```;

3 - create a file in ```database ``` folder called ```database.sqlite ``` 
or create a mysql database and edit ```./config/database.php ```;

4 - create ```.env ``` file and setup;

4.1 - if you using sqlite, set ```DB_DATABASE=C:\xampp\htdocs\laravel-dinamic-content\database\database.sqlite``` 
in ```.env ``` for an unknown reason only ```database/database.sqlite``` is not working :c ;

5 - run ```php artisan migrate ```;

6 - run ```php artisan key:generate ```;

7 - well done! run ```php artisan serve ```;

8 - for vue js or anyone sass or js file changes run ```npm run watch ```;
