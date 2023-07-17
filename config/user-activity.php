<?php

return [
    'activated'        => true, // active/inactive all logging
    'middleware'       => ['web', 'auth'],
    'route_path'       => 'admin/user-activity',
    'admin_panel_path' => 'admin/dashboard',
    'delete_limit'     => 7, // default 7 days

    'model' => [
        'user' => "App\Models\User"
    ],

    'user_params' => [
        'user_id' => "use_id",
        'user_email' => "use_email",
        'user_name' => "use_name"
    ],

    'log_events' => [
        'on_create'     => false,
        'on_edit'       => true,
        'on_delete'     => true,
        'on_login'      => true,
        'on_lockout'    => true
    ]
];
