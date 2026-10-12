<?php

return [
    'app_name' => 'UpSkillsIT',
    'base_url' => '',
    'env' => 'local',
    'db' => [
        'host' => '127.0.0.1',
        'port' => '3306',
        'name' => 'upskillsit',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8mb4',
    ],
    'security' => [
        'session_name' => 'UPSKILLSITSESSID',
        'csrf_key' => '_csrf_token',
        'max_login_attempts' => 5,
        'lockout_minutes' => 15,
    ],
    'uploads' => [
        'photo_dir' => dirname(__DIR__) . '/public/uploads/photos',
        'cv_dir' => dirname(__DIR__) . '/public/uploads/cv',
        'max_photo_size' => 2097152,
        'max_cv_size' => 5242880,
        'photo_mimes' => ['image/jpeg', 'image/png', 'image/webp'],
        'cv_mimes' => ['application/pdf'],
    ],
    'contact' => [
        'email' => 'contact@upskillsit.local',
        'social' => [
            'facebook' => 'https://www.facebook.com/EURESjobs',
            'linkedin' => 'https://www.linkedin.com/company/eures/',
            'instagram' => 'https://www.instagram.com/euresjobs/',
        ],
    ],
];
