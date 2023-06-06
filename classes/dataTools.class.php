<?php

class DataTools
{
	private $connection;

	public function __construct($db)
	{
		$this->connection = $db;
	}

	public function setCity($city_id)
	{
		$_SESSION['CITY'] = $this->connection->select('cities', "id = $city_id", true);
	}

	public function getAllFilials()
	{
		if (isset($_SESSION['CITY'])) {
			$city_id = $_SESSION['CITY']['id'];
		} else {
			$result = $this->connection->select('filials', "id = {$_SESSION['STAFF']['filial_id']}");
			$city_id = $result['city_id'];
		}

		$sql = "SELECT f.*, c.city_title FROM filials AS f LEFT JOIN cities AS c ON f.city_id = c.id WHERE c.id = $city_id";
		$result = $this->connection->query($sql);
		$citiesAll = $this->connection->processRowSet($result, false);

		return json_encode($citiesAll, JSON_UNESCAPED_UNICODE);
	}

	public function getAllServices()
	{
		$sql = 'SELECT * FROM services ORDER BY service_title';
		$result = $this->connection->query($sql);
		$services = $this->connection->processRowSet($result, false);

		return json_encode($services, JSON_UNESCAPED_UNICODE);
	}

	public function getAllDoctorsByFillial($filial)
	{
		$query = "SELECT * FROM staffs AS st
          LEFT JOIN jobs AS j ON st.job_id = j.id
          WHERE j.job_name != 'Администратор' && j.job_name != 'Директор' && st.filial_id = $filial";
		$res = $this->connection->query($query);
		$doctors = $this->connection->processRowSet($res, false);

		return json_encode($doctors, JSON_UNESCAPED_UNICODE);
	}

	public function setBooking($surname, $name, $patronymic, $tel, $filial_id, $service_id, $doctor_id, $date, $time)
	{
		$query = "INSERT INTO `bookings` (`patient_surname`, `patient_name`, `patient_patronymic`, `phone`, `filial_id`, `services_id`, `staff_id`, `date`, `time`)
              VALUES ('{$surname}', '{$name}', '{$patronymic}', '{$tel}', '{$filial_id}', '{$service_id}', '{$doctor_id}', '{$date}', '{$time}')";

		return $this->connection->query($query);
	}
}
