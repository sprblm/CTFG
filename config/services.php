<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'twitter' => [
        /*'client_id' => '88rbeB2TvDJKpbrNG4UGLQcUl',
        'client_secret' => '4WSBl4bjoycRhZK8fJ2QEgdaBgo1aGkZ65MM8wMJxvVyt97a3f',
        'redirect' => 'http://justdemo.tk/callback', */

        'client_id' => 'YnN71HLOub8Wr5MoVpsLspT5q',
        'client_secret' => 'HHClBdHj51ZBB91PGhfTC2y8pHNxRcHyLSvcyO3JD4tJ5B3U4P',
        'redirect' => 'https://66b2a8ac61bb.ngrok.io/callback/twitter',
    ],

];
