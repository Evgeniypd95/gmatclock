<section id="login">
	<div class="container">
		<div class="row">
			<form method="post" class="form-landing" accept-charset="utf-8" action="<?=base_url()?>frontend/signup">

		        <div class="form-group">
		          <label for="InputEmail">Email address</label>
		          <text class="valid-error"><?php echo form_error('email'); ?></text>
		          <input type="email" name="email" class="form-control" id="InputEmail" value="<?php echo set_value('email'); ?>" placeholder="Email">
		        </div>

		        <div class="form-group">
		          <label for="InputPassword">Password</label>
		          <text class="valid-error"><?php echo form_error('password'); ?></text>
		          <input type="password" name="password" class="form-control" id="InputPassword" value="<?php echo set_value('password'); ?>" placeholder="Password">
		        </div>

		        <div class="form-group"> 
		          <label for="VerifyPassword">Confirm Password</label>
		          <text class="valid-error"><?php echo form_error('passconf'); ?></text>
		          <input type="password" name="passconf" class="form-control" id="VerifyPassword" value="<?php echo set_value('passconf'); ?>" placeholder="Password">
		        </div>

		        <button type="submit" class="btn btn-success">Sign up</button>
        
      		</form>
		</div>
	</div>
</section> 