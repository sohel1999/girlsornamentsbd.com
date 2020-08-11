<?php

return [
    'store_id' => env('SSLWPAYMENT_STORE_ID',''),
    'store_password' => env('SSLWPAYMENT_STORE_PASSWORD',''),
    'sandbox' => env('SSLWPAYMENT_SANDBOX', true),
    'redirect_url' => [
        'fail' => [
            'route' => 'payment.failed' // payment.failed
        ],
        'success' => [
            'route' => 'payment.success' //payment.success
        ],
        'cancel' => [
            'route' => 'payment.cancel' // payment/cancel or you can use route also
        ]
    ]
];
