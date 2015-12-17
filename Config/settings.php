<?php

return [

    'dashboard::settings.landingpage.title' => [
        'use-static-landingpage' => [
            'title'       => 'dashboard::settings.landingpage.use-static-landingpage.title',
            'description' => 'dashboard::settings.landingpage.use-static-landingpage.description',
            'type'        => 'boolean',
            'view'        => 'checkbox',
            'default'     => false,
        ]
    ],

    'dashboard::settings.dashboard.title' => [

        'welcome-message'  => [
            'title'       => 'dashboard::settings.dashboard.welcome-message.title',
            'description' => 'dashboard::settings.dashboard.welcome-message.description',
            'view'        => 'text',
            'default'     => trans('dashboard::dashboard.welcome.title'),
        ],
        'welcome-subtitle' => [
            'title'       => 'dashboard::settings.dashboard.welcome-subtitle.title',
            'description' => 'dashboard::settings.dashboard.welcome-subtitle.description',
            'view'        => 'text',
            'default'     => trans('dashboard::dashboard.welcome.subtitle'),
        ],

    ],

];
