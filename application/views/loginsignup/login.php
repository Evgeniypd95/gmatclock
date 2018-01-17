<section id="login">
	<div class="container">
		<div class="row">
			
				<form method="post" class="form-landing" accept-charset="utf-8" action="<?=base_url()?>frontend/login">
			        <div class="form-group">
			          <label for="loginEmail">Email address</label>
			          <text class="valid-error"><?php echo form_error('login_email'); ?></text>
			          <input type="email" name="login_email" class="form-control" id="LoginEmail" value="<?php echo set_value('login_email'); ?>" placeholder="Email">
			        </div>

			        <div class="form-group">
			          <label for="loginPassword">Password</label>
			          <text class="valid-error"><?php echo form_error('login_password'); ?></text>
			          <input type="password" name="login_password" class="form-control" id="LoginPassword" value="<?php echo set_value('login_password'); ?>" placeholder="Password">
			        </div>

        			<button type="submit" class="btn btn-success">Log in</button>
      			</form>
			
		</div>
	</div>
</section> 