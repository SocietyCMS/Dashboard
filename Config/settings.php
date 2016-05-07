<?php

return [

    'dashboard::settings.landingpage.title' => [
        'landingpage-type' => [
            'title'       => 'dashboard::settings.landingpage.landingpage-type.title',
            'view'        => 'radio',
            'options'     => [
                'dynamic' => 'dashboard::settings.landingpage.landingpage-type.use-dynamic-landingpage',
                'static'  => 'dashboard::settings.landingpage.landingpage-type.use-static-landingpage',
            ],
            'default'     => 'static',
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
            'view'        => 'text',
            'default'     => trans('dashboard::dashboard.welcome.subtitle'),
        ],

    ],

];
