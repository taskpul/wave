<?php

return [
    'url' => rtrim(env('CALCOM_URL', ''), '/'),
    'api_key' => env('CALCOM_API_KEY'),
    'jwt_secret' => env('CALCOM_JWT_SECRET'),
    'jwt_ttl' => (int) env('CALCOM_JWT_TTL', 60),
];
