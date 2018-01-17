<!-- login/signup form modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="active">
      <a href="#signup-form" aria-controls="signup-form" role="tab" data-toggle="tab">Sign up</a>
    </li>
    <li>
      <a href="#login-form" aria-controls="login-form" role="tab" data-toggle="tab">Log in</a>
    </li>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="signup-form">
      <!-- signup form -->
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

    <!-- login form -->
    <div role="tabpanel" class="tab-pane" id="login-form">

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

      </div>
    </div>
  </div>
</div>
 <!-- login/signup form modal ends -->

 <!-- Footer -->
<footer>
  <div class="row">
      <div class="col-lg-12">
        <p>Copyright &copy; GMATClock 2018</p>
      </div>
  </div>
</footer>
    
<!-- jQuery -->
<script src="<?=base_url()?>assets/bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Scripts -->
<script src="<?=base_url()?>assets/custom_js/gmatclock.js"></script>


</body>
</html>