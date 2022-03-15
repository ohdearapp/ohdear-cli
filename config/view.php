<?php

return [
    'paths' => [
        resource_path('views'),
    ],

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        sys_get_temp_dir()
    ),
];
