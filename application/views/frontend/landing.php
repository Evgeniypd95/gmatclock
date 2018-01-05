    <!-- Header-->
<header id="cta1">
    <div>
        <div class="container">
            <div class="row">
                <!-- left column of header -->
                <div class="col-md-6">
                	<h1>Track your GMAT progress with counting time.</h1>
                	<h3>Sign up now to track your progress towards you goal.</h3>
                	   <div class="text-center">
                	       <a href="" class="btn btn-primary">Sign up</a>
                        </div>
                </div>
                <!-- left column of header ends-->

                <!-- right column of header -->
                <div class="col-md-4">
				    <div class="panel">
					    <div class="panel-heading">
						    <div class="row">
							    <div class="col-xs-12 text-center">
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
                                        </div>
                                    </div>
                    <div class="col-sm-12 text-center" id="demo"></div>
                                </form>
							</div>
						</div>
					</div>
				    </div>
			    </div>
                <!-- right column of header ends-->
            </div>
        </div>
    </div>
    <script type="text/javascript">
				function calcScore() {
				var x, y, z, h, o;
				
				x = +document.getElementById('current').value;
				y = +document.getElementById('desired').value;

                z = y-x;

                if (x>=200 & x<300) {
                    h=75;
                    o = z*(h/100);
                } else if (x>=300 & x<450) {
                    h=6;
                    o = z*(h/100);
                } else if (x>=450 & x<550) {
                    h=5.5;
                    o = z*(h/50);
                } else if (x>=550 & x<650) {
                    h=4.5;
                    o = z*(h/50);
                } else if (x>=650 & x<750) {
                    h=7;
                    o = z*(h/50);
                } else if (x>=750 & x<=800) {
                    h=9.5;
                    o = z*(h/50);
                }
				if (o) {
					document.getElementById("demo").innerHTML = "you still need to study "+o+" hours. Sign up to see how many hours you need to study every day for your exam and track your progress."+ '<a href="" class="btn btn-primary">Sign up</a>';
				} else {
					document.getElementById("demo").innerHTML = "input your scores";
				}
				
				}
		</script>
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