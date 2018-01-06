<!-- login/signup form modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Sign up</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Log in</a></li>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <form style="margin-top: 10px;">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-success">Sign up</button>
      </form>
    </div>

    <div role="tabpanel" class="tab-pane" id="profile">
      <form style="margin-top: 10px;">
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
<script src="assets/bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Scripts -->
<script src="assets/bootstrap/js/gmatclock.js"></script>

</body>
</html>