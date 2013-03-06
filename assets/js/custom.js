!function ($) {

  $(function(){

    var $window = $(window)

    // side bar
    $('.nav-list').affix({
      offset: {
        top: 70
      }
    })
    $('.nav-list li:first').addClass("active");
  })
}(window.jQuery)
