    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-color: green;">
                	<div class="container">
                		<div class="row" style="margin-top: 20px;">
                			<div class="col-md-6">
                				<h1 style="color: white;">Track your GMAT progress with counting time.</h1>
                				<h3 style="color: white;">Sign up now to track your progress towards you goal.</h3>
                				<div class="text-center">
                				<a href="" class="btn btn-primary" style="font-size: 20px;">Sign up</a>
                				</div>
                			</div>
                			<div class="col-md-4">
				<div class="panel">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<div>See how much more hours do you need to study</div>
							</div>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form class="form-horizontal">
  <div class="form-group">
    <label for="inputCurrent" class="col-sm-6 control-label">Your current score</label>
    <div class="col-sm-6">
      <input type="number" id="current" class="form-control" id="inputCurrent" placeholder="500">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDesired" class="col-sm-6 control-label">Score you want to get</label>
    <div class="col-sm-6">
      <input type="number" id="desired" class="form-control" id="inputDesired" placeholder="600">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <a class="btn btn-default" onclick="calcScore()">Calculate</a>
      <p id="demo"></p>
    </div>
  </div>
</form>
							</div>
						</div>
					</div>
				</div>
			</div>


			<script type="text/javascript">
				function calcScore() {
				var x, y, z, t;
				
				x = +document.getElementById('current').value;
				if (x<400) {
					t = 75;
				} else if (x>=400 & x<500) {
					t = 87;
				} else if (x>=500 & x<600) {
					t = 98;
				} else if (x>=600 & x<700) {
					t = 107;
				} else if (x>=700 & x<800) {
					t = 121;
				}
				
				y = +document.getElementById('desired').value;
				z = x + y;
				document.getElementById("demo").innerHTML = t;
				}
			</script>
                		</div>
                	</div>

                </div>
                
            </div>
        </div>

    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">How does it help you?</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Know how long you need to study</h4>
                        <p>It helps you to estimate how many hours you need to study every week and every day to achieve your goal based on statistics published by GMAT Test.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Track your progress</h4>
                        <p>Input how many hours you've studied today to see your progress and how close you are to your goal.</p>
                    </div>
                </div>
            </div>
           	<div class="col-md-4 col-sm-6">
                <div class="text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Keep yourself accountable</h4>
                        <p>See how many hours you still need to study today or this week.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Watch how it works</h2>
            </div>
           
        </div>
        <!-- /.row -->

        

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Sign Up</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>