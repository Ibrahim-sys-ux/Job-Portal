<?php include 'admin_header.php';
extract($_GET);
?>

<!-- Carousel Start -->
<div class="container-fluid p-0">
<!--     <div class="owl-carousel header-carousel position-relative">
 -->        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">VIEW JOB POST</h1> 

			<table class="table" style="width: 1200px">
				<tr>
				<th class="text-white">JOB CATEGORY</th>
				<th class="text-white">TITLE</th>
				<th class="text-white">DESCRIPTION</th>
				<th class="text-white">QUALIFICATION</th>
				<th class="text-white">END DATE</th>
				<th class="text-white">COMPANY NAME</th>
				</tr>
				<?php 
				$c="select * from job inner join job_category on job.category_id=job_category.cat_id where cat_id='$cid'";
				$res=select($c);
				foreach ($res as $row) {
				 	
				  ?>
				  <tr>
				  	<td class="text-white"><?php echo $row['category_name'] ?></td>

				  	<td class="text-white"><?php echo $row['title'] ?></td>
				  	<td class="text-white"><?php echo $row['description'] ?></td>
				  	<td class="text-white"><?php echo $row['qualification'] ?></td>
				  	<td class="text-white"><?php echo $row['end_date'] ?></td>
				  	<td class="text-white"><?php echo $row['company_name'] ?></td>
					<td> <a class="btn btn-info" href="admin_viewapplication.php?jid=<?php echo $row['job_id'];?>">VIEW APPLICATIONS</a>	</td>  

				  </tr>
				<?php } ?>

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