<?php
class Database
{
	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $connection;

	public function processRowSet($result, $singleRow = false)
	{
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $singleRow ? $rows[0] : $rows;
	}

	public function __construct($db_name, $db_user, $db_pass, $db_host)
	{
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;
	}

	public function connect()
	{
		$this->connection = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		if ($this->connection->connect_error) {
			die('Connection failed: ' . $this->connection->connect_error);
		}
	}

	public function select($table, $condition = null, $singleRow = false)
	{
		$sql = "SELECT * FROM $table";
		if ($condition !== null) {
			$sql .= " WHERE $condition";
		}
		$result = $this->query($sql);
		return $singleRow ? mysqli_fetch_assoc($result) : $this->processRowSet($result);
	}

	public function query($sql)
	{
		return $this->connection->query($sql);
	}

	public function update(array $data, $table, $where)
	{
		$this->connect();
		$columns = '';
		foreach ($data as $column => $value) {
			$columns .= $columns == '' ? '' : ', ';
			$columns .= "$column='" . $value . "'";
		}
		$sql = "UPDATE $table SET $columns WHERE $where";

		return ($result = $this->connection->query($sql)) ? true : $this->connection->error;
	}

	public function insert(array $data, $table)
	{
		$this->connect();
		$columns = implode(', ', array_keys($data));
		$values = "'" . implode("', '", array_values($data)) . "'";

		$sql = "INSERT INTO $table ($columns) VALUES ($values)";
		$result = $this->connection->query($sql);

		return $result ? $this->connection->insert_id : false;
	}
}
