<?php include 'jobseeker_header.php';

$seek_ids=$_SESSION['seek_id'];

if (isset($_POST['ups'])) {
	extract($_POST);
	$i="insert into pro_update values(null,'$seek_ids','$skl','$lan')";
	$lid=insert($i);
	alert("Inserted successfully");
	// return redirect("employee_home.php");
	
}

if (isset($_GET['uid'])) {
	extract($_GET);

	$a="select * from jobseeker where seek_id='$seek_ids' ";
	$b=select($a);
		


	}
	if (isset($_POST['ups'])) {
	extract($_POST);
	$a="update jobseeker set fname='$fname', lname='$lname',address='$add', phone='$phn',email='$eml', qualification='$qua' where seek_id='$seek_ids' ";
	update($a);
	
	 alert("updated successfully");
    return redirect("jobseeker_updateprofile.php");
	
}
?>
 
  <!-- Carousel Start -->
<div class="container-fluid p-0">
<!--     <div class="owl-carousel header-carousel position-relative">
 -->        <div class="owl-carousel-item position-relative">
            <img class="" src="img/carousel-1.jpg" alt="" height="1000px"  >
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                           
    <form method="post" style="background-color: transparent;">
        <table align="center" class="table" style="width:500px" "height: 500px">

           <?php 
           if (isset($_GET['uid'])) {
            	extract($_GET);
            	 // print_r($b);

            ?>
            <br>
            <br>

            	<h1 class="display-3 text-white animated slideInDown mb-1" align="center">UPDATE PROFILE</h1>

            <tr>
				<th class="text-white">FIRST NAME</th>
				<td><input type="text" name="fname"  required class="form-control" value="<?php echo $b[0]['fname']?>"></td>
			</tr>
			<tr>
				<th class="text-white">LAST NAME</th>
				<td><input type="text" name="lname"  required class="form-control" value="<?php echo $b[0]['lname']?>"></td>
			</tr>
			<tr>
				<th class="text-white">ADDRESS</th>
				<td><input type="text" name="add"  required class="form-control" value="<?php echo $b[0]['address']?>"></td>
			</tr>
			<tr>
				<th class="text-white">PHONE</th>
				<td><input type="phone" name="phn"  pattern="[0-9]+" maxlength="10" minlength="10" required class="form-control" value="<?php echo $b[0]['phone']?>"></td>
			</tr>
			<tr>
				<th class="text-white">EMAIL</th>
				<td><input type="email" name="eml" pattern="[a-z,0-9,'@',.]+" required class="form-control" value="<?php echo $b[0]['email']?>"></td>
			</tr>
			<tr>
				<th class="text-white">QUALIFICATION</th>
				<td><input type="text" name="qua"  required class="form-control" value="<?php echo $b[0]['lname']?>"></td>
			</tr>
			<tr>
				<th class="text-white">TECHNICAL SKILLS</th>
				<td><input type="text" name="skl" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">LANGUAGE</th>
				<td><input type="text" name="lan" required class="form-control"></td>
			</tr>
				
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="ups" value="UPDATE" class="btn btn-success"></td>
			</tr>
		<?php } ?>
        </table>
    
    
<table  align="center" class="table" style="width: 1000px">
        <h1 class="display-3 text-white animated slideInDown mb-4" align="center">VIEW PROFILE</h1>

	<tr>
		<th class="text-white">NAME</th>
		<th class="text-white">ADDRESS</th>
		<th class="text-white">PHONE</th>
		<th class="text-white">EMAIL</th>
		<th class="text-white">QUALIFICATION</th>

	</tr>
	<?php 
	$s="SELECT *,CONCAT(fname,' ',lname) AS fullname FROM jobseeker where seek_id='$seek_ids'";
	$res=select($s);
	foreach ($res as $rows) {
	 	
	  ?>		

	<tr>
		<td align="center" class="text-white"><?php echo $rows['fullname'] ?></td>
		<td align="center" class="text-white"><?php echo $rows['address'] ?></td>
		<td align="center" class="text-white"><?php echo $rows['phone'] ?></td>
		<td align="center" class="text-white"><?php echo $rows['email'] ?></td>
		<td align="center" class="text-white"><?php echo $rows['qualification'] ?></td>

		<td><a class="btn btn-secondary" href="jobseeker_updateprofile.php?uid=<?php echo $rows['seek_id']?>">UPDATE</a></td>
		<td><a class="btn btn-secondary" href="jobseeker_viewskills.php?sid=<?php echo $rows['seek_id']?>">VIEW SKILLS</a></td>


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