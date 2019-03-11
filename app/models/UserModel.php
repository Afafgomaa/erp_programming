<?php

class UserModel {
	private $db; 

	public function __construct() {
		$this->db = new Database();
	}

	public function add($data){
		$this->db->query("INSERT INTO employers(name, kindofjob, salary, salary_with_day) values(:name, :kindofjob, :salary, :salary_with_day)");
		$this->db->bind(':name', $data['name']);
		$this->db->bind(':kindofjob', $data['kindofjob']);
		$this->db->bind(':salary', $data['salary']);
    $this->db->bind(':salary_with_day', $data['salary'] / 6);

		
		if ($this->db->execute()){
			return true;
		}else {
			return false;
		}

	}



  public function get(){
  	$this->db->query("SELECT * FROM employers order by id DESC");
  	$rows = $this->db->resultSet();
  	return $rows;
  }


  public function get2($userid){
  	$this->db->query("SELECT * FROM employers WHERE id = :id");
  	$this->db->bind(':id', $userid);
  	$rows = $this->db->single();
  	return $rows;
  }

  public function edit($data){
  	$this->db->query("UPDATE employers SET name = :name , kindofjob = :kindofjob , salary = :salary WHERE id = :id");
  	    $this->db->bind(':id', $data['id']);
  	    $this->db->bind(':name', $data['name']);
		$this->db->bind(':kindofjob', $data['kindofjob']);
		$this->db->bind(':salary', $data['salary']);
		

  	if ($this->db->execute()){
  		return true;
  	}else {
  		return false;
  	}
  }

  public function deleteuser($id){
  	$this->db->query("DELETE FROM employers WHERE id = :id");
  	$this->db->bind(':id', $id);
  	  	if ($this->db->execute()){
  		return true;
  	}else {
  		return false;
  	}
  	
  }
}