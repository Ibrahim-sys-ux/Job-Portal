<?php include 'jobseeker_header.php';
	
extract($_GET);

if (isset($_GET['aid'])) {
	extract($_GET);
	echo$u="update interview set status='Accepted' where interview_id='$aid'";
	update($u);
	alert("Accepted successfully");
	return redirect("jobseeker_viewappliedjob.php");
}
if (isset($_GET['rid'])) {
	extract($_GET);
	echo$q="update interview set status='rejected' where interview_id='$rid'";
	update($q);
	alert("Rejected successfully");
	return redirect("jobseeker_viewappliedjob.php");
}
?>

 <!-- Carousel Start -->
<div class="container-fluid p-0">
<!--     <div class="owl-carousel header-carousel position-relative">
 -->        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">VIEW SCHEDULED INTERVIEW</h1>

<form method="post" style="background-color: transparent;">
        <table align="center" class="table" style="width: 800px">
           <tr>
				<th class="text-white">DATE</th>
				<th class="text-white">TIME</th>
				<th class="text-white">STATUS</th>
			</tr>
			<?php 
			$c="select * from interview where job_app_id='$apid'";
			$r=select($c);
			foreach ($r as $j) {
			
			 ?>
			 <tr>
			 	<td class="text-white"><?php echo $j['date']; ?></td>
			 	<td class="text-white"><?php echo $j['time']; ?></td>
			 	<td class="text-white"><?php echo $j['status']; ?></td>
			 	<?php 
			if ($j['status']=="pending") {
			  ?>

			  <td><a class="btn btn-success" href="?aid=<?php echo $j['interview_id']?>">ACCEPT</a></td>
			  <td><a class="btn btn-danger" href="?rid=<?php echo $j['interview_id']?>">REJECT</a></td>

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
