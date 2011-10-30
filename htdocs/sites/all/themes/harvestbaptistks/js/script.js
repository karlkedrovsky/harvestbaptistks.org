(function ($) {

  $(document).ready(function() {
    if ($('.view-nodequeue-1').length > 0) {
      var length = $('.view-nodequeue-1 .view-content .views-row').length;
      if (length > 0) {
        var random = Math.floor(Math.random() * length) + 1;
        $(".view-nodequeue-1 .view-content .views-row:nth-child(" + random + ")").show()
      }
    }
  });

}(jQuery));






















