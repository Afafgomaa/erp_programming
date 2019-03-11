<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
	
	<div class="center">
  	<?php 
  foreach($rows as $row){}

  	?>
<a class="btn btn-primary pull-left" href="<?php echo URLROOT ?>pages/add_employer">Back</a>
<br>
<form method="post" action="<?php echo URLROOT ?>attend/add_attend_day/<?php echo $row->id ;?>">
<input type="hidden" name="id" value="<?php echo $row->id ;?>">
  <div class="form-group">
    <label for="exampleInputEmail1">ألأسم </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled value="<?php echo $row->name ?> ">
   
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">وصف الوظيفة</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled value="<?php echo $row->kindofjob ?> ">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">الراتب</label>
    <input type="text" class="form-control" id="exampleInputPassword1" disabled value="<?php echo $row->salary ?> جنية  ">
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="attend">
    &nbsp;
    <label class="form-check-label" for="exampleCheck1">حضور يوم <?php echo date("Y-m-d")
;?></label>
  </div>
  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
</form>





	</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; 

  	//<?php 
  //foreach($rows as $row){
// echo $row->id ; 
// echo $row->name; 
//  echo $row->salary; 
//  echo $row->nots;  
//}

?>

