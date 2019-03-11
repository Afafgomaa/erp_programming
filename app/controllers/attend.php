<?php
  class attend extends Controller {
    public function __construct(){
    	$this->ModelUser = $this->model('UserModel');
        $this->ModelAttend = $this->model('AttendModel');
    }

    public function index($id){

$rows = $this->ModelAttend->getAttend($id);
$data = ['id' => $id];

    	$this->view('attend/attend_employee',$data ,$rows);



    }

    public function add_attend_day($id){

    	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // $data = ['id' => $id, 'attend' => $_POST['attend'] ];

            if($this->ModelAttend->add_attend_days($id)){

            	header('location:'.URLROOT. 'pages/add_employer');
            	echo 'added';
            }else {
            	echo 'no';
            }

             

    	}else{
    		die('some thing wrong');

    	}
    	
 }


 public function salary(){

 	
 	$post = $this->ModelAttend->SumSalary();

foreach($post as $p){
	
}

 	$rows = $this->ModelAttend->all_salary();
 	foreach($rows as $row){


 	}
   
 	$data = ['day' => $row->attend ];
    if($this->ModelAttend->thursday($data['day'])){
         $data = ['title' => 'الخميس'  , 'p'=> $p->mom];
    }else {
    	echo "string";
    }

 	$this->view('attend/salary', $data, $rows);
 }
 public function DeleteRecords(){
 	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 		$this->ModelAttend->DeleteAll();
    $rows = $this->ModelAttend->all_salary();
 	foreach($rows as $row){

 	}

 	$data = ['title' => 'الخميس'  ] ;
 		$this->view('attend/salary', $data, $rows);
 	}else {
 		die('some thing went wrong');
 	}
 	
 }

}