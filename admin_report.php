<?php include 'admin_header.php' ?>


 <!-- Carousel Start -->
<div class="container-fluid p-0">
<div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4" align="center">JOB APPLICATION REPORT</h1>




    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .report-container {
            max-width: 700px;
            max-height:500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: auto;
        }
        .report-header {
            text-align: center;
            padding: 30px 0;
        }
        .report-header h1 {
            font-size: 60px;
            margin-bottom: 10px;
        }
        .report-header h2 {
            font-size: 24px;
            color: #555;
        }
        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .report-table th, .report-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .report-table th {
            background-color: #f8f9fa;
        }
        .report-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .report-footer {
            text-align: center;
            margin-top: 20px;
        }
        .date-filter-form {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>

</head>
<body >


<form method="post" >

		<div id="div_print" class="report-container">
    <div class="report-header">
        
        <br>
        <br>

    </div>
    <table align="center" class="table" style="width: 600px;">
    <tr>
            <th>SEARCH BASED ON DATE</th>
            <td><input type="date" name="date" class="form-control"></td>
            <td><input type="submit" name="srh" value="SEARCH" class="btn btn-info"></td>
        </tr>
    </table>



	
<table  class="table" style="width: 500px">
			<tr>
				<th>JOBSEEKER NAME</th>
                <th>JOB TITLE</th>
                <th>QUALIFICATION</th>
                <th>STATUS</th>
                <th>DATE</th>
			</tr>
			<?php 

				if (isset($_POST['srh'])) {
                     $date = $_POST['date'];
					 $p="SELECT *,concat(fname,' ',lname) as fullname FROM jobseeker INNER JOIN job_application USING (seek_id) INNER JOIN job USING(job_id)  WHERE DATE LIKE '$date%'";
                     $res=select($p);
                 }
                 else
                {
                    $p= "SELECT *,concat(fname,' ',lname) as fullname FROM jobseeker INNER JOIN job_application USING (seek_id) INNER JOIN job USING(job_id)";

                                     $res=select($p);

                    
                }
                foreach ($res as $rows) {
                ?>
                <tr>
                <td><?php echo $rows['fullname'] ?></td>
                <td><?php echo $rows['title'] ?></td>
                <td><?php echo $rows['qualification'] ?></td>
                <td><?php echo $rows['status'] ?></td>
                <td><?php echo $rows['date'] ?></td>
                </tr>
            <?php } ?>

    </table>
    
</form>

 <div class="report-footer">
       
    </div>
</div>

</body>
</html>

    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<?php include 'footer.php' ?>

				