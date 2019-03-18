// sticky header
$(document).ready(function() {
   $('.min_top').removeClass("sticky");
  });
$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
$('.min_top').addClass("sticky");
}
else{
$('.min_top').removeClass("sticky");
}
});
//
