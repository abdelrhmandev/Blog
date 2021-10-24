<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Look & feel customizations
    |--------------------------------------------------------------------------
    |
    | Make it yours.
    |
    */

    // Project name. Shown in the breadcrumbs and a few other places.
    'project_name' => 'Blog App',

    // Menu logos
    'logo_lg'   => '<b>Back</b>pack',
    'logo_mini' => '<b>B</b>p',

 

    // Show powered by Laravel Application in the footer?
    'show_powered_by' => true,
 
    /*
    |--------------------------------------------------------------------------
    | Registration Open
    |--------------------------------------------------------------------------
    |
    | Choose whether new users/admins are allowed to register.
    | This will show up the Register button in the menu and allow access to the
    | Register functions in AuthController.
    |
    | By default the registration is open only on localhost.
    */

 

    /*
    |--------------------------------------------------------------------------
    | Routing
    |--------------------------------------------------------------------------
    */

    // The prefix used in all base routes (the 'admin' in admin/dashboard)
    // You can make sure all your URLs use this prefix by using the backpack_url() helper instead of url()
    'route_prefix' => 'BoxControl',

 
 

    // The guard that protects the Application admin panel.
    // If null, the config.auth.defaults.guard value will be used.
    'guard' => 'admin',

    // The password reset configuration for Application.
    // If null, the config.auth.defaults.passwords value will be used.
    'passwords' => '123456',

    // What kind of avatar will you like to show to the user?
    // Default: gravatar (automatically use the gravatar for his email)
    // Other options:
    // - placehold (generic image with his first letter)
    // - example_method_name (specify the method on the User model that returns the URL)
    'avatar_type' => 'gravatar',

 
 
];
