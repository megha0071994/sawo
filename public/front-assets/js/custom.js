$(document).on('submit', '.database_operations', function() {
    var url = $(this).attr('action');
    var data = new FormData(this);
    var _this = this;
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
            if (resp.status == 'true') {
                $(_this).trigger('reset');
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
$(document).on('keyup','#from_location',function(){
    let loc = $(this).val();
    if(loc!='') {
        loc  = loc.replace(" ", "+");
        $.get('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='+loc+'&types=address&key=AIzaSyATAq7GmtDab3CM4EGNKwCqvf9lW4B4C44',function(fb){
            if(fb.status=='OK') {
                $('.from_response').css({'display':'block'});
                $('.from_response').html('');
                fb.predictions.map((item)=>{
                    $('.from_response').append('<li class="selectAddress1" data-address="'+item.description+'">'+item.description+'</li>');
                })
            } else {
                $('.from_response').css({'display':'none'});
                $('.from_response').html('');
                console.log(fb.status);
            }
        })
    } else {
        $('.from_response').css({'display':'none'});
        $('.from_response').html('');
    }
});
$(document).on('keyup','#to_location',function(){
    let loc = $(this).val();
    if(loc!='') {
        loc  = loc.replace(" ", "+");
        $.get('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='+loc+'&types=address&key=AIzaSyATAq7GmtDab3CM4EGNKwCqvf9lW4B4C44',function(fb){
            if(fb.status=='OK') {
                $('.to_response').css({'display':'block'});
                $('.to_response').html('');
                fb.predictions.map((item)=>{
                    console.log(item)
                    $('.to_response').append('<li class="selectAddress2" data-address="'+item.description+'" data-city="'+item.terms[2].value+'">'+item.description+'</li>');
                })
            } else {
                $('.to_response').css({'display':'none'});
                $('.to_response').html('');
                console.log(fb.status);
            }
        })
    } else {
        $('.to_response').css({'display':'none'});
        $('.to_response').html('');
    }
});
$(document).on('click','.selectAddress1',function(){
    var address = String($(this).attr('data-address'));
    $('#from_location').val(address);
    $('#city_from').val(address.split(',').reverse()[2]);
    $('.from_response').css({'display':'none'});
    $('.from_response').html('');

});
$(document).on('click','.selectAddress2',function(){
    var address = String($(this).attr('data-address'));
    $('#city_to').val(address.split(',').reverse()[2]);
    $('#to_location').val(address);
    $('.to_response').css({'display':'none'});
    $('.to_response').html('');

});