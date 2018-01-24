    var app = function(){

        $('.table').DataTable({
            responsive: true
        });
    }
    var formsave = function(){

        $('.form').on('submit',function(e){
            e.preventDefault();

            const form = $(this)

            var ok = true

            const btn = '.btn[type=submit]',
                  contentBtn = form.find(btn).html()
            
            form.find(btn).html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>');
            
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

                    console.log(data.message)
                    
                    if(data.result == 'success'){
                        if(data.redirect){
                            if(data.message){
                                alert(data.message)
                            }
                            window.location.href = data.redirect
                        }else{
                            alert(data.message)
                        }
                    }
                    
                    if(data.result == 'error'){
                        alert('Erro: '+data.message)
                    }

                    if(data.clean) {

                        form.find('input,textarea').each(function () {
                            $(this).val('')
                        })
                    }

                    form.find(btn).html(contentBtn);
                    

                },'json')
                .fail(function(e){
                    console.log(e)
                })
            }else{

                form.find(btn).html(contentBtn);
            }
        })

        $('form').on('focus','.has-warning, .has-danger, .has-info', function(){

            $(this).find('.form-control-warning').removeClass('form-control-warning')
            $(this).find('.form-control-feedback').remove()
            $(this).removeClass('has-warning has-danger has-info')
        })
    }

    var abreDoacao = function(){

        $('#posicionar').on('click', function(){
            var $this = $(this),
                btnContent = $(this).html()

            $this.html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>')

            var r = confirm('Deseja abrir posição?')

            var numDoacoes = $this.data('numdoacoes')

            if(r == true ){
                $.post(site_url + 'form/abrePosicao', { numDoacoes: numDoacoes }, function(data){
                    console.log(data)
                    $this.html(btnContent)
                    if (data.result == 'success') {
                        alert(data.message)
                        if(data.redirect){
                            if(data.message){
                                alert(data.message)
                            }
                            window.location.href = data.redirect
                        }
                    }

                    if (data.result == 'error') {
                        alert(data.message)
                    }

                    $this.html(btnContent)

                },'json')
                .fail(function (e) {
                    $this.html(btnContent)
                    console.log(e.responseText )
                })
            }else{
                $this.html(btnContent)
            }
                

        })

        
    }

    var cronometro = function(){

        $('[data-countdown]').each(function () {
            var $this = $(this),
            finalDate = $(this).data('countdown');

            $this.countdown(finalDate, function (event) {
                $this.html(event.strftime('%H:%M:%S'));
            });
        });
    }

    var comprovante = function(){

        $('#comprovante').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)  
            var doacaoID = button.data('doacao') 

            var modal = $(this)
            modal.find('form input[name=doacaoID]').val(doacaoID)

        })

        $(document).on('submit','#comprovante', function(){
            var $this = $(this).find('button[type=submit]'),
                 contentBtn = $this.html()

            $this.html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>')
        })


    }

    var retirar = function(){

        $("#retirar").on('click', function(e){
            e.preventDefault()

            var r = confirm('Tem certeza que deseja retirar o doador? (Essa ação irá retirar a doação e bloquear o doador)')

            var $this = $(this),
                doacaoID = $this.data('doacao'),
                btnContent = $this.html()
            
            $this.html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>')

            if(r == true){
                $this.html(btnContent)
                return

                $.post(site_url+'form/retirar', {doacaoID: doacaoID}, function(data){

                    if(data.result == 'success'){
                        if(data.message){
                            alert(data.message)
                        }
                        if(data.redirect){
                            window.location.href = data.redirect
                        }
                    }

                    if (data.result == 'error') {
                        alert(data.message)
                    }

                    $this.html(btnContent)
                },'json')
                .fail(function (e) {
                    $this.html(btnContent)
                    console.log(e.responseText )
                })

            }else{
                $this.html(btnContent)
            }

             
        })
    }

    var aceitar = function(){

        $("#aceitar").on('click', function(e){
            e.preventDefault()

            var r = confirm('Tem certeza que deseja aceitar a doação?')

            var $this = $(this),
                doacaoID = $this.data('doacao'),
                btnContent = $this.html()

            $this.html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>')

            if(r == true){

                $.post(site_url+'form/aceitar', {doacaoID: doacaoID}, function(data){

                    console.log(data)

                    if(data.result == 'success'){
                        if(data.message){
                            alert(data.message)
                        }
                        if(data.redirect){
                            window.location.href = data.redirect
                        }
                    }

                    if (data.result == 'error') {
                        alert(data.message)
                    }

                    $this.html(btnContent)
                },'json')
                .fail(function (e) {
                    $this.html(btnContent)
                    console.log(e.responseText )
                })                
            }else{
                $this.html(btnContent)
            }
        })

    }

    //app()
    formsave()
    abreDoacao()
    cronometro()
    comprovante()
    retirar()
    aceitar()