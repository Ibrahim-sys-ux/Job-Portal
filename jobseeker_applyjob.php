<?php include 'jobseeker_header.php';
$seek_ids=$_SESSION['seek_id'];

extract($_GET);

if (isset($_GET['jid'])) {

	extract($_GET);
	
	 $jid=$jid;


	# code...
}
if (isset($_GET['pid'])) {

	extract($_GET);
	echo $jid=$jid;

	echo$i="insert into job_appilcation values(null,'$seek_ids','$pid','$jid','$target','pending')";
	$res=insert($i);
	# code...
}


?>



<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">APPLY FOR THE JOB</h1> 
<form method="post" enctype="multipart/form-data">
<table  align="center" class="table" style="width: 1000px">

	<tr>
		<th style="color:white">NAME</th>
		<th style="color:white">RESUME</th>

	</tr>
	<?php 
	$s="SELECT *,CONCAT(fname,' ',lname) AS fullname FROM jobseeker where seek_id='$seek_ids'";
	$res=select($s);
	extract($_GET);
	
	 $jid=$jid;
	 $tt=0;
	foreach ($res as $rows) {
	 	
	  ?>		

	<tr>
		<td align="center" style="color:white" ><?php echo $rows['fullname'] ?></td>
		<td><input type="hidden" name="pid<?php echo $tt ?>"  value="<?php echo $rows['seek_id']?>"><input type="file" name="image" required class="form-control"></td>
		<td><input type="submit" name="sub<?php echo $tt ?>"></td>
		<!-- <td><a class="btn btn-secondary"  href="?pid=<?php echo $rows['pro_id']?>&jid=<?php echo $jid?>">APPLY</a></td> -->

	</tr>
<?php

if (isset($_POST['sub'.$tt])) {
	extract($_POST);

	$dir = "image/";
	echo "string";
	$file = basename($_FILES['image']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	echo "lkdek";
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
	{
		echo $ss=$_POST['pid'.$tt];

	 $i="insert into job_application values(null,'$seek_ids','$ss','$jid','$target','pending',curdate()) ";
	$p=insert($i);
	// $a="insert into eventpackages values(null,'$cid','$tt','$am','$di','$target')";
	// insert($a);
	// alert("Applied sucessfully");
	// return redirect('jobseeker_viewappliedjob.php');
 }
 		else
		{
			echo "file uploading error occured";
		}

}


$tt=$tt+1;
} ?>
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




