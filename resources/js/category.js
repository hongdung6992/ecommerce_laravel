// jstree
$(document).ready(function () {
  $('#dragdropTree').jstree({
    'core': {
      'check_callback': true,
      'themes': {
        'responsive': false
      },
      'multiple': false
    },
    'types': {
      'default': {
        'icon': 'fa fa-folder'
      },
      'file': {
        'icon': 'fa fa-file'
      }
    },
    'plugins': ['types', 'contextmenu'],
    'contextmenu': {
      'items': function (node) {
        return {
          // Create category
          'Create': {
            'label': 'Thêm mới',
            'icon': 'fa fa-plus',
            'action': function () {
              $('#modal_add_category').modal('show');
              var id = $('.jstree-node[aria-selected=true]').data('id');
              $('#category-create-form :input[name="parent_id"]').val(id);
              $('#category-create-form').on('submit', function (e) {
                e.preventDefault();
                var data = $(this).serialize();
                var url = $(this).attr('action');
                categoryCreateUpdate('POST', url, data);
              })
            }
          },
          // Update Category
          'Edit': {
            'label': 'Chỉnh sửa',
            'icon': 'fa fa-edit',
            'action': function () {
              $('#modal_edit_category').modal('show');
              getCategory();
              $('#category-edit-form').on('submit', function (e) {
                e.preventDefault();
                var data = $(this).serialize();
                var url = $(this).attr('action');
                categoryCreateUpdate('PUT', url, data)
              });
            }
          },
          // Delete Category
          'Delete': {
            'label': 'Xóa',
            'icon': 'fa fa-trash',
            'action': function () {
              $('#delete').modal('show');
              var id = $('.jstree-node[aria-selected=true]').data('id');
              var url = $('.tree-cate').data('url');
              $('#agree-delete').on('click', function () {
                categoryDelete({ 'id': id }, url)
              })
            }
          },
          // Move Category
          'Move': {
            'label': 'Di chuyển',
            'icon': 'fa fa-arrows-alt',
            'action': function () {
              $('#modal_move_category').modal('show');
              var id = $('.jstree-node[aria-selected=true]').data('id');

              $('#category-move-form option[value="' + id + '"').remove();
              $('#category-move-form option[parent_id="' + id + '"').remove();

              $('#category-move-form').on('submit', function (e) {
                var parent_id = $('#category-move-form select[name="parent_id"]').val();
                var url = $(this).data('url');
                $.ajax({
                  type: "PUT",
                  url: url,
                  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content') },
                  data: {
                    'id': id,
                    'parent_id': parent_id
                  },
                  dataType: "json",
                  success: function (data, status) {
                  }
                });
              })
            }
          }
        }
      }
    }
  })
})

function getCategory() {
  var id = $('.jstree-node[aria-selected=true]').data('id');
  var url = $('#category-edit-form').attr('data-url');
  $.ajax({
    type: "GET",
    url: url,
    data: { 'id': id },
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content') },
    dataType: "json",
    success: function (data, status) {
      if (status == 'success') {
        $('#modal_edit_category input[name="id"]').val(data.id);
        $('#modal_edit_category input[name="name"]').val(data.name);
        $('#modal_edit_category input[name="slug"]').val(data.slug);
        $('#modal_edit_category input[name="parent_id"]').val(data.parent_id);
        $('#modal_edit_category option[value="' + data.status + '"]').prop('selected', true);
      }
    }
  });
}

function categoryDelete(data, url) {
  $.ajax({
    type: "DELETE",
    url: url,
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content') },
    data: data,
    success: function (data, status) {
      if (status == 'success') {
        location.reload();
      }
    }
  });
}

function categoryCreateUpdate(method, url, data) {
  $.ajax({
    type: method,
    url: url,
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content') },
    data: data,
    dataType: 'json',
    success: function (data, status) {
      if (status == 'success') {
        $('#modal_add_category').removeClass('show');
        $('#modal_edit_category').removeClass('show');
        $('.modal-backdrop').removeClass('show');
        location.reload();
      }
    },
    error: function (error) {
      if (error.status == 422) {
        var errorMessage = '<ul class="parsley-errors-list filled">'
        errorMessage += '<li class="parsley-required">' + error.responseJSON.errors['name'][0] + '</li>'
        errorMessage += '</ul>';
        $('.parsley-errors-list').remove();
        $('input[name="name"]').addClass('parsley-error').after(errorMessage);
      }
    }
  });
}


