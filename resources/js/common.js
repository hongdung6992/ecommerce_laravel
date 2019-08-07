// fadeOut flash message alert
$(document).ready(() => {
  $('.delay').delay(2000).fadeOut(2000);
})

// select checkbox + .btn-multiple status
$(document).ready(() => {
  $('#check-all').change(function () {
    $('.checkbox').prop('checked', $(this).prop('checked'));
    if ($('#check-all').prop('checked') == true) {
      $('.btn-multiple').removeAttr('style');

    }
    if ($('#check-all').prop('checked') == false) {
      $('.btn-multiple').css('display', 'none');
    }
  })

  $('.checkbox').change(function () {
    if ($(this).prop('checked') == false) {
      $('#check-all').prop('checked', false);
    }
    if ($('.checkbox:checked').length == $('.checkbox').length) {
      $('#check-all').prop('checked', true);
    }
  })

  if ($('.checkbox').prop('checked') == false) {
    $('.btn-multiple').css('display', 'none');
  }

  $('.checkbox').each(function () {
    $(this).on('change', function () {
      if ($(this).prop('checked') == true) {
        $('.btn-multiple').removeAttr('style');
      }
      if ($('.checkbox:checked').length == 0) {
        $('.btn-multiple').css('display', 'none');
      }
    })
  });

})