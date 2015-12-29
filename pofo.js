$(function() {

$('#report').click(function(){
  $("#reportlittle").slideDown();
})

$('#js').click(function(){
  $("#jslittle").slideDown();
})

$('#gazou').click(function(){
  $("#gazoulittle").slideDown();
})

$('#ben').click(function(){
  $("#benlittle").slideDown();
})

$('#benkyo').mouseover(function(){
  $(this).attr("src","pobenhover.png");
}).mouseout(function(){
  $(this).attr("src","poben.png");
})

$('#gurume').mouseover(function(){
  $(this).attr("src","pogurumehover.png");
}).mouseout(function(){
  $(this).attr("src","pogurume.png");
})

$('#pofo').mouseover(function(){
  $(this).attr("src","popofohover.png");
}).mouseout(function(){
  $(this).attr("src","popofo.png");
})

$('#kou').mouseover(function(){
  $(this).attr("src","pokouhover.png");
}).mouseout(function(){
  $(this).attr("src","pokou.png");
})

});
