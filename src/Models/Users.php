<?php

namespace App\Models;
use \PDO;

class Users extends DB
{
	public function getUsers()
	{
		$conn = $this->connect();
		$stmt = $conn->prepare('SELECT * FROM users');
		$stmt->execute();
		$users = $stmt->fetchAll(PDO::FETCH_OBJ);

		return $users;
	}
}