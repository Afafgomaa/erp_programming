
<?php require APPROOT . '/views/inc/header.php'; 



?>

<div class="container">
	
	<div class="center">
		<br>
		<br>
		<h3><?php echo $data['title']; ?></h3>
		<hr>

<br>
<a class="btn btn-primary pull-left" href="<?php echo URLROOT ?>pages/add_employer">Back</a>
<br>
<form method="post" action="<?php echo URLROOT?>pages/edit/<?php echo $data['id'] ;?>">
  <div class="row">
  
    <div class="col">
      <input type="text" name="name" class="form-control" placeholder="الأسم " value="<?php echo $data['name'] ;?>">
    </div>
    <br>
    <div class="col">
      <input type="text" name="kindofjob" class="form-control"  value="<?php echo $data['kindofjob'] ;?>" placeholder="وصف الوظيفة">
    </div>
    <br>
     <div class="col">
      <input type="number" name="salary" class="form-control" value="<?php echo $data['salary'] ;?>" placeholder="الراتب">
    </div>
    <br>
    <div class="col">
      <button class="btn btn-success" type="submit" class="form-control" value="حفظ">حفظ</button>
    </div>
  </div>
</form>


</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>