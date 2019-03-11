<?php

class PrintModel {
	private $db; 

	public function __construct() {
		$this->db = new Database();
	}


	public function getPrint(){
		$this->db->query("SELECT * FROM print");
		  	$rows = $this->db->resultSet();
  	return $rows;
	}


	public function getPrint2($id){
		$this->db->query("SELECT * FROM print WHERE id_print = :id_print");
		$this->db->bind(":id_print", $id);
		// when using parametr or need one row spacfic used dingle not fetch all
		  	$rows = $this->db->single();
  	return $rows;
	}


	public function addPrint($data){
		$this->db->query("INSERT INTO print(name_printer_man, how_many, type, prices, pay, still_not_pay, model) 
			VALUES(:name_printer_man, :how_many, :type , :prices, :pay, :still_not_pay, :model)");
		$this->db->bind(":name_printer_man", $data['name_printer_man']);
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


  public function deletePrint($id){
  	$this->db->query("DELETE FROM print WHERE id_print = :id_print");
  	$this->db->bind(':id_print', $id);
  	  	if ($this->db->execute()){
  		return true;
  	}else {
  		return false;
  	}
  	
  }

    public function edit($data){
  	$this->db->query("UPDATE print SET name_printer_man = :name_printer_man, how_many = :how_many, type = :type, prices = :prices , pay = :pay, still_not_pay = :still_not_pay, model=:model WHERE id_print = :id");
		$this->db->bind(":name_printer_man", $data['name_printer_man']);
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