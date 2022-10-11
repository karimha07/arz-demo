<?php

return [
    'models' => [
        'User'       => \App\Models\User::class,
        'Role'       => \Spatie\Permission\Models\Role::class,
        'Permission' => \App\Models\Permission::class,
    ],
    'resources'     => [
        'UserResource'       => \Phpsa\FilamentAuthentication\Resources\UserResource::class,
        'RoleResource'       => \App\Filament\Resources\RoleResource::class,
        'PermissionResource' => \App\Filament\Resources\PermissionResource::class,
    ],
    'pages'         => [
        'Profile' => \Phpsa\FilamentAuthentication\Pages\Profile::class
    ],
    'Widgets'       => [
        'LatestUsers' => [
            'enabled' => true,
            'limit'   => 5,
            'sort'    => 0
        ],
    ],
    'preload_roles' => true,
    'impersonate'   => [
        'enabled'  => true,
        'guard'    => 'web',
        'redirect' => '/'
    ]
];
