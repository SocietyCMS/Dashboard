<?php

return [

    'dashboard::settings.landingpage.title' => [
        'landingpage-type' => [
            'title'       => 'dashboard::settings.landingpage.landingpage-type.title',
            'view'        => 'radio',
            'options'     => [
                'dynamic' => 'dashboard::settings.landingpage.landingpage-type.use-dynamic-landingpage',
                'static' => 'dashboard::settings.landingpage.landingpage-type.use-static-landingpage',
                'url' => 'dashboard::settings.landingpage.landingpage-type.use-url'
            ],
            'default'     => 'static',
        ],

        'landingpage-url'  => [
            'title'       => 'dashboard::settings.landingpage.landingpage-url.title',
            'description' => 'dashboard::settings.landingpage.landingpage-url.description',
            'view'        => 'text',
        ],
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
