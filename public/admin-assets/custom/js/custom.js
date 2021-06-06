function show_loader() {
    $('body').addClass("wait-loader");
}

function hide_loader() {
    $('body').removeClass("wait-loader");
}

let tableReload = '';
$(document).ready(function() {
    $('.basic-datatable').DataTable();
    if ($('table').hasClass('dattable')) {
        var url = $('.dattable').attr('data-url');
        var json_url = $('.dattable').attr('data-json');
        $.get(json_url, function(fb) {
            tableReload = $('.dattable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: url,
                },
                columns: $.parseJSON(fb)
            });
        })

    }
});
$(document).on('submit', '.database_operations', function() {
    show_loader();
    var url = $(this).attr('action');
    var data = new FormData(this);
    var _this = this;
    var popup = $(this).attr('data-model');
    $('.submitbtn').attr('disabled', 'disabled');
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        success: function(fb) {
            var resp = $.parseJSON(fb);
            hide_loader();
            if (resp.status == 'true') {
                $(_this).trigger('reset');
                $(popup).modal('hide');
                $.toaster({ priority: 'success', title: 'Status', message: resp.message });
                if (resp.reload == 0) {
                    tableReload.ajax.reload();
                } else if (resp.reload != 0) {
                    setTimeout(function() {
                        window.location.href = resp.reload;
                    }, 2000);
                }
            } else {
                if (Array.isArray(resp.message)) {
                    resp.message.map((item) => {
                        console.log(item);
                        $.toaster({ priority: 'danger', title: 'Status', message: item });
                    })
                } else {
                    $.toaster({ priority: 'danger', title: 'Status', message: resp.message });
                }

            }
        }
    });
    return false;
});

$(document).on('click', '.edit_category', function() {
    let item = $.parseJSON($(this).attr('data-item'));
    $('#edit_name').val(item.name);
    $('#id').val(item.id);
    $('#edit-modal').modal('show');
    hide_loader();
});
$(document).on('click', '.edit_sub_category', function() {
    let item = $.parseJSON($(this).attr('data-item'));
    $('#edit_name').val(item.name);
    $('#cat_id').val(item.cat_id);
    $('#id').val(item.id);
    $('#edit-modal').modal('show');
    hide_loader();
});
$(document).on('click', '.edit_vehicle_type', function() {
    let item = $.parseJSON($(this).attr('data-item'));
    $('#edit_name').val(item.name);
    $('#cat_id').val(item.cat_id);
    $('#cat_id').trigger("change");
    setTimeout(function() {
        $('#sub_cat_id1').val(item.sub_cat_id);
        $('#id').val(item.id);
        $('#edit-modal').modal('show');
    }, 1000);
});
$(document).on('click', '.edit_sub_category', function() {
    let item = $.parseJSON($(this).attr('data-item'));
    $('#edit_name').val(item.name);
    $('#cat_id').val(item.cat_id);
    $('#id').val(item.id);
    $('#edit-modal').modal('show');
});
$(document).on('click', '.delete_element', function() {
    show_loader()
    let url = $(this).attr('data-url');
    let _token = $('input[name="_token"]').val();
    let id = $(this).attr('data-id');
    if (window.confirm('Do you want to delete this?')) {
        $.post(url, { id: id, _token: _token }, function(resp) {
            tableReload.ajax.reload();
            hide_loader();
            $.toaster({ priority: 'success', title: 'Status', message: 'Successfully Deleted' });
        });
    }
});
$(document).on('change', '.changeStatus', function() {
    show_loader();
    let id = $(this).attr('data-id');
    let url = $(this).attr('data-url');
    let _token = $('input[name="_token"]').val();
    let value = $('input[id="status_' + id + '"]:checked').val();
    if (value != 1)
        value = 0;
    $.post(url, { id: id, _token: _token, status: value }, function(resp) {
        var resp = $.parseJSON(resp);
        hide_loader();
        if (resp.status == 'true') {
            $.toaster({ priority: 'success', title: 'Status', message: resp.message });
        } else {
            $.toaster({ priority: 'danger', title: 'Error', message: resp.message });
        }
    });
});
$(document).on('change', '.getRecordById', function() {
    show_loader();
    let id = $(this).val();
    let target = $(this).attr('data-target');
    $(target).html('');
    if (id) {
        let url = $(this).attr('data-url') + id;
        let _token = $('input[name="_token"]').val();
        $(target).html('');
        $.post(url, { id: id, _token: _token }, function(resp) {
            $(target).html(resp);
            hide_loader();
        });
    }
});
$(document).on('submit','.setting_form',function(){
    var url=$(this).attr('action');
    var data=new FormData($(this)[0]);
    $.ajax({
        type:'POST',
        url:url,
        data:data,
        contentType:false,
        processData:false,
        success:function(fb)
        {
            console.log(fb);
            var resp=$.parseJSON(fb);
            if(resp.status=='true')
            {
              $.toaster({ priority :'success', title :'Status', message : resp.message });
            }
            else
            {
               //alert(resp.message)
               $.toaster({ priority :'danger', title :'Status', message : resp.message });
            }
        }


    });
    return false;
});