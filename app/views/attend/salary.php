<?php require APPROOT . '/views/inc/header.php';
date_default_timezone_set('Africa/Cairo');
?>


<div class="container">
	
	<div class="center">

<?php 
switch (date("l")) {
	case 'Monday':
		echo '<h1>الأثنين  </h1>';
		break;
		case 'Tuesday':
		echo 'الثلاثاء';
		break;
		case 'Wednesday':
		echo 'الأربعاء';
		break;
		case 'Thursday':
		echo 'الخميس';
		break;
		case 'Friday':
		echo 'ااجمعه';
		break;
		case 'Saturday':
		echo 'السبت';
		break;
		case 'Sunday':
		echo 'الاحد';
		break;
	
	defaut:
		echo 'a';
		break;
}

?>

<a class="btn btn-primary pull-left" href="<?php echo URLROOT ?>pages/add_employer">Back</a>
<br>
<br>
<!--

	add if condation start if you want
-->
<?php if(date('l') == 'Thursday'){

 ?>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">رمز الموظف</th>
      <th scope="col">اسم الموظف </th>
      <th scope="col">عدد ايام العمل الرسمى</th>
      <th scope="col">صافى المرتب</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($rows as $row):?>
    <tr>
      <th scope="row"><?php echo $row->id?></th>
      <td><?php echo $row->name?></td>
      <td><?php echo $row->days_of_work?> أيام  </td>
      <td><?php echo $row->salary_of_week?> جنية  </td>
    </tr>
<?php endforeach;?>
    <tr>
      <th scope="row">#</th>
      <td colspan="2">أجمالى الرواتب</td>

      <td><?php if (isset($data['p'])){ echo $data['p']; }?>جنية</td>
    </tr>
  </tbody>
</table>

<form action="<?php echo URLROOT ;?>attend/DeleteRecords" method="post">
	<input class="btn btn-primary"  type="submit" name="submit" value="بداية أسبوع جديد">
</form>
<!--

	add if condation end if you want
-->
<?php 
}else {
	echo '<h1>لسة المرتبات منزلتش يامحمد  </h1>';
}
?>
</div>
  </div>

<?php
require APPROOT . '/views/inc/footer.php'; ?>