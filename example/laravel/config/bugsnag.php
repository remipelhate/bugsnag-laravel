<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | You can find your API key on your Bugsnag dashboard.
    |
    | This api key points the Bugsnag notifier to the project in your account
    | which should receive your application's uncaught exceptions.
    |
    */

    'api_key' => env('BUGSNAG_API_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Notify Release Stages
    |--------------------------------------------------------------------------
    |
    | Set which release stages should send notifications to Bugsnag.
    |
    | Example: array('development', 'production')
    |
    */

    'notify_release_stages' => env('BUGSNAG_NOTIFY_RELEASE_STAGES', null),

    /*
    |--------------------------------------------------------------------------
    | Endpoint
    |--------------------------------------------------------------------------
    |
    | Set what server the Bugsnag notifier should send errors to. By default
    | this is set to 'https://notify.bugsnag.com', but for Bugsnag Enterprise
    | this should be the URL to your Bugsnag instance.
    |
    */

    'endpoint' => env('BUGSNAG_ENDPOINT', null),

    /*
    |--------------------------------------------------------------------------
    | Filters
    |--------------------------------------------------------------------------
    |
    | Use this if you want to ensure you don't send sensitive data such as
    | passwords, and credit card numbers to our servers. Any keys which
    | contain these strings will be filtered.
    |
    */

    'filters' => env('BUGSNAG_FILTERS', ['password']),

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Enable this if you'd like us to enable our default set of notification
    | middleware. These add things like the cookie information and session
    | details to the error to be sent to Bugsnag.
    |
    | If you'd like to add your own middleware, you can call the
    | Bugsnag::registerMiddleware method from the boot method of your app
    | service provider.
    |
    */

    'middleware' => env('BUGSNAG_MIDDLEWARE', true),

];
