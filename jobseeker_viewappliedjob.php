<?php include 'jobseeker_header.php';
 $seek_ids=$_SESSION['seek_id'];
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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">VIEW APPLYED JOBS</h1> 


   <form method="post" style="background-color: transparent;">
        <table align="center" class="table" style="width: 800px">
           <tr>
				<th class="text-white">JOB CATEGORY</th>
				<th class="text-white">JOB TITLE</th>
				<th class="text-white">STATUS</th>
			</tr>
			<?php 
			$c="SELECT * FROM job INNER JOIN job_category ON job.category_id=job_category.cat_id INNER JOIN job_application USING(job_id) where seek_id='$seek_ids'";
			$r=select($c);
			foreach ($r as $j) {
			
			 ?>
			 <tr>
			 	
			 	<td class="text-white"><?php echo $j['category_name']; ?></td>
			 	<td class="text-white"><?php echo $j['title']; ?></td>

			 	<td class="text-white"><?php echo $j['status']; ?></td>
			 	<?php
			if ($j['status']=="Accepted") {
				?>
			  	<td><a class="btn btn-success" href="jobseeker_viewinterview.php?apid=<?php echo $j['job_app_id']?>">VIEW INTERVIEW</a></td>
			 	<?php } ?>

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

<?php include 'footer.php'  ?>


