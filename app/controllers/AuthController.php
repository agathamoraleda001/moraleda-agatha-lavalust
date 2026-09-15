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

        redirect('login');
        exit;
    }
}
