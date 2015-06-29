<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered <mark>Phone&nbsp;Book</mark></p>
        <p>
        <?php if(Yii::$app->user->isGuest)  : ?>
        <a class="btn btn-lg btn-success" href="/site/login"> Use your phone book</a>
        <span class="spacer"></span>
        <a class="btn btn-lg btn-primary" href="/site/signup">
        Start a new phone book</a>
        </p>
        <?php endif; ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h3>Features</h3>
                <p>Statement of work: In this work want to create the program phone book containing the following information: full name, date of birth, notes, phone (mobile, home).</p>
                <ul>
               <li>The application is able to perform a global search (in part of the name, telephone),</li>
                <li>CRUD, </li>
                <li>The user interface has two roles (user and aministrator), </li>
                <li>migrations,</li>
                <li>tests,</li>
                <li>RBAC,  </li>
                <li>Gii,  </li>
                <li>ActiveRecord,</li>
                <li>Dynamic Forms,</li>
                <li>Complex Forms,</li>
                <li>Karthik Gridview Expand Row,</li>
                <li>DatePicker widget.</li>

            </ul>
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h3>Installation</h3>
                <p>You can install this project using the following command:<br>
                <code>
                    php composer.phar create-project --prefer-dist --stability=dev tilhom/phonebook-yii2 phonebook
                </code>
                </p>
                <p>Create the file `config/db.php` with real data</p>

                <p>
                After the establishment of the project in the working directory, you must run the migration:<br>
                 <code>
                    yii migration
                </code>
                 </p>
                <p>After migration, use the following administrator and user accounts: </p>
                    
                <p>
                  Login:  <kbd>admin</kbd> <br>
                  Password: <kbd>admin121345</kbd>
                </p>
                <p>    
                  Login: <kbd>user1</kbd> <br>
                  Password: <kbd>123456</kbd>
                </p>
                    
                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h3>Testing</h3>

                <p>To create and verify the tests you must switch to folder test/codeception and correct url in the configuration file codeception.yml</p>
                <p>Then return to folder tests to build a test environment using the command:<br>
                <code>../vendor/bin/codecept build</code>
                <p>make migration with command:<br>
                <code>codeception/bin/yii migrate</code>
                <p>For example, to run basic template acceptance tests type command:
                <br>
                <code>
                    ../vendor/bin/codecept run acceptance
                </code>
                </p>
                <p>Please refer to instructions provided in  app/tests/README.md</p>



                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
