<?php include 'jobseeker_header.php';
$seek_ids=$_SESSION['seek_id'];
extract($_GET);

if (isset($_GET['did'])) {
	extract($_GET);
	echo$d="delete from pro_update where pro_id='$did'";
	delete($d);
	alert("SKILLs REMOVED SUCCESSFULLY");
	return redirect("jobseeker_updateprofile.php");
}
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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">VIEW SKILLS</h1> 
			        <form method="post" action="">
			

			<table align="center" class="table" style="width: 500px">
				<tr>
					<th class="text-white">TECHNICAL SKILLS</th>
					<th class="text-white">LANGUAGE</th>
				</tr>
				<?php 
		        
		            $query = "select * from pro_update where seek_id='$sid'";
		            $res=select($query);
				foreach ($res as $row) {
				 	
				  ?>
				  <tr>
  				<td align="center" class="text-white"><?php echo $row['technical_skills'] ?></td>
				<td align="center" class="text-white"><?php echo $row['language'] ?></td>
				<td><a class="btn btn-danger" href="?did=<?php echo $row['pro_id'];?>">REMOVE</a></td>

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