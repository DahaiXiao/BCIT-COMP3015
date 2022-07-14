<?php

require_once 'Repositories/CourseRepository.php';
require_once 'Repositories/UserRepository.php';

use src\Repositories\CourseRepository;
use src\Repositories\UserRepository;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $coursename = $_POST['coursename'];

    $course = (new CourseRepository())->deleteCourse($coursename);
    if ($course) {
        header('Location: posts.php');
    } else {
        $_SESSION['error_message'] = 'Error creating post';
        header('Location: newcourse.php');
    }
    exit(0);
}
