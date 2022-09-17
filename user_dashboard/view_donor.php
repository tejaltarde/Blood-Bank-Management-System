<?php
	include('user_header.php');
?>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix bg-info ">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
									<?php 
										$info = $connection->query("SELECT * FROM donor WHERE donor_id='".$_GET['donor_id']."'");
										$fetch = $info->fetch_array(); ?>
									
										<img src="../upload/user1.jpg" class="img-circle" alt="Avatar" width="100px" height="100px">
										<h3 class="name"><?php echo $fetch['name'];?> </h3>
										<span class="online-status status-available">Available</span>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Birthdate <span><?php echo $fetch['dob']?></span></li>
											<li>Mobile <span><?php echo $fetch['pincode']?></span></li>
											<li>Email <span><?php echo $fetch['email']?></span></li>
											<li>Gender <span><?php echo $fetch['gender']?></span></li>
										</ul>
									</div>
									
									<div class="profile-info">
										<h4 class="heading">Address</h4>
										<p><span><?php echo $fetch['phone'],  $fetch['state'] ?></span></p>
									</div>
									
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">

								<h4 class="heading"><?php echo $fetch['name'];?>'s Info</h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="fa fa-phone"></span>
												</div>
												<span><?php echo $fetch['pincode']?></span>
											</div>
										</div>
										<style>
											.fa-phone{
												font-size: 50px;
												/* color:blue; */
											}
										</style>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="fa fa-map-pin"></span>
												</div>
												<span><?php echo $fetch['phone']?></span>
											</div>
										</div>
										<style>
											.fa-map-pin{
												font-size: 50px;
												/* color:blue; */
											}
										</style>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="fa fa-envelope"></span>
												</div>
												<span><?php echo $fetch['email']?></span>
											</div>
										</div>
										<style>
											.fa-envelope{
												font-size: 50px;
												/* color:blue; */
											}
										</style>
										<!-- <div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-heart award-icon"></span>
												</div>
												<span>Most Loved</span>
											</div>
										</div> -->
									</div>
									<!-- <div class="text-center"><a href="#" class="btn btn-default">See all awards</a></div> -->
								</div>
								<?php ?>
								<!-- END AWARDS -->
								<!-- TABBED CONTENT -->
								<div class="awards">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="fa fa-whatsapp"></span>
												</div>
												<span>What's App</span>
											</div>
										</div>
										<style>
											.fa-whatsapp{
												font-size: 50px;
												/* color:blue; */
											}
										</style>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="fa fa-instagram"></span>
												</div>
												<span>Instagram</span>
											</div>
										</div>
										<style>
											.fa-instagram{
												font-size: 50px;
												/* color:blue; */
											}
										</style>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="fa fa-twitter"></span>
												</div>
												<span>Twitter</span>
											</div>
										</div>
										<style>
											.fa-twitter{
												font-size: 50px;
												/* color:blue; */
											}
										</style>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="fa fa-facebook"></span>
												</div>
												<span>Facebook</span>
											</div>
										</div>
										<style>
											.fa-facebook{
												font-size: 50px;
												/* color:blue; */
											}
										</style>
									</div>
									<!-- <div class="text-center"><a href="#" class="btn btn-default">See all awards</a></div> -->
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

<?php
	include('user_footer.php');
?>