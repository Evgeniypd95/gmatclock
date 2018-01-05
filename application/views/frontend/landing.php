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
                <div class="col-md-6" style="font-size: 20px;">
				    <div class="panel">
					    <div class="panel-heading">
						    <div class="row">
							    <div class="col-xs-12 text-center">
								    <div>See how many hours do you need to study</div>
							    </div>
						    </div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputDesired" class="col-sm-6 control-label">Score you want to get</label>
                                        <div class="col-sm-6">
                                            <input type="number" id="desired" class="form-control" id="inputDesired" placeholder="600">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="text-center">
                                            <a class="btn btn-default" onclick="calcScore()">Calculate</a>
                                        </div>
                                    </div>
                    <div class="col-sm-12 text-center" id="result"></div>
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
				var x, h;
				
				x = +document.getElementById('desired').value;
				

                

                if (x>=200 & x<300) {
                    h=69;
                } else if (x>=300 & x<400) {
                    h=81;
                } else if (x>=400 & x<450) {
                    h=87;
                } else if (x>=450 & x<500) {
                    h=92.5;
                } else if (x>=500 & x<550) {
                    h=98;
                } else if (x>=550 & x<600) {
                    h=102.5;
                } else if (x>=600 & x<650) {
                    h=107;
                } else if (x>=650 & x<700) {
                    h=114;
                } else if (x>=700 & x<750) {
                    h=121;
                } else if (x>=750 & x<=800) {
                    h=129.5;
                }

				if (h) {
					document.getElementById("result").innerHTML = '<span class="label label-success">On average students study for '+ h+ " hours to score "+ x+'.'+'</span>'+'<br>'+'<span class="label label-primary">'+'Sign up now to track your study time every day.'+'</span>';
				} else {
					document.getElementById("result").innerHTML = '<span class="label label-warning">Input your desired score.</span>';
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
                              <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Record how long you study</h4>
                        <p>Use GMATClock timer to record your every study session.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Track your progress</h4>
                        <p>Set goals how many hours you want to study every week or every day and track it.</p>
                    </div>
                </div>
            </div>
           	<div class="col-md-4 col-sm-6">
                <div class="text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Keep yourself accountable</h4>
                        <p>See your progress over time and measure if you are meeting your goal.</p>
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
                    <ol>
                        <li>When you start studying turn on GMATClock timer.</li>
                        <li>Save your entry after you are done studying.</li>
                        <li>Track your progress over time.</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Sign Up</a>
                </div>
            </div>
        </div>

        <hr>