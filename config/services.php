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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => 'AKIAVA5VR24TL4AFSBDP',
        'secret' => '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',
        'region' => 'eu-central-1',
    ],

    /*'ses' => [
        'key' => "AKIAVA5VR24TPHCNDPAA",
        'secret' => "BPmtpDTL7zGaIpL+3z/JEKrmvxXfbW/FHavI2kp5zXqL",
        'region' => "eu-central-1"
    ],
    */
];
