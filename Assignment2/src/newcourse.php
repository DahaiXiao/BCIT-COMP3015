<?php require_once 'header.php' ?>

<body>

    <?php require_once 'nav.php' ?>

    <div class="grid grid-cols-12 mt-20">

        <form class="space-y-6 col-start-4 col-span-6" action="newcourse.php" method="POST">
            <div>
                <label for="coursenameinput" class="block text-sm font-medium text-gray-700"> Course Name </label>
                <div class="mt-1">
                    <input id="coursename" name="coursename" type="text" placeholder="input Course Name" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Choose Status</label>
                <div class="mt-1">
                    <input type="checkbox" name="completed" id="completed" value="completed"> complete
                </div>
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add
                </button>
            </div>
        </form>

    </div>

</body>

<?php

require_once 'Repositories/CourseRepository.php';
require_once 'Repositories/UserRepository.php';

use src\Repositories\CourseRepository;
use src\Repositories\UserRepository;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $coursename = $_POST['coursename'];
    $completed = $_POST['completed'];
    $userId = $_SESSION['user_id'];
    $authenticatedUser = (new UserRepository())->getUserById($userId);
    $course = (new CourseRepository())->saveCourse($coursename, $completed, $authenticatedUser->id);
    if ($post) {
        header('Location: courses.php');
    } else {
        $_SESSION['error_message'] = 'Error creating post';
        header('Location: courses.php');
    }
    exit(0);
}
