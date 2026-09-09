<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $data['title'] = "Agatha's Student Hub";

        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => '00305',
            'name' => 'Agatha Dominique N. Moraleda',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'III-F6',
            'email' => 'agathamoraleda001@gmail.com',
            'hobby' => 'Pickleball',
            'description' => 'Simple student who loves to play pickleball and explore new things. I am passionate about technology and enjoy learning about the latest trends in the IT industry. In my free time, I like to read books, watch movies, and spend time with my friends and family.'
        ];

        $this->call->view('student_profile', $student);
    }
}