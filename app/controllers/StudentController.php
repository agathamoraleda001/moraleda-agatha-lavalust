<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $student = [
            'page_title' => 'Moraleda Student Portal',
            'student_id' => 'MCC2025-00304',
            'name' => 'Agatha Dominique N. Moraleda',
            'course' => 'BSIT',
            'year' => '3rd Year',
            'section' => 'F6',
            'email' => 'agathamoraleda001@gmail.com'
        ];

        return $this->call->view('student/index', $student);
    }

    public function profile()
    {
        $student = [
            'page_title' => 'Student Profile - Moraleda',
            'student_id' => 'MCC2025-00304',
            'name' => 'Agatha Dominique N. Moraleda',
            'course' => 'BSIT',
            'year' => '3rd Year',
            'section' => 'F6',
            'email' => 'agathamoraleda001@gmail.com'
        ];

        return $this->call->view('student/profile', $student);
    }
}