<?php

  class PagePrint extends Controller {
    public function __construct(){
     $this->ModelPrint = $this->model('PrintModel');
    }
    
    public function index(){
     $print =  $this->ModelPrint->getPrint();
      $data = [
        'title' => 'طباعة',
        'p'     => $print
      ];

      $this->view('print/p', $data);
    }

    public function Add(){

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     

     $data = [
        'title' => 'أضافة طلب ',
        'name_printer_man' => $_POST['name_printer_man'],
        'how_many' => $_POST['how_many'],
        'prices' => $_POST['prices'],
        'pay' => $_POST['pay'],
        'still_not_pay' => $_POST['still_not_pay'],
        'type' => $_POST['type'],
        'model' => $_POST['model']
      ];

              if($this->ModelPrint->addPrint($data)){
                echo 'added';
              
              }else {
                echo 'not added';
              }
      $print =  $this->ModelPrint->getPrint();
      $data = [
        'title' => 'طباعة',
        'p'     => $print
      ];
              $this->view('print/p', $data);
      }else {
        $data =['erro'=> 'erro'];

      $this->view('print/add', $data);

      }
      
 

    }

     public function delete($id){
      if($this->ModelPrint->deletePrint($id)){
        echo 'deleted';
      }else {
        echo 'weong';
      }
        header('location:'.URLROOT. 'PagePrint/p');
    }


public function edit($id){

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

     $data = [
        'title' => 'أضافة طلب ',
        'name_printer_man' => $_POST['name_printer_man'],
        'how_many' => $_POST['how_many'],
        'prices' => $_POST['prices'],
        'pay' => $_POST['pay'],
        'still_not_pay' => $_POST['still_not_pay'],
        'type' => $_POST['type'],
        'model' => $_POST['model'],
        'id' => $id
      ];

     if($this->ModelPrint->edit($data)){
   $print =  $this->ModelPrint->getPrint();
      $data = [
        'title' => 'طباعة',
        'p'     => $print
      ];
              $this->view('print/p', $data);

     }else {
      echo 'wrong';
     }

    }else {


    $print =  $this->ModelPrint->getPrint2($id);


     $data = [
        'title' => 'أضافة طلب ',
        'name_printer_man' => $print->name_printer_man,
        'how_many' => $print->how_many,
        'prices' => $print->prices,
        'pay' => $print->pay,
        'still_not_pay' => $print->still_not_pay,
        'type' => $print->type,
        'model' => $print->model,
        'id' => $id
      ];

      $this->view('print/edit', $data);
      }


   

    }



  }