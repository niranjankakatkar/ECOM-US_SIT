<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/order-history.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 08:28:05 GMT -->
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

	<!-- Data-Tables -->
	<link href='../assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='../assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>

	<!-- Ekka CSS -->
	<link id="ekka-css" rel="stylesheet" href="../assets/css/ekka.css" />

	<!-- FAVICON -->
	<link href="../assets/img/favicon.png" rel="shortcut icon" />
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
					<div class="breadcrumb-wrapper breadcrumb-wrapper-2">
						<h1>Orders History</h1>
						<p class="breadcrumbs"><span><a href="../Dashboard">Home</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>History
						</p>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>ID</th>
													<th>Customer</th>
													<th>Email</th>
													<th>Items</th>
													<th>Price</th>
													<th>Payment</th>
													<th>Status</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1050</td>
													<td>Johny Markue</td>
													<td>johny@example.com</td>
													<td>3</td>
													<td>£ 80</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1049</td>
													<td>Ktn Markue</td>
													<td>ktn@example.com</td>
													<td>10</td>
													<td>£ 280</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1048</td>
													<td>mehul Markue</td>
													<td>mehul@example.com</td>
													<td>5</td>
													<td>£ 100</td>
													<td>COD</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>1047</td>
													<td>Bhavesh Markue</td>
													<td>Bhavesh@example.com</td>
													<td>8</td>
													<td>£ 140</td>
													<td>PAID</td>
													<td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
													</td>
													<td>2021-10-30</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" href="#">Detail</a>
																<a class="dropdown-item" href="#">Track</a>
																<a class="dropdown-item" href="#">Cancel</a>
															</div>
														</div>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->


			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
                <p>
                        Copyright &copy; <span id="ec-year"></span><a class="text-primary"
                            href="#" target="_blank"> Waves Packaging Dashboard</a>. All Rights Reserved.
                    </p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->


	<!-- Common Javascript -->
	<script src="../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="../assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="../assets/plugins/slick/slick.min.js"></script>

	<!-- Data-Tables -->
	<script src='../assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='../assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='../assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="../assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="../assets/js/ekka.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v37/ekka-admin/order-history.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 08:28:05 GMT -->
</html>