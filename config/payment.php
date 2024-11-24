<?php

return [
    'cashfree' => [
        'client_id' => env('CASHFREE_CLIENT_ID'),
        'client_secret' => env('CASHFREE_CLIENT_SECRET'),
        'environment' => env('CASHFREE_ENVIRONMENT', 'sandbox'),
        'sandbox_url' => 'https://sandbox.cashfree.com/pg/orders',
        'production_url' => 'https://api.cashfree.com/pg/orders',
        'return_url' => env('APP_URL') . '/payment/success',
        'notify_url' => env('APP_URL') . '/payment/callback',
    ],
];