<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('UserModel');
    }

    // SHOW ALL USERS
    public function index()
    {
        $data['users'] = $this->UserModel->get_all_users();

        $this->call->view('users/index', $data);
    }

    // CREATE / ADD USER
    public function create()
    {
        if ($_POST) {

            $data = [
                'firstname' => trim($this->io->post('firstname')),
                'lastname'  => trim($this->io->post('lastname')),
                'email'     => trim($this->io->post('email')),
                'username'  => trim($this->io->post('username'))
            ];

            $this->UserModel->create_user($data);

            redirect('users');
            exit;
        }

        $this->call->view('users/create');
    }

    // EDIT USER
    public function edit($id)
    {
        $user = $this->UserModel->get_user($id);

        if (!$user) {
            redirect('users');
            exit;
        }

        if ($_POST) {

            $data = [
                'firstname' => trim($this->io->post('firstname')),
                'lastname'  => trim($this->io->post('lastname')),
                'email'     => trim($this->io->post('email')),
                'username'  => trim($this->io->post('username'))
            ];

            $this->UserModel->update_user($id, $data);

            redirect('users');
            exit;
        }

        $data['user'] = $user;

        $this->call->view('users/edit', $data);
    }

    // DELETE USER
    public function delete($id)
    {
        $user = $this->UserModel->get_user($id);

        if ($user) {
            $this->UserModel->delete_user($id);
        }

        redirect('users');
        exit;
    }
}