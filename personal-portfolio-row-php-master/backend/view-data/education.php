
<?php 
	include_once '../inc/header.php';

    $education_select = "SELECT * FROM education WHERE status = 1";
    $education_sq = mysqli_query($db, $education_select);
 ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-title">Education</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="../deshbord/deshbord.php">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Education</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Education List's</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-nowrap mb-0">
								<thead>
									<tr>
										<th>LS</th>
										<th>Year</th>
										<th>Title</th>
										<th>Progress</th>
										<th>Status</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									
                            	<?php foreach ($education_sq as $key => $education): ?>
									<tr>
										<td><?php echo $key + 1 ?></td>
										<td><?php echo $education["year"] ?></td>
										<td><?php echo $education["title"] ?></td>
										<td><?php echo $education["progress_bar"] ?></td>
										<td><?php if ($education["status"] == "1") {echo "Active";}else{echo "Inactive";} ?></td>
										<td>
											<a href="../edit/edit-education.php?id=<?php echo $education["id"]?>">
												<i class="far fa-edit"></i>
											</a>
										</td>
									</tr>
                            	<?php endforeach ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- /Page Wrapper -->



<?php 
	include_once '../inc/footer.php';
 ?>







