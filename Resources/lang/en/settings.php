<?php

return [

    'landingpage' => [
        'title' => 'Landingpage',

        'landingpage-type' => [
            'title' => 'Specify the type of the Landingpage',

            'use-dynamic-landingpage' => 'dynamic Landing-Page',
            'use-static-landingpage'  => 'static Landing-Page',
            'use-url'                 => 'url redirect',
        ],

        'landingpage-url' => [
            'title'       => 'Landingpage URL',
            'description' => 'All requests to the homepage will be redirected to this url. Only active when langingpage type is set to "url redirect"',
        ],
    ],

    'dashboard' => [
        'title' => 'Dashboard',

        'welcome-message'  => [
            'title'       => 'Welcome Message',
            'description' => 'The BIG text message on the Dashboard',
        ],
        'welcome-subtitle' => [
            'title'       => 'Welcome Subtitle',
            'description' => 'The not-so-big text message on the Dashboard',
        ],
    ],

];
