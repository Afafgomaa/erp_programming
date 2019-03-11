<?php
  class Pages extends Controller {
    public function __construct(){
     $this->ModelUser = $this->model('UserModel');
    }
    
    public function index(){
      $data = [
        'title' => 'الصفحة الرئيسية',
      ];
     
      $this->view('pages/index', $data);
    }

    public function add_employer(){


               if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $data = [
                  'title' => 'أضافة موظف جديد',
                  'name' => $_POST['name'],
                  'kindofjob' => $_POST['kindofjob'],
                  'salary' => $_POST['salary']
                ];

               if($this->ModelUser->add($data)){
                $msgsuccess =  '<div class="container">';
                $msgsuccess.= '<div class="center">';
                $msgsuccess.= '<div class="alert alert-success">تمت أضافة موظف جديد </div>';
                $msgsuccess.= '</div>';
                $msgsuccess.='</div>';
                

               }else {
                echo 'some thing wrong';
               }

                
                }
                             $data = [
              'title' => 'أضافة موظف جديد',
              'name'  => '',
              'kindofjob' => '',
              'salary' => ''

            ];
                   $rows =  $this->ModelUser->get();
            $this->view('pages/add', $data, $rows);
    }


    public function edit($id){
       if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                                        $data = [
                      'title' => 'تعديل بيانات الموظف',
                      'name' => $_POST['name'],
                      'kindofjob' => $_POST['kindofjob'],
                      'salary' => $_POST['salary'],
                      'id' => $id
                           ];

                        if($this->ModelUser->edit($data)){
                          header('location:'.URLROOT. 'pages/add_employer');
                        }else {
                          die('wrong');
                        }



       }else{
      $rows =  $this->ModelUser->get2($id);
       $data = ['title' => 'تعديل بيانات الموظف', 'id' => $id , 'name' => $rows->name , 'kindofjob' => $rows->kindofjob, 'salary' => $rows->salary ];

      $this->view('pages/edit',$data);
       }


    }

    public function delete($id){
      if($this->ModelUser->deleteuser($id)){
        echo 'deleted';
      }else {
        echo 'weong';
      }
        header('location:'.URLROOT. 'pages/add_employer');
    }
  }