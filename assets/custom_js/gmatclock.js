
$('#signup').on('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = $(event.relatedTarget)
  
    // the modal
    var modal = $(this);
    
    //show tab
    modal.find('[href="'+button.attr("href")+'"]').tab('show');
    });

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
      document.getElementById("result").innerHTML = '<span class="label label-success">On average it takes '+ h+ " hours to score "+ x+'</span>'+'<br>'+'<span class="label label-primary">'+'Sign up to track your study time'+'</span>';
    } else {
      document.getElementById("result").innerHTML = '<span class="label label-warning">Input your desired score.</span>';
    }
}