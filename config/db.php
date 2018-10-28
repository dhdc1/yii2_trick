<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=yii2trick',
    'username' => 'postgres',
    'password' => 'postgres',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'public'
        ],
    //'pgsql'=> 'tigrov\pgsql\Schema',
    ],
];
