$(function(){
    $('#AjaxRequest').submit(function(){
        var form = $(this).serialize();
        var request = $.ajax({
            method:"GET",
            url:"http://localhost:8000/ajax/update",
            data:form,
            dataType:"json"
        });
        request.done(function(e){
            tag='#L'+e.tag;
            $("#msg").html(e.msg);
            $(tag).focus();
            if(e.status){
                $('#AjaxRequest').each(function(){
                    $('#updated_at').val(e.alter.date);

                    var intervalo = window.setInterval(function() {
                      $("#msg").html('');
                    }, 1500);

                    window.setTimeout(function() {
                        clearInterval(intervalo);
                    }, 3000);
                    
                });
            }

        });
        request.fail(function(e){
            console.log("Erro main js line23!");
            console.log(e);
        });
       /*request.always(function(e){
            console.log("always");
            console.log(e);
        });*/

        return false;
    });

});
$(function(){
    $('#novoProduto').submit(function(){
        var form = $(this).serialize();
        var request = $.ajax({
            method:"GET",
            url:"http://localhost:8000/ajax/novoProduto",
            data:form,
            dataType:"json"
        });
        request.done(function(e){
            tag='#L'+e.tag;
            $("#msg").html(e.msg);
            $(tag).focus();
            if(e.status){
                $('#novoProduto').each(function(){
                    $(location).attr('href', 'http://localhost:8000/admin/produtos/editar/'+e.alter);
                    console.log('Foi');
                    
                });
            }

        });
        request.fail(function(e){
            console.log("Erro main js line56!");
            console.log(e);
        });
       /*request.always(function(e){
            console.log("always");
            console.log(e);
        });*/

        return false;
    });

});



