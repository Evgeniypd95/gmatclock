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
<script>
        var a=document.getElementsByTagName("a");
for(var i=0;i<a.length;i++)
{
    a[i].onclick=function()
    {
        window.location=this.getAttribute("href");
        return false
    }
}
</script>

</body>
</html>