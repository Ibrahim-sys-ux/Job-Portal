<?php include 'public_header.php';
if (isset($_POST['sub'])) {
 extract($_POST);
 $q="select * from login where username='$uname' and password='$pass' ";
 $res=select($q);

 if(sizeof($res)>0) {
     $_SESSION['lid']=$res[0]['login_id'];
     $lids=$_SESSION['lid'];

     if ($res[0]['usertype']=="admin") {

         alert("login successfully");
         return redirect("admin_home.php");
         }
         
    if ($res[0]['usertype']=="jobseeker") {
        $s="select * from jobseeker where login_id='$lids'";
      $r=select($s);
   if (sizeof($r)>0) {
       $_SESSION['seek_id']=$r[0]['seek_id'];
       $seek_ids=$_SESSION['seek_id'];

   alert("login successfully");
   return redirect("jobseeker_home.php");
   }
}
     if ($res[0]['usertype']=="employee") {
         $s="select * from employee where login_id='$lids'";
         $r=select($s);
         if (sizeof($r)>0) {
             $_SESSION['emp_id']=$r[0]['emp_id'];
             $emp_ids=$_SESSION['emp_id'];

         alert("login successfully");
         return redirect("employee_home.php");
         # code...
     }
     }
     if ($res[0]['usertype']=="pending"){
        alert("Wait For Admin To Accept");
        return redirect("login.php");
     }
 else
 {
  alert("INVALID USERNMAE OR PASSWORD");
 }
}
}
 ?>
 
  <!-- Carousel Start -->
<div class="container-fluid p-0">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">LOGIN</h1>
                            <form method="post">
                                <table align="center" class="table" style="width: 500px">
                                    <tr>
                                        <th class="text-white">USERNAME</th>
                                        <td><input type="text" name="uname" required class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <th class="text-white">PASSWORD</th>
                                        <td><input type="password" name="pass" required class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><input type="submit" name="sub" value="LOGIN" class="btn btn-success"></td>
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









