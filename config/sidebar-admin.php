<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
  'menu' => [
        [
            'icon' => 'fa fa-home',
            'title' => 'Dashboard',
            'url' => '/',
            'route-name' => 'admin.index'
        ],[
                'icon' => 'fa fa-layer-group',
                'title' => 'KAP',
                'url' => 'javascript:;',
                'caret' => true,
                'sub_menu' => [
                    [
                        'url' => '/monitoring',
                        'title' => 'Monitoring',
                        'route-name' => 'kap.monitoring'
                    ],
                    [
                        'url' => '/equipment',
                        'title' => 'Equipment',
                        'route-name' => 'kap.equipment'
                    ],
                ]
        ],[
            'icon' => 'fa fa-folder',
            'title' => 'Table Refrensi',
            'url' => 'javascript:;',
            'caret' => true,
            'sub_menu' => [
                [
                    'url' => '/ref-site',
                    'title' => 'Site',
                    'route-name' => 'admin.site'
                ],
                [
                    'url' => '/ref-vendor',
                    'title' => 'Vendor',
                    'route-name' => 'admin.site'
                ],
            ]
        ],[
            'icon' => 'fa fa-users',
            'title' => 'Kelola User',
            'url' => '/master-user',
            'route-name' => 'admin.masteruser'
        ],
        // [
        //     'icon' => 'fa fa-question-circle',
        //     'title' => 'Bantuan',
        //     'url' => '/bantuan',
        // ]
    ]
];
