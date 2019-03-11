<?php

class AttendModel {
	private $db; 

	public function __construct() {
		$this->db = new Database();
	}

  public function getAttend($id){
  	$this->db->query("SELECT * FROM employers WHERE id = :id");
  	$this->db->bind(':id', $id);
  	$rows = $this->db->resultSet();
  	return $rows;
  }

  public function add_attend_days($id){
  	$this->db->query("UPDATE employers SET attend = attend + 1 , days_of_work = attend , salary_of_week = salary_with_day * days_of_work WHERE id = :id");
  	$this->db->bind(':id', $id);
  	if ($this->db->execute()){
			return true;
	}else {
			return false;
		}
  }

  public function absent($data){
  	$this->db->query("INSERT INTO system_attend(attend, nots_employee) VALUES(:attend, :nots_employee) WHERE employee_id = :id");
  	    $this->db->bind(':attend', $data['attend']);
		$this->db->bind(':nots_employee', $data['nots_employee']);
		$this->db->bind(':employee_id', $data['id']);
		if ($this->db->execute()){
			return true;
		}else {
			return false;
		}
  }


  public function all_salary(){
  	$this->db->query("SELECT * FROM employers");
  	$rows = $this->db->resultSet();
  	return $rows;

  }
//SELECT DAYNAME(attend) = 'thursday' FROM employers WHERE attend = :attend
  public function thursday($attend){
  	$this->db->query("SELECT DAYNAME(attend) = 'thursday' FROM employers WHERE attend = :attend");
  	$this->db->bind(':attend', $attend);
  	$rows = $this->db->resultSet();
  	return $rows;

  	
  	
  }

  public function DeleteAll(){
  	$this->db->query("UPDATE employers SET  days_of_work = 0 , salary_of_week = 0  , attend = 0");
  	if ($this->db->execute()){
			return true;
	}else {
			return false;
		}

  }
  public function SumSalary(){
  	$this->db->query("SELECT sum(salary_of_week) AS mom FROM employers");
  	$rows = $this->db->resultSet();
  	return $rows;
  	
  	


  }


}