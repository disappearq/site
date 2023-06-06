<?php

class UserTools
{
	private $connection;

	public function __construct($db)
	{
		$this->connection = $db;
	}

	public function login($email, $password)
	{
		$message = '';

		$userRow = $this->connection->select('patients', "email = '$email'", true);
		if (!empty($userRow)) {
			if (password_verify($password, $userRow['password'])) {
				$_SESSION['USER'] = $userRow;
				$message = 'Успешная авторизация!';
			} else {
				$message = 'Пароль неверный, пожалуйста проверьте введенные данные.';
			}
		} else {
			$staffRow = $this->connection->select('staffs as s', "s.email = '$email'", true, 'left join jobs j on job_id = j.id', 's.*, j.job_name');
			if (!empty($staffRow)) {
				if (password_verify($password, $staffRow['password'])) {
					$_SESSION['STAFF'] = $staffRow;
					$message = 'Успешная авторизация!';
				} else {
					$message = 'Пароль неверный, пожалуйста проверьте введенные данные.';
				}
			} else {
				$message = 'Почта неверна, пожалуйста проверьте введенные данные.';
			}
		}
		return $message;
	}

	public function register($name, $surname, $patronymic, $phone, $email, $password1, $password2)
	{
		$message = '';
		$userRow = $this->connection->select('patients', "email = '$email'", true);
		if ($userRow) {
			$message = 'Эта почта уже используется';
		} else {
			$userRow = $this->connection->select('patients', "phone = '$phone'", true);
			if ($userRow) {
				$message = 'Этот номер уже используется';
			} else {
				if (strlen($password1) < 8) {
					$message = 'Пароль должен содержать не менее 8 символов';
				} elseif ($password1 != $password2) {
					$message = 'Пароли не совпадают!';
				} else {
					$password = password_hash($password1, PASSWORD_BCRYPT);
					$data = [
						'patient_surname' => $surname,
						'patient_name' => $name,
						'patient_patronymic' => $patronymic,
						'phone' => $phone,
						'email' => $email,
						'password' => $password,
					];
					$id = $this->connection->insert($data, 'patients');
					if ($id) {
						$_SESSION['USER'] = $this->connection->select('patients', "id = '$id'", true);
						$message = 'Успешная регистрация!';
					} else {
						$message = 'Ошибка регистрации! Данный пользователь уже зарегистрирован.';
					}
				}
			}
		}
		return $message;
	}

	public function logout()
	{
		$message = '';
		if (isset($_SESSION['USER'])) {
			unset($_SESSION['USER']);
		}
		if (isset($_SESSION['STAFF'])) {
			unset($_SESSION['STAFF']);
		}
		if (empty($_SESSION['USER']) && empty($_SESSION['STAFF'])) {
			if (session_status() == PHP_SESSION_ACTIVE) {
				session_destroy();
			}
			$message = 'Успешный выход!';
		} else {
			$message = 'Ошибка выхода, вы не авторизованы.';
		}
		return $message;
	}
}
