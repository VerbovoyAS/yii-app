<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=psql;port=5432;dbname=mixcart',
    'username' => 'mixcart',
    'password' => 'mixcartLocal',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql'=> [
            'class'=>'yii\db\pgsql\Schema',
            'defaultSchema' => 'main' //specify your schema here
        ]
    ],
    'on afterOpen' => function ($event)
    {
        $event->sender->createCommand("SET search_path TO main")->execute();
    }
    // PostgreSQL

    // Schema cache options (for production environment)
//    'enableSchemaCache' => true,
//    'schemaCacheDuration' => 60,
//    'schemaCache' => 'cache',


];
