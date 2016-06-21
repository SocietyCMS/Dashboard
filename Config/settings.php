<?php

return [
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
