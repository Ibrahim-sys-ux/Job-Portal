<?php include 'employee_header.php'?>

<?php 
$emp_ids=$_SESSION['emp_id'];
extract($_GET);

if (isset($_POST['sub'])) {
	extract($_POST);
	$i="insert into job values(null,'$cids','$emp_ids','$title','$des','$qua','$edate','$cname')";
	$lid=insert($i);
	alert("Inserted successfully");
	// return redirect("employee_home.php");
	
}

if (isset($_GET['uid'])) {
	extract($_GET);
	$s="select * from job where job_id='$uid'";
	$re=select($s);
	
}


if (isset($_POST['ups'])) {
	extract($_POST);
	$u="update job set title='$title',description='$des',qualification='$qua',end_date='$edate',company_name='$cname' where job_id='$uid'";
	update($u);
	alert("updated successfully");
	return redirect("employee_managejobpost.php");
	
}

if (isset($_GET['did'])) {
	extract($_GET);
	echo$d="delete from job where job_id='$did'";
	delete($d);
	alert("deleted sucessfully");
	return redirect("employee_managejobpost.php");
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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">MANAGE JOB POST</h1>          
 <form method="post" style="background-color: transparent;">
    	 <table align="center"  style="width: 500px;height: 150px">

		<?php 
		if (isset($_GET['uid'])) {
			extract($_GET);

		 
		  ?>

			<tr>
				<th class="text-white">TITLE</th>
				<td><input type="text" name="title"   value="<?php echo $re[0]['title']?>" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">DESCRIPTION</th>
				<td><textarea name="des" required class="form-control"><?php echo $re[0]['description']?></textarea></td>
			</tr>
			<tr>
				<th class="text-white">QUALIFICATION</th>
				<td><input type="text" name="qua" value="<?php echo $re[0]['qualification']?>" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">END DATE</th>
				<td><input type="date" name="edate"  value="<?php echo $re[0]['end_date']?>" required class="form-control"></td>
			</tr>
			<tr>
			<th class="text-white">COMPANY NAME</th>
			<td><select name="cname" required class="form-control">
			<?php 
			$s="select * from companies where emp_id='$emp_ids'";
			$res=select($s);
			foreach ($res as $row) {
			?>
			<option value="<?php echo $row['name']?>"><?php echo $row['name']?></option> 

			
			<?php } ?>
			</select></td>
		</tr>	
		<tr>
			<td align="center"colspan="2"><input type="submit" name="ups" value="UPDATE" class="btn btn-success"></td>
			</tr>
	<?php } 
	else{
	?> 
			       
   
			<tr>
				<th class="text-white">TITLE</th>
				<td><input type="text" name="title" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">DESCRIPTION</th>
				<td><textarea name="des" required class="form-control"></textarea></td>
			</tr>
			<tr>
				<th class="text-white">QUALIFICATION</th>
				<td><input type="text" name="qua" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">END DATE</th>
				<td><input type="date" name="edate"  required class="form-control"></td>
			</tr>
			<tr>
			<th class="text-white">COMPANY NAME</th>
			<td><select name="cname" required class="form-control">
			<?php 
			$s="select * from companies where emp_id='$emp_ids'";
			$res=select($s);
			foreach ($res as $row) {
			?>
			<option selected disabled hidden>select</option>
            <option class="form-control" value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?> </option>
			<?php } ?>
			</select></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="sub" value="SUBMIT" class="btn btn-success"></td>
			</tr>

		</table>
	</form>

	<?php } ?> 

		</table>
</form>

	
					<h1 align="center" class="text-white">VIEW JOB POST</h1>

			<table align="center" class="table" style="width: 1200px">
				<tr>
				<th class="text-white">TITLE</th>
				<th class="text-white">DESCRIPTION</th>
				<th class="text-white">QUALIFICATION</th>
				<th class="text-white">END DATE</th>
				<th class="text-white">COMPANY NAME</th>
				</tr>
				<?php 
				$c="select * from job inner join job_category on job.category_id=job_category.cat_id where emp_id='$emp_ids' ";
				$res=select($c);
				foreach ($res as $row) {
				 	
				  ?>
				  <tr>
				  	<td class="text-white"><?php echo $row['title'] ?></td>
				  	<td class="text-white"><?php echo $row['description'] ?></td>
				  	<td class="text-white"><?php echo $row['qualification'] ?></td>
				  	<td class="text-white"><?php echo $row['end_date'] ?></td>
				  	<td class="text-white"><?php echo $row['company_name'] ?></td>

				  	<?php 
				  	if ($row['job_id']>0) {
				  	?>
				  	<td><a class="btn btn-success" href="?uid=<?php echo $row['job_id'];?>">UPDATE</a></td>
				  	<td><a class="btn btn-danger"href="?did=<?php echo $row['job_id'];?>">DELETE</a></td>
					<td> <a class="btn btn-info" href="employee_viewapplication.php?jid=<?php echo $row['job_id'];?>">VIEW APPLICATIONS</a>	</td>  

				  <?php  } ?>
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