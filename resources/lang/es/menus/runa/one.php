<?php

return [
	
    'quotations' => [
        'title' => 'Cotizaciones',
        'icon' => 'fa fa-calculator',
        'submenu' => [
        	'finished' => [
                'title' => 'Terminado',
                'route' => ['runa.quotation.create', ['type' => 0]]
            ],
            'production' => [
                'title' => 'Producción',
                'route' => ['runa.quotation.create', ['type' => 1]]
            ],
            'index' => [
                'title' => 'Cobro',
                'route' => 'runa.quotation.index'
            ],
        ]
    ],

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


    'logout' => [
        'title' => 'Salir',
        'icon' => 'fa fa-sign-out',
        'route' => 'logout',
    ],

];