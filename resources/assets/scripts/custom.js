


(function($) {

  $(function() {
    $(".overlay-change-color").mouseover(function() {
      $(this).siblings(".block-content").children().animate({
            color: "#f58b9e",
          }, 200 );
    });
  });

  $(function() {
    $(".overlay-change-color").mouseout(function() {
      $(this).siblings(".block-content").children().animate({
            color: "#272829",
          }, 600 );
    });
  });

  // --slideaway--
  //mouseover
  $(function() {
    $(".overlay-zoom").mouseover(function() {
      $(this).siblings().children(".slideaway-header").animate({left: '0', opacity: '0'},300);
    });
  });

  //mouse out
  $(function() {
    $(".overlay-zoom").mouseout(function() {
      $(this).siblings().children(".slideaway-header").animate({left: '40px', opacity: '1'},200);
    });
  }); //--slideaway--end--

  $(function() {
    $(".overlay-zoom").hover(function() {
      $(this).siblings(".block-overlay-text").toggleClass("opacity-one");
    });
  });

})( jQuery );
