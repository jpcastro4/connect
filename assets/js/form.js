var formsave = function(){

    $('form').on('submit',function(e){
        e.preventDefault();

        var form = $(this)

        var ok = true

        form.find('input[required]').each(function(e){
            
            if( $(this).val() == ''){
                
                $(this).parents('.form-group').addClass('has-warning')
                $(this).addClass('form-control-warning').after('<div class="form-control-feedback">Não deixe vazio</div>')

                ok = true
            }

        })

        if(ok){

            var action = form.attr('action') ,campos = form.serialize()

            $.post(site_url+'form/'+action, campos , function(data){
                
                if(data.result == 'success'){
                    if(data.redirect){

                        window.location.href = data.redirect
                    }else{

                        alert(data.message)
                    }
                }
                
                if(data.result == 'error'){
                    alert(data.message)
                }
            },'json')
            .fail(function(e){
                console.log(e)
            })
        }
    })

    $('form').on('focus','.has-warning, .has-danger, .has-info', function(){

        $(this).find('.form-control-warning').removeClass('form-control-warning')
        $(this).find('.form-control-feedback').remove()
        $(this).removeClass('has-warning has-danger has-info')
    })
    
}

formsave()