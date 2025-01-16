<?php include 'jobseeker_header.php'?>

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
			        <form method="post" action="">
			<table align="center" class="table" style="width: 600px;">
			    <tr>
			        <th class="text-white">SEARCH  BASED ON JOB TITLE</th>
			        <td><input type="text" name="title" class="form-control"></td>
			        <td><input type="submit" name="srh" value="SEARCH" class="btn btn-info"></td>
			    </tr>
			</table>

			<table align="center" class="table" style="width: 1000px">
				<tr>
				<th class="text-white">JOB CATEGORY</th>
				<th class="text-white">JOB TITLE</th>
				<th class="text-white">DESCRIPTION</th>
				<th class="text-white">QUALIFICATION</th>
				<th class="text-white">END DATE</th>
				<th class="text-white">COMPANY NAME</th>
				</tr>
						 <?php 
		        if (isset($_POST['srh'])) {
		            $title = $_POST['title'];
		            $query = "select * from job inner join job_category on job.category_id=job_category.cat_id WHERE title LIKE '%$title%'";
		        } else {
		            $query = "select * from job inner join job_category on job.category_id=job_category.cat_id";
		        }
		        $res = select($query);
				foreach ($res as $row) {
				 	
				  ?>
				  <tr>
				  	<td class="text-white"><?php echo $row['category_name'] ?></td>

				  	<td class="text-white"><?php echo $row['title'] ?></td>
				  	<td class="text-white"><?php echo $row['description'] ?></td>
				  	<td class="text-white"><?php echo $row['qualification'] ?></td>
				  	<td class="text-white"><?php echo $row['end_date'] ?></td>
				  	<td class="text-white"><?php echo $row['company_name'] ?></td>
		  			<td><a class="btn btn-secondary" href="jobseeker_applyjob.php?jid=<?php echo $row['job_id']?>">APPLY</a></td>

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