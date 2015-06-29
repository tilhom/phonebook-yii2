tilhom/phonebook-yii2
============================

Implementation of test task telephone directory using Yii 2

Statement of work: In this work want to create the program phone book containing the following information: full name, date of birth, notes, phone (mobile, home).

Features
--------

- The application is able to perform a global search (in part of the name, telephone),
- CRUD,
- The user interface has two roles (user and aministrator),
- migrations,
- tests,
- RBAC,
- Dynamic Forms,
- Complex Forms,
- Karthik Gridview Expand Row,
- DatePicker widget.

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar global require "fxp/composer-asset-plugin:~1.0.0"
php composer.phar create-project --prefer-dist --stability=dev tilhom/phonebook-yii2 phonebook
~~~


CONFIGURATION
-------------

### Database

Create the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTE:** Yii won't create the database for you, this has to be done manually before you can access it.

Also check and edit the other files in the `config/` directory to customize your application.

After the establishment of the project in the working directory, you must run the migration:
~~~
yii migration
~~~

After migration, use the following administrator and user accounts:

~~~
Login: admin 
Password: admin121345
~~~

~~~
Login: user1 
Password: 123456
~~~

To start the telephone book is in the working directory of the application, type the command:
```
php -S localhost:8080 -t web
```

Now you should be able to access the application through the following URL

~~~
http://localhost:8080
~~~

Testing
-------

To create and verify the tests you must switch to directory test/codeception and correct url in the configuration file codeception.yml

Then return to directory tests to build a test environment using the command:

```
../vendor/bin/codecept build
```

Make migration with command:

```
codeception/bin/yii migrate
```

For example, to run basic template acceptance tests type command: 

```
../vendor/bin/codecept run acceptance
```

Please refer to instructions provided in app/tests/README.md