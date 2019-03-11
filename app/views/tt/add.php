<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
	
	<div class="center">

<h1 style="color:#337AB7">أضافة طلبية جديدة فى التطريز</h1>


<form action="<?php echo URLROOT ;?>PageTT/Add" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">أسم محل التطريز</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name_tt_man" placeholder="أسم المطبعة">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">الكمية</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="how_many" placeholder="الكمية">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">السعر</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="prices" placeholder="السعر">
  </div>

    <div class="form-group">
    <label for="formGroupExampleInput">   المدفوع </label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="pay" placeholder="المدفوع ">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">الباقى  </label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="still_not_pay" placeholder="الباقى">
  </div>

    <div class="form-group">
    <label for="formGroupExampleInput">الصنف  </label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="type" placeholder="الصنف ">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">أسم الموديل </label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="model" placeholder="أسم الموديل ">
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