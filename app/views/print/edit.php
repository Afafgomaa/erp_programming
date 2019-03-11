<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
	<?php echo $data['title'];

// no foreach in edit;

   ?>
	<div class="center">

<h1>تعديل بيانات الطلبية </h1>


<form action="<?php echo URLROOT ;?>PagePrint/edit/<?php echo $data['id'] ; ?>" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">أسم المطبعة (صاحب الطباعة)</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name_printer_man" value="<?php echo $data['name_printer_man'] ; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">الكمية</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="how_many" value="<?php echo $data['how_many'] ; ?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">السعر</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="prices" value="<?php echo $data['prices'] ; ?>">
  </div>

    <div class="form-group">
    <label for="formGroupExampleInput">   المدفوع </label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="pay" value="<?php echo $data['pay'] ; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">الباقى  </label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="still_not_pay" value="<?php echo $data['still_not_pay'] ; ?>">
  </div>

    <div class="form-group">
    <label for="formGroupExampleInput">الصنف  </label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="type" value="<?php echo $data['type'] ; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">أسم الموديل </label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="model" value="<?php echo $data['model'] ; ?>">
  </div>

<div class="form-group">
    
    <input type="submit" class="form-control btn btn-primary">
  </div>

</form>


  </tbody>
</table>
</div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>		