<?php include 'admin_header.php';
	
extract($_GET);
?>
	<?php 

	if (isset($_POST['sub'])) {
		extract($_POST);
		echo$p="update complaint set reply='$rep' where comp_id='$rid'";
		$r=update($p);
		alert ("Replied successfully");
		return redirect("admin_viewcomplaints.php");
	}


 ?>

<!-- Carousel Start -->
<div class="container-fluid p-0">
  <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">SEND REPLY</h1> 







    <form method="post" style="background-color: transparent;">
        <table align="center" class="table" style="width: 500px">
			<tr>
				<th class="text-white">SEND REPLY</th>
				<td><input type="text" name="rep" class="form-control"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="sub" value="SEND" class="btn btn-info"></td>
			</tr>
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

