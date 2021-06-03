<div id="popup2" class="lightbox-demo">

			<form action="<?php echo  base_url(); ?>Register_login" class="user-log-form" method="post">
				<h2>Register Form</h2>

                   <div class="form-group">
					<input type="fname" class="form-control element-block" name="fname" placeholder="First Name *">
				</div>

						<div class="form-group">
					<input type="lname" class="form-control element-block" name="lname" placeholder="Last Name *">
				</div>


				<div class="form-group">
					<input type="email" class="form-control element-block" name="email" placeholder="Email address *">
				</div>
				<div class="form-group">
					<input type="password" class="form-control element-block" name="pass" placeholder="Password *">
				</div>
                 
                 <div class="form-group">
					<input type="password" class="form-control element-block" name="cpass" placeholder="Confirm Password *">
				</div>

				

				<div class="btns-wrap">
					<div class="wrap">
						<button type="submit" class="btn btn-theme btn-warning fw-bold font-lato text-uppercase">Register</button>
					</div>
				</div>
			</form>
		</div>