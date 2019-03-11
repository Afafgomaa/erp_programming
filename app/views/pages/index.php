<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
	<div class="center">
	
	<ul class="">
		<li><a href="<?php echo URLROOT?>pages/add_employer">الموظفين</a></li>
		<li><a href="<?php echo URLROOT?>attend/salary">الرواتب</a></li>
		<li><a href="<?php echo URLROOT?>pagePrint/p">الطباعه</a></li>
		<li><a href="<?php echo URLROOT?>PageTT">التطريز</a></li>
		<li><a href="#">لم يعمل </a></li>
		<li><a href="#">لم يعمل</a></li>
		

	</ul>
	<div class="employer text-center">
		<a  style ="text-decoration: none;" href="<?php echo URLROOT?>pages/add_employer">
		<img src="<?php echo URLROOT?>/img/SET-23-512.png">
		 <h3 style="color: #fff">قسم الموظفين  </h3>
		</a>
	</div>
		<div class="employer text-center color1">
			<a style ="text-decoration: none;" href="<?php echo URLROOT?>attend/salary">
		<img src="<?php echo URLROOT;?>/img/img_83386.png">
		<h3 style="color: #fff">قسم الرواتب  </h3>
		</a>
	</div>
		<div class="employer text-center color2">
			<a style ="text-decoration: none;" href="<?php echo URLROOT?>pagePrint/p">
			<img src="<?php echo URLROOT?>/img/img_240421.png">
			<h3 style="color: #fff">قسم الطباعة </h3>
		</a>
	</div>
		<div class="employer text-center color3">
			<a style ="text-decoration: none;" href="<?php echo URLROOT?>">
			<img src="<?php echo URLROOT?>/img/img_14289.png">
		<h3 style="color: #fff">لم يعمل بعد </h3>

	</a>
	</div>
		<div class="employer text-center color4">
			<a style ="text-decoration: none;" href="<?php echo URLROOT?>">
			<img src="<?php echo URLROOT?>/img/img_415645.png">
					<h3 style="color: #fff">لم يعمل بعد </h3>

	</a>
		
	</div>
		<div class="employer text-center color5">
			<a style ="text-decoration: none;" href="<?php echo URLROOT?>PageTT/tt">
			<img src="<?php echo URLROOT?>/img/img_339445.png">
       <h3 style="color: #fff">قسم التطريز</h3>
		
		</a>
	</div>

</div>
</div>
  
 
<?php require APPROOT . '/views/inc/footer.php'; ?>
