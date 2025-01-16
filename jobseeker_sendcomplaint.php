<?php include 'jobseeker_header.php';


$seek_ids=$_SESSION['seek_id'];



if (isset($_POST['sub'])) {
	extract($_POST);

    echo $c="insert into complaint values(null,'$seek_ids','$com','pending',NOW())";
	$re=insert($c);
	alert("complaint send successfully");
	 return redirect("jobseeker_sendcomplaint.php");
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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">SEND COMPLAINTS</h1> 


<body>
    <form method="post" style="background-color: transparent;">
    <table  align="center" class="table" style="width: 500px">

		<tr>
			<th class="text-white">COMPLAINTS</th>
			<td><input type="text" name="com" class="form-control"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="sub" value="SUBMIT" class="btn btn-info"></td>
		</tr>
	</table>

	<table align="center" class="table" style="width: 500px">
		<h1 align="center" class="text-white">VIEW REPLY</h1>
		<tr>
			<th class="text-white">COMPLAINT</th>
			<th class="text-white">REPLY</th>
			<th class="text-white">DATE </th>
		</tr>
		<?php 
		$s="select * from complaint where seek_id='$seek_ids'";
		$res=select($s);
		foreach ($res as $rows) {
		 	
		?>

		<tr>
			<td class="text-white"><?php echo $rows['complaint']; ?></td> 
			<td class="text-white"><?php echo $rows['reply']; ?></td> 
			<td class="text-white"><?php echo $rows['date']; ?></td> 

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