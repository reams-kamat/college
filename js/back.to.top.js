//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// collpase icon change 
$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});


// // collpase icon change 
// $('.zoom_icon').click(function(){
// $(this).parent().find(".glyphicon-zoom-in").removeClass("glyphicon-zoom-in").addClass("glyphicon-zoom-out");
// }).on('hidden.bs.collapse', function(){
// $(this).parent().find(".glyphicon-zoom-out").removeClass("glyphicon-zoom-out").addClass("glyphicon-zoom-in");
// });