import { callbackify } from "util";

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

// convert name to slug
$(document).ready(() => {
  function convertSlug(element) {
    var slug = element.toLowerCase();
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/đ/gi, 'd');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '')
    slug = slug.replace(/ /gi, '-');
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    return slug;
  };

  $('#category-create-form input[name="name"]').on('keyup', function () {
    var element = $(this).val();
    $('input[name="slug"]').val(convertSlug(element));
  })

  $('#category-edit-form input[name="name"]').on('keyup', function () {
    var element = $('#category-edit-form input[name="name"]').val();
    $('input[name="slug"]').val(convertSlug(element));
  })
})


$(document).ready(() => {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })
})


