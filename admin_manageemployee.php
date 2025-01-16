<?php include 'admin_header.php';
 
if (isset($_GET['aid'])) {
	extract($_GET);
	echo$u="update login set usertype='employee' where login_id='$aid'";
	update($u);
	alert("ACCEPTED SUCCESSFULLY");
	return redirect("admin_manageemployee.php");
}
if (isset($_GET['rid'])) {
	extract($_GET);
	echo$q="update login set usertype='rejected' where login_id='$rid'";
	update($q);
	alert("REJECTED SUCCESSFULLY");
	return redirect("admin_manageemployee.php");
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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">MANAGE EMPLOYEE</h1>

    <form method="post" style="background-color: transparent;">
       <table align="center" class="table" style="width: 800px">
       	<tr>
			<th class="text-white">EMPLOYEE NAME</th>
			<th class="text-white">PHONE</th>
			<th class="text-white">EMAIL</th>
			
		</tr>
		<?php 
		$s="select *, concat(fname,' ',lname) as fullname from employee inner join login using(login_id) where usertype!='rejected'" ;
		$res=select($s);
		foreach ($res as $rows) {

		?>
		<tr>
			<td class="text-white"><?php echo $rows['fullname'] ?></td>
			<td class="text-white"><?php echo $rows['phone'] ?></td>
			<td class="text-white"><?php echo $rows['email'] ?></td>
			

			<?php 
			if ($rows['usertype']=="pending") {
			  ?>

			  <td><a class="btn btn-success" href="?aid=<?php echo $rows['login_id']?>">ACCEPT</a></td>
			  <td><a class="btn btn-danger" href="?rid=<?php echo $rows['login_id']?>">REJECT</a></td>

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

<?php include 'footer.php' ?>