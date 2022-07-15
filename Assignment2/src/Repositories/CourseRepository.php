<?php

namespace src\Repositories;

require_once 'Repository.php';
require_once __DIR__ . '/../Models/Course.php';

use src\Models\Course;

//use PDO; // only needed for commented PDO example at the bottom.
//use PDOException;

class CourseRepository extends Repository
{


	/**
	 * @param int $user_id
	 * @return array
	 */
	public function getCoursesForUser(int $user_id): array
	{
		$sqlStatement = $this->mysqlConnection->prepare("SELECT id,coursename, completed, author_id FROM courses WHERE author_id = ?");
		$sqlStatement->bind_param('i', $user_id);
		$sqlStatement->execute();
		$resultSet = $sqlStatement->get_result();

		$courses = [];
		while ($row = $resultSet->fetch_assoc()) {
			$courses[] = new Course($row);
		}

		return $courses;
	}



	/**
	 * @param string $coursename
	 * @param string $complete
	 * @param int $user_id
	 * @return bool
	 * courses = table name
	 */
	public function saveCourse(string $coursename, string $completed, int $user_id): bool
	{
		$sqlStatement = $this->mysqlConnection->prepare("INSERT INTO courses VALUES(NULL, ?, ?, ?)");
		$sqlStatement->bind_param('ssi', $coursename, $completed, $user_id);
		return $sqlStatement->execute();
	}


	/**
	 * @param string $coursename
	 * @param int $user_id
	 * @return bool
	 * courses = table name
	 */
	public function deleteCourse(string $coursename, int $user_id)
	{
		$sqlStatement = "SELECT $coursename FROM courses WHERE author_id=$user_id";
		$sqlStatement = "DELETE FROM courses WHERE coursename=$coursename";
	}
}
