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
          <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="InputPassword">Password</label>
          <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
        </div>

        <div class="form-group">
          <label for="VerifyPassword">Confirm Password</label>
          <input type="password" name="passconf" class="form-control" id="VerifyPassword" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-success">Sign up</button>
        
      </form>
    </div>

    <!-- login form -->
    <div role="tabpanel" class="tab-pane" id="login-form">

      <form class="form-landing">

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
<script src="<?=base_url()?>assets/bootstrap/js/gmatclock.js"></script>

</body>
</html>