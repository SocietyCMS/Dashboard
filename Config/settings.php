<?php

return [

    'Landingpage' => [
        'use-static-landingpage' => [
            'title'       => 'dashboard::settings.use-static-landingpage.title',
            'description' => 'dashboard::settings.use-static-landingpage.description',
            'type'        => 'boolean',
            'view'        => 'checkbox',
            'default'     => true,
        ]
    ],

    'Dashboard' => [

        'welcome-message'  => [
            'title'       => 'dashboard::settings.welcome-message.title',
            'description' => 'dashboard::settings.welcome-message.description',
            'view'        => 'text',
            'default'     => trans('dashboard::dashboard.welcome.title'),
        ],
        'welcome-subtitle' => [
            'title'       => 'dashboard::settings.welcome-subtitle.title',
            'description' => 'dashboard::settings.welcome-subtitle.description',
            'view'        => 'text',
            'default'     => trans('dashboard::dashboard.welcome.subtitle'),
        ],

    ],

];
