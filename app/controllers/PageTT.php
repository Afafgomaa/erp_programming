<?php

  class PageTT extends Controller {
    public function __construct(){
     $this->ModelTT = $this->model('TTModel');
    }
    
    public function index(){
     $print =  $this->ModelTT->getTT();
      $data = [
        'title' => 'طباعة',
        'p'     => $print
      ];

      $this->view('tt/tt', $data);
    }

    public function Add(){

      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     

     $data = [
        'title' => 'tt',
        'name_tt_man' => $_POST['name_tt_man'],
        'how_many' => $_POST['how_many'],
        'prices' => $_POST['prices'],
        'pay' => $_POST['pay'],
        'still_not_pay' => $_POST['still_not_pay'],
        'type' => $_POST['type'],
        'model' => $_POST['model']
      ];

              if($this->ModelTT->addTT($data)){
                echo 'added';
              
              }else {
                echo 'not added';
              }
      $print =  $this->ModelTT->getTT();
      $data = [
        'title' => 'tt',
        'p'     => $print
      ];
              $this->view('tt/tt', $data);
      }else {
        $data =['erro'=> 'erro'];

      $this->view('tt/add', $data);

      }
      
 

    }

     public function delete($id){
      if($this->ModelTT->deleteTT($id)){
        echo 'deleted';
      }else {
        echo 'weong';
      }
        header('location:'.URLROOT. 'PageTT');
    }


public function edit($id){

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

     $data = [
        'title' => 'tt',
        'name_tt_man' => $_POST['name_tt_man'],
        'how_many' => $_POST['how_many'],
        'prices' => $_POST['prices'],
        'pay' => $_POST['pay'],
        'still_not_pay' => $_POST['still_not_pay'],
        'type' => $_POST['type'],
        'model' => $_POST['model'],
        'id' => $id
      ];

     if($this->ModelTT->edit($data)){
   $print =  $this->ModelTT->getTT();
      $data = [
        'title' => 'tt',
        'p'     => $print
      ];
              $this->view('tt/tt', $data);

     }else {
      echo 'wrong';
     }

    }else {


    $print =  $this->ModelTT->getTT2($id);


     $data = [
        'title' => 'tt',
        'name_tt_man' => $print->name_tt_man,
        'how_many' => $print->how_many,
        'prices' => $print->prices,
        'pay' => $print->pay,
        'still_not_pay' => $print->still_not_pay,
        'type' => $print->type,
        'model' => $print->model,
        'id' => $id
      ];

      $this->view('tt/edit', $data);
      }


   

    }



  }