$(document).on('submit','.database_operations',function(){
	var url=$(this).attr('action');
    var data = new FormData(this);
    var _this=this;
    var popup = $(this).attr('data-model');
    $('.submitbtn').attr('disabled','disabled');
    $.ajax({
        type:'POST',
        url: url,
        data:data,
        cache:false,
        contentType: false,
        processData: false,
        success:function(fb){
            var resp=$.parseJSON(fb);
            if(resp.status=='true')
            {
                $(_this).trigger('reset');
                $.toaster({ priority :'success', title :'Status', message : resp.message });
                if(resp.reload==2) {
                    tableReload.ajax.reload();
                } else if(resp.reload!=0) {
                    setTimeout(function(){
                        window.location.href=resp.reload;
                    },2000);
                }
            }
            else
            {
                if(Array.isArray(resp.message)) {
                    resp.message.map((item)=>{
                        console.log(item);
                        $.toaster({ priority :'danger', title :'Status', message : item });
                    })
                } else {
                    $.toaster({ priority :'danger', title :'Status', message : resp.message });
                }

            }
        }
    });
	return false;
});