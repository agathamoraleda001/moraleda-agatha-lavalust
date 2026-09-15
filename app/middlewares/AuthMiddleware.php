<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthMiddleware
{
    public function handle(Closure $next)
    {
        $authenticated = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
        $auth_cookie = $_COOKIE['LLAuth'] ?? '';
        $parts = explode('.', $auth_cookie, 2);
        $cookie_valid = count($parts) === 2
            && $parts[0] === 'admin'
            && hash_equals(
                hash_hmac('sha256', $parts[0], config_item('session_hmac_secret') ?: hash('sha256', 'lavalust-auth-secret')),
                $parts[1]
            );

        if (!$authenticated && !$cookie_valid) {
            redirect('login');
            exit;
        }

        return $next();
    }
}
