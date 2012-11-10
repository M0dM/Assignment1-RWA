// Add a class to top-level list items.
$(document).ready(function() {
  $('#selected-product > li').addClass('horizontal');
  $('#selected-product li:not(.horizontal)').addClass('sub-level');
});
