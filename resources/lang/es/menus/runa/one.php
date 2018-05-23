<?php

return [
	
	'clients' => [
        'title' => 'Clientes',
        'icon' => 'fa fa-user',
        'route' => 'runa.client.index',
    ],

    'users' => [
        'title' => 'Usuarios',
        'icon' => 'fa fa-key',
        'route' => 'runa.user.index',
    ],

    'example2' => [
        'title' => 'Multinivel',
        'icon' => 'fa fa-cogs',
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