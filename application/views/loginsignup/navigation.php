<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">GMATClock</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php 
        if ($action==='login') {
            $classlogin = "active";
            $classsignup = "";
        } else {
            $classlogin = "";
            $classsignup = "active";
        }
        ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="<?=$classlogin;?>" href="<?=base_url()?>login">Log in</a>
                </li>
                <li>
                    <a class="<?=$classsignup;?>" href="<?=base_url()?>signup">Sign up</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Navigation ends-->