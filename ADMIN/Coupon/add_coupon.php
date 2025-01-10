<?php
include '../../niru_collection.php';

$coupon_id=$_GET['id'];
$Dflag=$_GET['Dflag'];
if($Dflag!=""){
	
	$sql = "DELETE FROM coupon WHERE coupon_id='$coupon_id'";
	if($conn->query($sql)){
		//  unlink($filepath);
		?>
		<script>alert("Coupon Deleted Successfully");window.location.href="../Coupon/add_coupon.php"; </script>
		<?php
	}
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	$coupon_title=$_POST['coupon_title'];
	$coupon_code=$_POST['coupon_code'];
    $valid_to=$_POST['valid_to'];
	$coupon_type=$_POST['coupon_type'];
    $coupon_value=$_POST['coupon_value'];
	$coupon_for=$_POST['coupon_for'];
	$flag="1";
	$key_=generateRandomString(20);
	
	// $image=$_FILES['category_img']['name']; 
	// 		 $imageArr=explode('.',$image); //first index is file name and second index file type
	// 		 $rand=rand(100000,999999);
	// 		 $newImageName=$rand.'.'.$imageArr[1];
	// 		 $uploadPath="../uploads/category/".$newImageName;
	// 		 $isUploaded=move_uploaded_file($_FILES["category_img"]["tmp_name"],$uploadPath);
  
	if($url_id=="")
	{
		$sql="INSERT INTO coupon(coupon_title,coupon_code, valid_to,coupon_type,coupon_value,coupon_for) VALUES('$coupon_title','$coupon_code','$valid_to', '$coupon_type','$coupon_value', '$coupon_for')";
		
        if($conn->query($sql))
		{
		 
		  ?>		  
		 <script>alert("New Coupon Added"); window.location.href="../Coupon/add_coupon.php"; </script>
		  <?php
		}
	}else{
		$sql="UPDATE coupon set coupon_title='$coupon_title',coupon_code='$coupon_code',valid_to='$valid_to', coupon_type='$coupon_type',coupon_value='$coupon_value',coupon_for='$coupon_for',  where id='$url_id'";
		
       if($conn->query($sql))
        {
            ?>
			    <script> window.location.href="../Coupon/"; </script>
		    <?php
        }
	}										
			
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/main-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 08:27:56 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Waves Packaging - Admin Dashboard.">

    <title>Waves Packaging - Admin Dashboard.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

	<link href="../assets/cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="../assets/plugins/simplebar/simplebar.css" rel="stylesheet" />	

	<!-- Data Tables -->
	<link href='../assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='../assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="../assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="../assets/img/favicon.png" rel="shortcut icon" />
	<script src="../assets/js/sweetalert2@11"></script>

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- LEFT MAIN SIDEBAR -->
	   <!-- LEFT MAIN SIDEBAR -->
        <?php include '../navBar.php'?>

        <!--  PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->
            <?php include '../header.php'?>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
							<h1>Coupon</h1>
							<p class="breadcrumbs"><span><a href="../Dashboard">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Coupon</p>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-12">
							<div class="ec-cat-list card card-default mb-24px">
								<div class="card-body">
									<div class="ec-cat-form">
										<h4>Add Coupon</h4>

										<form  method="POST" class="form" enctype="multipart/form-data">
                                  
											<div class="form-group row">
												<label for="text" class="col-12 col-form-label">Name</label> 
												<div class="col-12">
													<input  name="coupon_title" id="coupon_title" value="<?=givedata($conn,"coupon","coupon_id",$url_id,"coupon_title");?>" class="form-control here slug-title" type="text" required >
												</div>
											</div>

											<div class="form-group row">
											<label for="text" class="col-12 col-form-label">Coupon Code</label> 
											<div class="col-12">
												<input id="coupon_code" name="coupon_code" class="form-control" type="text">
												
											</div>
										</div>

										<div class="form-group row">
										<label for="valid_to" class="col-12 col-form-label">Date</label> 
										<div class="col-12">
											<input id="valid_to" name="valid_to" class="form-control" type="date">
										</div>
									</div>


										<div class="form-group row">
											<label class="col-12 col-form-label">Coupon Type</label>
											<div class="col-12">
												<div class="form-check">
													<input type="radio" id="percent(%)" name="coupon_type" value="percent(%)" class="radio-button__input">
													<label for="percent" class="form-check-label">Percent(%)</label>
												</div>
												<div class="form-check">
													<input type="radio" id="pounds(£)" name="coupon_type" value="pounds(£)" class="radio-button__input">
													<label for="pounds" class="form-check-label">Pounds(£)</label>
												</div>
											</div>
										</div>

 
                                            <div class="form-group row">
												<label class="col-12 col-form-label">Coupon Value</label> 
												<div class="col-12">
													<textarea id="coupon_value" name="coupon_value" cols="40" rows="2" class="form-control"></textarea>
												</div>
											</div>

											<div class="form-group row">
                                                <label class="col-12 col-form-label">Coupon For</label>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input type="radio" id="wholesaler" name="coupon_for" value="wholesaler" class="radio-button__input">
                                                        <label for="wholesaler" class="form-check-label">Wholesaler</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" id="retailer" name="coupon_for" value="retailer" class="radio-button__input">
                                                        <label for="retailer" class="form-check-label">Retailer</label>
                                                    </div>
                                                </div>
                                            </div>
 
                                            <!-- <div class="form-group row">
												<label class="col-12 col-form-label">Image <span>( JPEG/PNG )</span></label>
												<div class="col-12">
													<input type="file" class="form-control" id="category_img" name="category_img" accept="image/png, image/jpeg" placeholder="" required>
												</div>
											</div> -->

											<div class="row">
												<div class="col-12">
													<button name="submit" type="submit" class="btn btn-primary">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-12">
							<div class="ec-cat-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>
													
													<th>Coupon Name</th>
													<th>Coupon Code</th>
													<th>Date</th>
													<th>Coupon Type</th>
													<th>Coupon Value</th>
                                                    <th>Coupon For</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
											<?php
										   $sql = "SELECT * FROM coupon";
										   $result = mysqli_query($conn, $sql);
										   
									   
											   while($row = mysqli_fetch_assoc($result)) {
												   $timepstamp=$row['timestamp'];
													$timepstamp=date_create("".$timepstamp);
			  								 ?>
												<tr>
													<!-- <td><img class="cat-thumb" src="<?=$row['filepath']?>" alt="Coupon Image" /></td> -->
													<td><?=$row['coupon_title']?></td>
													<td><?=$row['coupon_code']?></td>
													<td><?=$row['valid_to']?></td>
													<td><?=$row['coupon_type']?></td>
													<td><?=$row['coupon_value']?></td>
													<td><?=$row['coupon_for']?></td>
													<!-- <td>
														<span class="ec-sub-cat-list">
														<span class="ec-sub-cat-count" title="Total Coupon"></span>
														
														</span>
													</td> -->
													
													<td><?php
														if($row['flag']==1){
													?>
													ACTIVE</td>
														<?php
														}else{
															?>
													Deactive</td>
														<?php
														}?></td>
													
													<td>
														<div class="btn-group">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<!-- <a class="dropdown-item" href="?id=<?=$row['coupon_id']?>">Edit</a> -->
																<a class="dropdown-item" href="?id=<?=$row['coupon_id']?>&Dflag=1">Delete</a>
															</div>
														</div>
													</td>
												</tr>

												<?php
											   }
											   ?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			
			<footer class="footer mt-auto">
                <div class="copyright bg-white">
				<p>
                        Copyright &copy; <span id="ec-year"></span><a class="text-primary"
                            href="#" target="_blank"> Waves Packaging Dashboard</a>. All Rights Reserved.
                    </p>
                </div>
            </footer>


		</div>

	</div>

	
	<script src="../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/plugins/tags-input/bootstrap-tagsinput.js"></script>
	<script src="../assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="../assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="../assets/plugins/slick/slick.min.js"></script>

	
	<script src='../assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='../assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='../assets/plugins/data-tables/datatables.responsive.min.js'></script>


	<script src="../assets/plugins/options-sidebar/optionswitcher.js"></script>

	<script src="../assets/js/ekka.js"></script>
</body>

</html>