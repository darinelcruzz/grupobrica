<?php

return [

	'example1' => [
        'title' => 'Simple',
        'icon' => 'fa fa-cogs',
        'route' => 'home',
    ],

    'example2' => [
        'title' => 'Multinivel',
        'icon' => 'fa fa-user',
        'submenu' => [
        	'subnivel1' => [
                'title' => 'Uno',
                'route' => 'home'
            ],
            'subnivel2' => [
                'title' => 'Dos',
                'route' => 'home'
            ],
        ]
    ],

	'logout' => [
        'title' => 'Salir',
        'icon' => 'fa fa-sign-out',
        'route' => 'logout',
    ],	
];