
    </div>
    <!-- /#wrapper -->

    <!-- Modal edit score -->
<div class="modal fade" id="editScore" tabindex="-1" role="dialog" aria-labelledby="myChangeScore">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Change Score</h4>
      </div>
      <div class="modal-body">
        <form method="post" accept-charset="utf-8" action="<?=base_url()?>edit/score">

          <div class="form-group">
            <label for="InputScore">New Desired Score</label>
            <text class="valid-error"><?php echo form_error('score'); ?></text>
            <input type="number" min="201" max="800" name="score" class="form-control" id="InputScore" value="<?php echo set_value('score'); ?>" placeholder="680">
          </div>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal how it's calculated -->
<div class="modal fade" id="explainCalc" tabindex="-1" role="dialog" aria-labelledby="myHowitWorks">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Here's how it works</h4>
      </div>
      <div class="modal-body">
        <ul class="explain-points">
        <li><i class="fa fa-line-chart fa-2x"></i> More hours you complete, closer you get to your goal.   </li>
        <li><i class="fa fa-database fa-2x"></i> GMATClock uses publicly available data about how much time students invest in preparation for GMAT and what kind of scores they get.</li>
        <li><i class="fa fa-bullhorn fa-2x"></i> Use GMATClock as a guidence that is based on average numbers among all students who took GMAT before. Although it's accurate in most cases, some people need more hours to prepare and some less. </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="<?=base_url()?>assets/bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

<!-- Scripts -->
<script src="<?=base_url()?>assets/custom_js/gmatclock.js"></script>

<script type="text/javascript">
     var $timer = $("#timer");
setInterval(function () {$("#timer").load("http://127.0.0.1:4567/dashboard/ #timer");
}, 1000);
 </script>

</body>
</html>