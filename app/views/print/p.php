<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
	
	

<h1 class="text-center">قسم الطباعة</h1>
<a class="btn btn-primary pull-left" href="<?php echo URLROOT ?>">Back</a> 

<br>
<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id_print</th>
      <th scope="col">أسم المطبعة (صاحب المطبعة)</th>
      <th scope="col">الكمية</th>
      <th scope="col">أجمالى المبلغ</th>
      <th scope="col">المدفوع </th>
      <th scope="col">الباقى  </th>
      <th scope="col">الصنف   </th>
      <th scope="col">أسم الموديل </th>
      <th scope="col">تاريخ الطلب   </th>
      <th scope="col"> controll</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($data['p'] as $print): ?>
  	<tr>
  		<th scope="col"><?php echo $print->id_print ; ?></th>
  		<th scope="col"><?php echo $print->name_printer_man ; ?></th>
  		<th scope="col"><?php echo $print->how_many ; ?> قطعة</th>
  		<th scope="col"><?php echo $print->prices ; ?></th>
  		<th scope="col"><?php echo $print->pay ; ?></th>
  		<th scope="col"><?php echo $print->still_not_pay ; ?></th>
  		<th scope="col"><?php echo $print->type ; ?></th>
  		<th scope="col"><?php echo $print->model ; ?></th>
  		<th scope="col"><?php echo substr($print->date_of_order, 0,10) ; ?></th>
      <th scope="col">
        <a class="btn btn-warning" href="<?php echo URLROOT;?>PagePrint/edit/<?php echo $print->id_print ;?>">تعديل </a>
        <a class="btn btn-danger" href="<?php echo URLROOT;?>PagePrint/delete/<?php echo $print->id_print ;?>">مسح</a>
      </th>
  	</tr>

  <?php endforeach;?>
  </tbody>
</table>
<a class="btn btn-primary pull-left" href="<?php echo URLROOT ?>PagePrint/Add">أضافة طلبية جديدة </a>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>		