<?php
return array(
    'settings' => [
        'displayErrorDetails' => true,
        'debug' => true, //开启debug模式
        'logger' => [
            'name' => 'slim-app',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/../logs/app.log',
        ],//定义日志文件
    ],
);
