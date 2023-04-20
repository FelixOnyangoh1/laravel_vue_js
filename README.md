Laravel_Vue JS Project



LARAVEL VUE JS SECOND-ROUND INTERVIEW

CODE CHALLENGE

Instructions:

1. Write Laravel back end to implement CRUD REST APIs for the below ER diagram.

Steps to create CRUD REST APIs for an ER diagram in Laravel

1. Create a new Laravel project using the Laravel CLI command laravel new project_name.
2. Set up your database connection in the .env file, using the appropriate credentials for your database.
3.Generate your migrations using the Laravel CLI command php artisan make:migration create_table_name. You can create a separate migration for each table in your ER diagram.
4.In each migration file, define the table structure using the Laravel Schema Builder methods.
5.Run your migrations using the Laravel CLI command php artisan migrate.
6.Create your models using the Laravel CLI command php artisan make:model ModelName. You can create a separate model for each table in your ER diagram.
7.Define the relationships between your models using the appropriate Eloquent relationship methods.
8.Create your controllers using the Laravel CLI command php artisan make:controller ControllerName --api. You can create a separate controller for each table in your ER diagram.
9.Define the CRUD methods in your controllers using the appropriate Eloquent methods. 
10.Define your routes in the routes/api.php file using the appropriate HTTP verbs and controller methods. 
11.Test your APIs using a tool like Postman.


That's it! With these steps, you should now have CRUD REST APIs for your ER diagram in Laravel. Of course, there may be additional steps required depending on the complexity of your ER diagram, but this should give you a good starting point.

2. Create a front-end interface to consume the above APIs using Vue JS.
3. Ensure your APIs are authenticated.
4. Use a database of your choice to persist data (preferably MySQL).
5. Upload your code to the version control of your choice and share a link to your
repository.
6. If you are able to deploy and share login credentials, will be an added advantage.

Note:
Good code practice is what we are looking for. Therefore you stand a chance for
selection if you demonstrate skills in reusable patterns, quality front-end design
(reports, graphs, etc.), and general mastery of the development and deployment
process.
