<?php include 'admin_header.php' ;

if (isset($_POST['sub'])) {
	extract($_POST);
	$i="insert into job_category values(null,'$cname') ";
	insert($i);
	
}

if (isset($_GET['uid'])) {
	extract($_GET);
	$s="select * from job_category where cat_id='$uid' ";
	$re=select($s);
	
}


if (isset($_POST['ups'])) {
	extract($_POST);
	$u="update job_category set category_name='$cname' where cat_id='$uid'";
	update($u);
	alert("updated successfully");
	return redirect("admin_addjobcategory.php");
	
}

if (isset($_GET['did'])) {
	extract($_GET);
	echo$d="delete from job_category where cat_id='$did'";
	delete($d);
	alert("deleted sucessfully");
	return redirect("admin_addjobcategory.php");
}




?>

 <!-- Carousel Start -->
<div class="container-fluid p-0">
    <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">ADD JOB CATEGORY</h1>
           
    <form method="post" style="background-color: transparent;">
        <body>
	<form method="post">
		<?php 
		if (isset($_GET['uid'])) {
			extract($_GET);

		 
		  ?>

		<table align="center"  style="width: 500px;height: 150px">
			<tr>
				<th class="text-white">CATEGORY NAME</th>
				<td><input type="text" name="cname"   value="<?php echo $re[0]['category_name']?>" required class="form-control"></td>
			</tr>
			<tr>
			<td align="center"colspan="2"><input type="submit" name="ups" value="UPDATE" class="btn btn-success"></td>
			</tr>
		</table>
	<?php } 
	else{
	?>
		<table align="center"  style="width: 500px;height: 150px">
			<tr>
				<th class="text-white">CATEGORY NAME</th>
				<td><input type="text" name="cname"  required class="form-control"></td>
			</tr>
			<tr>
			<td align="center" colspan="2"><input type="submit" name="sub" value="SUBMIT" class="btn btn-success"></td>
			</tr>
			<br>

		</table>
	<?php } ?>

	
	<body>
					<h1 align="center" class="text-white">VIEW JOB CATEGORY</h1>

			<table align="center" class="table" style="width: 800px">
				<tr>
				<th class="text-white">CATEGORY NAME</th>
				</tr>
				<?php 
				$c="select * from job_category";
				$res=select($c);
				foreach ($res as $row) {
				 	
				  ?>
				  <tr>
				  	<td class="text-white"><?php echo $row['category_name'] ?></td>

				  	<?php 
				  	if ($row['cat_id']>0) {
				  	?>
				  	<td><a class="btn btn-success" href="?uid=<?php echo $row['cat_id'];?>">UPDATE</a></td>
				  	<td><a class="btn btn-danger"href="?did=<?php echo $row['cat_id'];?>">DELETE</a></td><?php  } ?>
					<td> <a class="btn btn-info" href="admin_viewjobs.php?cid=<?php echo $row['cat_id'];?>">VIEW JOBS</a></td>
  

				<?php } ?>
					  </tr>               

			</table>
			<br>

		</form>
	
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



	
	
