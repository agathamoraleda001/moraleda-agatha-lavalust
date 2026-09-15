<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->library('session');
    }

    public function login()
    {
        if ($this->io->method() == 'post') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            if ($username === 'admin' && $password === 'admin123') {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $username;

                $signature = hash_hmac('sha256', $username, $this->auth_secret());
                setcookie('LLAuth', $username . '.' . $signature, [
                    'expires' => time() + 86400,
                    'path' => '/',
                    'secure' => $this->is_https(),
                    'httponly' => true,
                    'samesite' => 'Lax'
                ]);

                redirect('products');
                exit;
            }

            $this->call->view('login', [
                'error' => 'Invalid username or password.'
            ]);
            return;
        }

        $this->call->view('login');
    }

    public function logout()
    {
        session_destroy();

        setcookie('LLAuth', '', [
            'expires' => time() - 3600,
            'path' => '/',
            'secure' => $this->is_https(),
            'httponly' => true,
            'samesite' => 'Lax'
        ]);

        redirect('login');
        exit;
    }

    private function auth_secret()
    {
        return config_item('session_hmac_secret') ?: hash('sha256', 'lavalust-auth-secret');
    }

    private function is_https()
    {
        return ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https'
            || (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on');
    }
}
