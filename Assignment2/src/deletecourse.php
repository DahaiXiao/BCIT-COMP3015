<?php

require_once 'Repositories/CourseRepository.php';
require_once 'Repositories/UserRepository.php';

use src\Repositories\CourseRepository;
use src\Repositories\UserRepository;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $coursename = $_POST['coursename'];
    $user_id = $_POST['userid'];

    $course = (new CourseRepository())->deleteCourse($coursename, $user_id);
    if ($course) {
        header('Location: courses.php');
    } else {
        $_SESSION['error_message'] = 'Error deletin post';
        header('Location: courses.php');
    }
    exit(0);
}
