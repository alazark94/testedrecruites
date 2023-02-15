# Tested Recruits Second Project

In order to run this project you first need to run the following two commands.

```
composer install
npm install
```

After running those two commands you will then copy `.env.example` to `.env` in the same directory

Then in that open that file and edit your database configuration according to your own

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testedrecruites2
DB_USERNAME=root
DB_PASSWORD=
```

After editing that you then run the following commands

```
php artisan migrate --seed
php artisan key:generate
```

Now that your database is filled with a sample data and the laravel key is successfully initiated you can run your project with

```
// For development 
npm run dev

// For production
npm run build
```

Then finally you can open your project by running the following 

```
php artisan serve
```

And open the project on your browser with the link provided by that command usually `http://localhost:8000`



## Thank You
