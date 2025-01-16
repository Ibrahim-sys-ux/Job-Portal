<?php include 'employee_header.php'?>

<?php 
$emp_ids=$_SESSION['emp_id'];

if (isset($_POST['sub'])) {
	extract($_POST);
	$i="insert into companies values(null,'$emp_ids','$name','$address','$contact','$email')";
	$lid=insert($i);
	 alert("Inserted successfully");
	// return redirect("employee_home.php");
	
}

if (isset($_GET['uid'])) {
	extract($_GET);
	$s="select * from companies where comp_id='$uid'";
	$re=select($s);
	
}


if (isset($_POST['ups'])) {
	extract($_POST);
	$u="update companies set name='$name',address='$address',contact='$contact',email='$email' where comp_id='$uid'";
	update($u);
	alert("updated successfully");
	return redirect("employeemanageprofile.php");
	
}

if (isset($_GET['did'])) {
	extract($_GET);
	echo$d="delete from companies where comp_id='$did'";
	delete($d);
	alert("deleted sucessfully");
	return redirect("employeemanageprofile.php");
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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">MANAGE COMPANY PROFILE</h1>
           
 <form method="post" style="background-color: transparent;">
    	 <table align="center"  style="width: 500px;height: 150px">

		<?php 
		if (isset($_GET['uid'])) {
			extract($_GET);

		 
		  ?>

			<tr>
				<th class="text-white">COMPANY NAME</th>
				<td><input type="text" name="name"   value="<?php echo $re[0]['name']?>" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">ADDRESS</th>
				<td><textarea name="address" required class="form-control"><?php echo $re[0]['address']?></textarea></td>
			</tr>
			<tr>
				<th class="text-white">CONTACT</th>
				<td><input type="text" name="contact" pattern="[0-9]+" maxlength="10" minlength="10"   value="<?php echo $re[0]['contact']?>" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">EMAIL</th>
				<td><input type="text" name="email" pattern="[a-z,0-9,'@',.]+"   value="<?php echo $re[0]['email']?>" required class="form-control"></td>
			</tr>
			<tr>
			<td align="center"colspan="2"><input type="submit" name="ups" value="UPDATE" class="btn btn-success"></td>
			</tr>
	<?php } 
	else{
	?> 
			       
   
			<tr>
				<th class="text-white">COMPANY NAME</th>
				<td><input type="text" name="name" class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">ADDRESS</th>
				<td><textarea name="address" class="form-control"></textarea></td>
			</tr>
			<tr>
				<th class="text-white">CONTACT</th>
				<td><input type="text" name="contact"  pattern="[0-9]+" maxlength="10" minlength="10" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">EMAIL</th>
				<td><input type="text" name="email" pattern="[a-z,0-9,'@',.]+" required class="form-control"></td>
			</tr>
			<tr>
			<td align="center" colspan="2"><input type="submit" name="sub" value="SUBMIT" class="btn btn-success"></td>
			</tr>

		</table>
	</form>

	<?php } ?> 

		</table>
</form>

	
					<h1 align="center" class="text-white">VIEW COMPANY PROFILE</h1>

			<table align="center" class="table" style="width: 800px">
				<tr>
				<th class="text-white">COMPANY NAME</th>
				<th class="text-white">ADDRESS</th>
				<th class="text-white">CONTACT</th>
				<th class="text-white">EMAIL</th>
				</tr>
				<?php 
				 $c="select * from companies where emp_id='$emp_ids'";
				$res=select($c);
				foreach ($res as $row) {
				 	
				  ?>
				  <tr>
				  	<td class="text-white"><?php echo $row['name'] ?></td>
				  	<td class="text-white"><?php echo $row['address'] ?></td>
				  	<td class="text-white"><?php echo $row['contact'] ?></td>
				  	<td class="text-white"><?php echo $row['email'] ?></td>

				  	<?php 
				  	if ($row['comp_id']>0) {
				  	?>
				  	<td><a class="btn btn-success" href="?uid=<?php echo $row['comp_id'];?>">UPDATE</a></td>
				  	<td><a class="btn btn-danger"href="?did=<?php echo $row['comp_id'];?>">DELETE</a></td>
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