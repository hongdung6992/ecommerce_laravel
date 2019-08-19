// get product by category
$(document).ready(() => {
  var id = 1;
  $('#dragdropTree').on('select_node.jstree', function (e, data) {
    url = $('.data-product').data('url');
    id = data.node.data.id;
    $.ajax({
      type: "GET",
      url: url,
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content') },
      data: { 'id': id },
      dataType: "json",
      success: function (data, status) {
        if (data.length > 0) {
          var xhtml = '';
          var index = 1;
          $(data).each((e, value) => {
            xhtml += '<tr>';
            xhtml += '<td>' + index + '</td>';
            xhtml += '<td>' + value.name + '</td>';
            xhtml += '<td>' + value.code + '</td>';
            xhtml += '<td>' + value.color + '</td>';
            xhtml += '<td>' + value.price + '</td>';
            xhtml += '<td><img alt="image" style="max-width:90px; height:auto;" src="/images/uploads/' + value.image + '"></td>';
            xhtml += '<td>';
            xhtml += '<button class="btn btn-secondary btn-sm"><i class="fa fa-info-circle"></i></button>';
            xhtml += '<button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>';
            xhtml += '<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>';
            xhtml += '</td>'
            xhtml += '</tr>';
            $('.data-product table tbody').html(xhtml);
            index++;
          })
        } else {
          $('.data-product table tbody').html('<tr><td colspan="7" class="dataTables_empty">Đang cập nhật dữ liệu!</td></tr>')
        }

      }
    });

  })
})

$(document).ready(() => {

  $('#modal_add_product').on('shown.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    console.log(button);

  })

})