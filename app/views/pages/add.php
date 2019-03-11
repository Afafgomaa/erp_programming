<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
	<h3><?php echo $data['title']; ?></h3>
	<div class="center">
    <a class="btn btn-primary pull-left" href="<?php echo URLROOT ?>">Back</a>
	<form class="form-inline" method="post" action="<?php echo URLROOT?>pages/add_employer">
  <label class="sr-only" for="inlineFormInputName2">الأسم</label>
  <input type="text" name="name" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="الأسم">

  <label class="sr-only" for="inlineFormInputGroupUsername2">الراتب</label>

    <input type="number" name="salary" class="form-control" id="inlineFormInputGroupUsername2" placeholder="الراتب">

    <label class="sr-only" for="inlineFormInputName2">وصف الوظيفة</label>
  <input type="text" name="kindofjob" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="وصف الوظيفة">
  <button type="submit" class="btn mb-2">أضافة</button>
</form>
<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">الأسم</th>
      <th scope="col">نوع الوظيفة</th>
      <th scope="col">الراتب</th>
      <th scope="col">التعديلات</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($rows as $row):
         
  		?>
    <tr>
      <th scope="row"><?php echo $row->id ?></th>
      <td><a href="<?php echo URLROOT ?>attend/index/<?php echo $row->id?>"><?php echo $row->name ?></a></td>
      <td><?php echo $row->kindofjob ?></td>
      <td><?php echo $row->salary ?> جنية  </td>
      <td><a class="btn btn-warning" href="<?php echo URLROOT;?>pages/edit/<?php echo $row->id ; ?>">تعديل</a>
          <a class="btn btn-danger" href="<?php echo URLROOT;?>pages/delete/<?php echo $row->id ; ?>">مسح</a>
      </td>
    </tr>

<?php

 endforeach; ?>

  </tbody>
</table>
</div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>