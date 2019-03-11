<?php

class TTModel {
	private $db; 

	public function __construct() {
		$this->db = new Database();
	}


	public function getTT(){
		$this->db->query("SELECT * FROM tt");
		  	$rows = $this->db->resultSet();
  	return $rows;
	}


	public function getTT2($id){
		$this->db->query("SELECT * FROM tt WHERE id_tt = :id_tt");
		$this->db->bind(":id_tt", $id);
		// when using parametr or need one row spacfic used dingle not fetch all
		  	$rows = $this->db->single();
  	return $rows;
	}


	public function addTT($data){
		$this->db->query("INSERT INTO tt(name_tt_man, how_many, type, prices, pay, still_not_pay, model) 
			VALUES(:name_tt_man, :how_many, :type , :prices, :pay, :still_not_pay, :model)");
		$this->db->bind(":name_tt_man", $data['name_tt_man']);
		$this->db->bind(":how_many", $data['how_many']);
		$this->db->bind(":type", $data['type']);
		$this->db->bind(":prices", $data['prices']);
		$this->db->bind(":pay", $data['pay']);
		$this->db->bind(":still_not_pay", $data['still_not_pay']);
		$this->db->bind(":model", $data['model']);
		
	if($this->db->execute()){
      return true;
	}else {
		return false;
	}

	}


  public function deleteTT($id){
  	$this->db->query("DELETE FROM tt WHERE id_tt = :id_tt");
  	$this->db->bind(':id_tt', $id);
  	  	if ($this->db->execute()){
  		return true;
  	}else {
  		return false;
  	}
  	
  }

    public function edit($data){
  	$this->db->query("UPDATE tt SET name_tt_man = :name_tt_man, how_many = :how_many, type = :type, prices = :prices , pay = :pay, still_not_pay = :still_not_pay, model=:model WHERE id_tt = :id");
		$this->db->bind(":name_tt_man", $data['name_tt_man']);
		$this->db->bind(":how_many", $data['how_many']);
		$this->db->bind(":type", $data['type']);
		$this->db->bind(":prices", $data['prices']);
		$this->db->bind(":pay", $data['pay']);
		$this->db->bind(":still_not_pay", $data['still_not_pay']);
		$this->db->bind(":model", $data['model']);
		$this->db->bind(":id", $data['id']);
		

  	if ($this->db->execute()){
  		return true;
  	}else {
  		return false;
  	}
  }


}