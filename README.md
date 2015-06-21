tilhom/phonebook-yii2
============================

Implementation of test task telephone directory using Yii 2

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

<<<<<<< HEAD
Now you should be able to access the application through the following URL, assuming `phonebook` is the directory
=======
Now you should be able to access the application through the following URL, assuming `basic` is the directory
>>>>>>> a06a61fd56957a60f02f7d2b77ec0e6ba5f61117
directly under the Web root.

~~~
http://localhost/phonebook/web/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

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
