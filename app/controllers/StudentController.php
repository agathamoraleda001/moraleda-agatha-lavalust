<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $_SESSION['student_access'] = true;

        $data['title'] = "Agatha's Student Hub";

        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2025-00304',
            'name' => 'Agatha Dominique N. Moraleda',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'III-F6',
            'email' => 'agathamoraleda001@gmail.com',
            'hobby' => 'Pickleball',
            'description' => 'A BSIT student interested in pickleball.'
        ];

        $this->call->view('student_profile', $student);
    }
}