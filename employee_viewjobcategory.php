<?php include 'employee_header.php' ?>
<!-- Carousel Start -->
<div class="container-fluid p-0">
<!--     <div class="owl-carousel header-carousel position-relative">
 -->        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">VIEW JOB CATEGORY</h1>
<form method="post">
		 	 <h1 align="center"></h1>
	<table  align="center"  style="width: 600px;height: 150px">
				<tr>
				<th class="text-white">JOB CATEGORY </th>
				</tr>
				<?php 
				$c="select * from job_category";
				$res=select($c);
				foreach ($res as $row) {
				 	
				  ?>
				  <tr>
				  	<td class="text-white"><?php echo $row['category_name'] ?> </td>
				  	<td><a class="btn btn-secondary" href="employee_managejobpost.php?cids=<?php echo $row['cat_id'];?>""> MANAGE JOB POST</a></td>

				  <?php } ?>

				 </tr>
				</table>
			</form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
<?php include 'footer.php' ?>



        
