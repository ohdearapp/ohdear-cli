<?php

return [
    'default' => 'file',
    'stores' => [
        'file' => [
            'driver' => 'file',
            'path' => sys_get_temp_dir().'/ohdear',
        ],
    ],
];
