<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  settings.php - Part of the statement project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
return [
    'settings' => [
        'doctrine' => [
            'connection' => [
                'driver'   => env('DB_TYPE','pdo_sqlite'),
                'host'     => env('DB_HOST', 'localhost'),
                'path'     => env('DB_SQLITE_PATH', ':memory:'),
                'dbname'   => env('DB_NAME', 'db_name'),
                'user'     => env('DB_USER', 'db_user'),
                'password' => env('DB_PASSWORD', 'secret'),
            ],
            'meta' => [
                'entity_paths' => [BASE_DIR . '/src/Models'],
                'dev_mode'     => env('DEVELOPMENT', false),
                'proxy_dir'    => STORAGE_DIR . '/proxies'
            ]
        ]
    ]
];
