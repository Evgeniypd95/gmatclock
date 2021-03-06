<section id="login">
	<div class="container">
		<div class="row">
			<form method="post" class="form-loginsignup" accept-charset="utf-8" action="<?=base_url()?>signup">

				<div class="form-group">
		        	<label for="InputScore">Desired Score</label>
		        	<text class="valid-error"><?php echo form_error('score'); ?></text>
		        	<input type="text" min="201" max="800" name="score" class="form-control" id="InputScore" value="<?php echo set_value('score'); ?>" placeholder="680">
		        </div>
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