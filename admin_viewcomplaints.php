<?php include 'admin_header.php'?>

<!-- Carousel Start -->
<div class="container-fluid p-0">
<!--     <div class="owl-carousel header-carousel position-relative">
 -->        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">VIEW COMPLAINTS</h1> 


   <form method="post" style="background-color: transparent;">
        <table align="center" class="table" style="width: 800px">
           <tr>
				<th class="text-white">COMPLAINTS</th>
				<th class="text-white">JOBSEEKER</th>
				<th class="text-white">REPLY</th>
				<th class="text-white">DATE</th>
			</tr>
			<?php 
			$c="select *, concat(fname,' ',lname) as fullname from jobseeker  inner join complaint using (seek_id)";
			$r=select($c);
			foreach ($r as $j) {
			
			 ?>
			 <tr>
			 	<td class="text-white"><?php echo $j['complaint']; ?></td>
			 	<td class="text-white"><?php echo $j['fullname']; ?></td>
			 	<td class="text-white"><?php echo $j['reply']; ?></td>
			 	<td class="text-white"><?php echo $j['date']; ?></td>

			 	<?php 
			 	if ($j['reply']=="pending") {
			 	 	
			 	  ?>
			 	  <td><a class="btn btn-secondary" href="admin_replycomplaints.php?rid=<?php echo $j['comp_id'];?>">REPLY</a></td>
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


