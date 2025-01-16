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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">VIEW APPLICATION</h1> 


   <form method="post" style="background-color: transparent;">
        <table align="center" class="table" style="width: 800px">
           <tr>
				<th class="text-white">JOBSEEKER NAME</th>
				<th class="text-white">TECHNICAL SKILLS</th>
				<th class="text-white">JOB TITLE</th>
				<th class="text-white">RESUME</th>
				<th class="text-white">STATUS</th>
			</tr>
			<?php 
			$c="SELECT *, CONCAT(fname,' ',lname)AS fullname FROM jobseeker INNER JOIN pro_update USING (seek_id)INNER JOIN job_application USING(pro_id) INNER JOIN job USING (job_id) where job_id='$jid'";
			$r=select($c);
			foreach ($r as $j) {
			
			 ?>
			 <tr>
			 	
			 	<td class="text-white"><?php echo $j['fullname']; ?></td>
			 	<td class="text-white"><?php echo $j['technical_skills']; ?></td>
			 	<td class="text-white"><?php echo $j['title']; ?></td>
                <td class="text-white"><a href="<?php echo $j['resume'] ?>" download>
<img  width=100px src="<?php echo $j['resume'] ?>" alt="resume"></a> <br>click image to download</td>

			 	<td class="text-white"><?php echo $j['status']; ?></td>

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


