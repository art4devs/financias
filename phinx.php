<?php

require __DIR__ . '/vendor/autoload.php';

/**
 * recebe o array de config do banco de dados.
 */
$DBConfigurations = include __DIR__ . '/config/database.php';

/**
 * faz o mapeamento dos campos do array com as variaveis
 */
list(
 // campo array   | nova variavel
    'driver'        => $adapter,
    'host'          => $host,
    'database'      => $name,
    'username'      => $user,
    'password'      => $pass,
    'charset'       => $charset,
    'collation'     => $collation
) = $DBConfigurations['dev'];

/**
 * define as config do phinx
 */
return [
    'paths' => [
        // diretorio das migrations
        'migrations' => [
            __DIR__ . '/database/migrations'
        ],
        // diretorio das seeds
        'seeds' => [
            __DIR__ . '/database/seeds'
        ]
    ],
    'environments' => [
        // nome da tabela de migracao
        'default_migration_table' => 'migrations',
        // conexao
        'default_database' => 'development',
        // dados da conexao
        'development' => [
            'adapter'   => $adapter,
            'host'      => $host,
            'name'      => $name,
            'user'      => $user,
            'pass'      => $pass,
            'charset'   => $charset,
            'collation' => $collation
        ]
    ]
];