<!-- Navigation -->
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>dashboard">GMATClock</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <?php foreach($user_data as $user_info){?>

            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li> 
                        <a class="user-a"><i class="fa fa-fw fa-user user-i"></i> <?=$user_info->email;?></a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>logout"><i class="fa fa-fw fa-power-off"></i> Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <div id="1" class="<?php if (isset($show)){echo $show;}?>">
                    <?php echo validation_errors(); ?>
                    <?php if (isset($time_message)){echo $time_message;}?>
                </div>
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Your Progress</h3>
                            </div>
                            <div class="panel-body">
                            	<p>Hours Total: <span class="label label-info"><?php echo $user_score; ?></span></p>
                            	<p>Hours Completed: <span class="label label-success"><?php echo $hours_completed; ?></span></p>
                                <h4 class="text-center"><?php echo $progress_bar.'%'.' complete'; ?></h4>
                            	<div class="progress">

                    				<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress_bar.'%'; ?>">
                    				</div>
                				</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Input your progress</h3>
                            </div>
                            <div class="panel-body">
                                <div class="text-center">
                                    <form class="form-inline" method="post" accept-charset="utf-8" action="<?=base_url()?>input/time">
                                      <div class="form-group">
                                        <label for="TimeH">Hours</label>
                                        <input type="number" min="0" max="99" name="time_h" class="time-form form-control" id="TimeH" value="<?php echo set_value('time_h'); ?>" placeholder="0">
                                      </div>
                                      <div class="form-group">
                                        <label for="TimeM">Minutes</label>
                                        <input type="number" min="0" max="60" name="time_m" class="time-form form-control" id="TimeM" value="<?php echo set_value('time_m'); ?>" placeholder="40">
                                      </div>
                                      <button type="submit" class="btn btn-success">Input Hours</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-flash fa-fw"></i> Use Live stopwatch</h3>
                            </div>
                            <div class="panel-body">
                                <div class="text-center"> 
                                    <h4>Use live timer</h4>
                                    <a href="<?= base_url()?><?= $action_link2; ?>"><i class="<?= $timer_class2; ?>"></i></a>
                                    <a href="<?= base_url()?><?= $action_link; ?>"><i class="<?= $timer_class; ?>"></i></a>
                                    <div id="timer"><?php echo $timer_output; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-line-chart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $projected_score; ?></div>
                                        <div>Projected Current Score</div>
                                        <div><?php if (isset($score_message)){echo $score_message;}?></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#explainCalc">
                                <div class="panel-footer">
                                    <span class="pull-left">How is it calculated?</span>
                                    <span class="pull-right"><i class="fa fa-info-circle"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$user_info->score;?></div>
                                        <div>Desired Score</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#editScore">
                                <div class="panel-footer">
                                    <span class="pull-left">Edit</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><?php }?>  
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-comments fa-fw"></i> Your inputs</h3>
                            </div>
                            <div class="panel-body">
                                <?php foreach($user_entries as $entry){?>
                                    <strong>Minutes:</strong> <?php echo $entry['time_entry'];?>
                                    <span class="pull-right"><a href="delete/<?php echo $entry['entry_id'];?>"><i class="fa fa-trash"></i></a></span>
                                        <br>
                                    <strong>Date:</strong> <?php echo $entry['datetime'];?>
                                        <hr>
                                 <?php }?>  
                            </div>
                            <div id="pagination" class="panel-footer text-center">
                                <a><?php echo $links; ?></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


