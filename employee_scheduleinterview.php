<?php include 'employee_header.php'?>

<?php 
$emp_ids=$_SESSION['emp_id'];
extract($_GET);

if (isset($_POST['sub'])) {
	extract($_POST);
	$i="insert into interview values(null,'$apid','$date','$time','pending')";
	$lid=insert($i);
	alert("Inserted successfully");
	// return redirect("employee_home.php");
	
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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">SCHEDULE INTERVIEW</h1>          
 <form method="post" style="background-color: transparent;">
    	 <table align="center"  style="width: 500px;height: 150px">
    	 	<tr>
				<th class="text-white">DATE</th>
				<td><input type="date" name="date" required class="form-control"></td>
			</tr>
			
			<tr>
				<th class="text-white">TIME</th>
				<td><input type="time" name="time" required class="form-control"></td>
			</tr>
			
			<tr>
			<td align="center" colspan="2"><input type="submit" name="sub" value="SCHEDULE" class="btn btn-success"></td>
			</tr>

		</table>
	</form>
		</table>
</form>

   <form method="post" style="background-color: transparent;">
   	<h1 class="text-white">VIEW SCHEDULED INTERVIEW</h1>
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


