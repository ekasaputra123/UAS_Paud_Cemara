<?php


return [
    'db' => [
        'host'     => 'localhost',
        'port'     => '5432',
        'dbname'   => 'paud_cemara',
        'user'     => 'postgres',
        'password' => '',
        'sslmode'  => '',
    ],

    'cors_origin' => '',
    // Untuk production sebaiknya tetap false.
    // Ubah ke true hanya saat perlu debugging sementara.
    'debug' => false,
    // Harus menunjuk ke folder public `uploads/` yang benar-benar dilayani web server.
    'upload_dir' => __DIR__ . '/../uploads',
    'session_name' => 'paud_admin_sess',
    'trust_proxy' => false,
    'force_secure_session' => false,
    'rate_limit_dir' => sys_get_temp_dir() . '/paud-cemara-rate-limit',
];
