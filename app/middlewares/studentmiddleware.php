<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        // Simple access condition: checks if the student session flag is set
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            $_SESSION['student_access'] = true; // simulate a logged-in student
        }

        if ($_SESSION['student_access'] === true) {
            return $next(); // allowed -> continue to the controller
        }

        redirect('student'); // NO -> send back to home page
    }
}