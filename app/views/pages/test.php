<?php
      $data = ['title' => 'تعديل بيانات الموظف'];
    if(isset($_GET['userid'])){

      $user_id = $_GET['userid'];
      $rows =  $this->ModelUser->get2($user_id);
      
       
      $this->view('pages/edit', $data, $rows);
    }


if (isset($_POST['submit'])){

      $data = [
  'title' => 'تعديل بيانات الموظف',
  'name' => $_POST['name'],
  'kindofjob' => $_POST['kindofjob'],
  'salary' => $_POST['salary'],
  'id' => $_POST['id']
       ];

         $this->ModelUser->edit($data);
     }

$this->view('pages/add', $data);

         $data = [
                  'title' => 'أضافة موظف جديد',
                  'name' => '',
                  'kindofjob' => '',
                  'salary' => ''
                ];
    if(isset($_GET['userid'])){

      $user_id = $_GET['userid'];
      $rows =  $this->ModelUser->get2($user_id);
      //$this->view('pages/edit', $data, $rows);
         if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                          $data = [
                      'title' => 'تعديل بيانات الموظف',
                      'name' => $_POST['name'],
                      'kindofjob' => $_POST['kindofjob'],
                      'salary' => $_POST['salary'],
                      'id' => $_POST['id']
                           ];

                             if($this->ModelUser->edit($data)){
                              echo 'updated';
                         }else {
                          echo 'wrong';
                         }
                    $this->view('pages/edit', $data, $rows);
}


    }

      
    


    // header('location:'.URLROOT. 'pages/add_employer');

      