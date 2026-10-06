<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$config['api'] = [
    'jwt_secret' => getenv('JWT_SECRET') ?: '',

    'jwt_algorithm' => 'HS256',

    'jwt_issuer' => 'lavalust',

    'jwt_audience' => 'lavalust-api',

    'access_token_expiration' => 3600,

    'refresh_token_expiration' => 604800,

    'allow_origin' => '*',

    'allow_methods' => 'GET, POST, PUT, PATCH, DELETE, OPTIONS',

    'allow_headers' => 'Content-Type, Authorization, Accept, Origin, X-Requested-With',

    'allow_credentials' => false
];