<?php

return [
    'default' => env('DB_CONNECTION', 'mysql'),
    
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'projectdone'),  // Pastikan nama database sesuai
            'username' => env('DB_USERNAME', 'root'),     // Pastikan username sesuai
            'password' => env('DB_PASSWORD', ''),         // Pastikan password kosong
            'unix_socket' => env('DB_SOCKET', ''),        // Jika tidak menggunakan socket UNIX, biarkan kosong
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',                               // Prefix jika ada, jika tidak kosongkan
            'strict' => true,                             // Aktifkan mode strict SQL
            'engine' => null,                             // Tentukan engine jika diperlukan (misalnya InnoDB)
        ],
    ],
];
