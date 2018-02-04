# Single Page Todo List App
## Laravel as back-end (API's) and Vuejs as front-end

### Development Server Requirements:
<pre>
    PHP >= 7.0.0
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    Apache/Nginx
    MySQl
    Composer
    NodeJs with NPM And
    Chrome Addons POST MAN for testing API's
</pre>

### Instalation
#### 1. Clone this repo:

<pre>
    git clone https://github.com/khandakerakash/single-page-todo-list-using-laravel-vuejs.git
</pre>

#### 2. Install the dependencies:
<pre>
    composer install
</pre>

#### 3. Copy .env file and key generate
<pre>
    i. cp .env.example .env
    ii.php artisan key:generate
</pre>

#### 4. Setup database config .env
<pre>
     ...
     
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your-mysql-dbname
     DB_USERNAME=your-mysql-username
     DB_PASSWORD=your-mysql-password
     
     ...
</pre>

#### 5. Running Database Migration
<pre>
    php artisan migrate
</pre>

#### 6. Running Development Server
<pre>
    i. php artisan serve OR
    ii.Your local Laravel Dev Environment like laragon
</pre>

#### 7. NPM Install for vue webpack
<pre>npm install</pre>

#### 8. Install Font-Awesome for Icons
<pre>
    npm install font-awesome --save
    Then, Add @import "~font-awesome/scss/font-awesome.scss"; in resources/assets/saas/app.scss
</pre>

#### 9. And Finally Run
<pre>
    npm run dev (or npm run watch or even npm run production)
</pre>

## Hope so you guys enjoy it. Thanks :)