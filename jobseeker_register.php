<?php include 'public_header.php';
if (isset($_POST['sub'])) {
	extract($_POST);
    if($pass==$cpass){
	$q="insert into login values(null,'$uname','$pass','jobseeker')";
	$lid=insert($q);
	$p="insert into jobseeker values(null,'$lid','$fname','$lname','$add','$Phone','$email','$qua')";
	$uid=insert($p);
	
	alert("REGISTERED SUCCESSFULLY");
	return redirect("login.php");


	}
	else{
		alert("password incorrect");
	}}
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
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">JOBSEEKER REGISTERATION</h1>
    <form method="post" style="background-color: transparent;" name="registrationForm" onsubmit="return validateForm()">
        <table align="center" class="table" style="width:500px">
           
           <tr>
				<th class="text-white">FIRST NAME</th>
				<td><input type="text" name="fname" pattern="[a-z,A-Z]+"  required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">LAST NAME</th>
				<td><input type="text" name="lname" pattern="[a-z,A-Z]+"  required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">ADDRESS</th>
				<td><textarea name="add" required class="form-control"></textarea></td>
			</tr>
			
			<tr>
				<th class="text-white">PHONE</th>
				<td><input type="phone" name="Phone"   maxlength="10" minlength="10" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">EMAIL</th>
				<td><input type="Email" name="email" value="@gmail.com" pattern=".+@gmail\.com" placeholder="Enter your email" class="form-control"></td>

			</tr>
			<tr>
				<th class="text-white">QUALIFICATION</th>
				<td><input type="text" name="qua"   required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">USERNAME</th>
				<td><input type="text" name="uname" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white">PASSWORD</th>
				<td><input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required class="form-control"></td>
			</tr>
			<tr>
				<th class="text-white"> CONFORM PASSWORD</th>
				<td><input type="password" name="cpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required class="form-control"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="sub" value="REGISTER" class="btn btn-success"></td>
			</tr>
        </table>
    
    </form>
<script>
				  function validateForm() {
				    const phone = document.forms["registrationForm"]["Phone"].value;
				    const email = document.forms["registrationForm"]["email"].value;
				    const password = document.forms["registrationForm"]["password"].value;

				    const phonePattern = /^[0-9]{10}$/;
				    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/;

				    // Validate phone number
				    if (!phonePattern.test(phone)) {
				      alert("Please enter a valid 10-digit phone number.");
				      return false;
				    }

				    // Validate email format
				    if (!emailPattern.test(email)) {
				      alert("Please enter a valid email address.");
				      return false;
				    }

				    // Validate password length (at least 6 characters)
				    if (password.length < 6) {
				      alert("Password must be at least 6 characters long.");
				      return false;
				    }

				    return true;
				  }
				</script>
                             </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
     

    <?php include 'footer.php'  ?>
