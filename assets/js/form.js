    var app = function(){

        $('[data-painel]').on('click', function(e){
            e.preventDefault()
           
            var $id = $(this).text()
                        
            if($($id).is(':hidden')){
                $($id).fadeIn()
            }else{
                $($id).fadeOut()
            }

             
        })
    }
    var loading = function(close=false){
        if(close){
            $(document).find('.loading').fadeOut()
        }else{
            $(document).find('.loading').fadeIn()
        }
        
    }

    var formsave = function(){

        $('.form').on('submit',function(e){
            e.preventDefault();
            
            const form = $(this)
            
            
            
            var ok = false

            const btn = '.btn[type=submit]',
                  contentBtn = form.find(btn).html()
            
            form.find(btn).html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>');
            
            var n = 0
            form.find('input[required]').each(function(e){
                
                if( $(this).val() == ''){
                    n++
                    $(this).parents('.form-group').addClass('has-warning')
                    $(this).addClass('form-control-warning').after('<div class="form-control-feedback">Não deixe vazio</div>')
                }

            })

            if(n == 0){
                ok = true
            }

            if(ok){
                loading()
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
                            loading(true)
                            alert(data.message)
                        }
                    }
                    
                    if(data.result == 'error'){
                        loading(true)
                        alert('Erro: '+data.message)
                    }

                    if(data.clean) {
                        loading(true)
                        form.find('input,textarea').each(function () {
                            $(this).val('')
                        })
                    }
                    
                    form.find(btn).html(contentBtn);
                    

                },'json')
                .fail(function(e){
                    loading(true)
                    alert('Erro grave. Procure o suporte.')
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
                loading()

                $.post(site_url + 'form/abrePosicao', { numDoacoes: numDoacoes }, function(data){
                    console.log(data)
                    $this.html(btnContent)
                    if (data.result == 'success') {
                        
                        if(data.redirect){
                            if(data.message){
                                alert(data.message)
                            }
                            window.location.href = data.redirect
                        }else{
                            loading(true)
                            alert(data.message)
                        }
                    }

                    if (data.result == 'error') {
                        loading(true)
                        alert(data.message)
                    }

                    $this.html(btnContent)

                },'json')
                .fail(function (e) {
                    loading(true)
                    $this.html(btnContent)
                    console.log(e.responseText )
                })
            }else{
                loading(true)
                
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
            var nome = button.data('nome')
            var wpp = button.data('whatsapp')
            var picpay = button.data('picpay')            

            var modal = $(this)
            modal.find('form input[name=doacaoID]').val(doacaoID)
            modal.find('#nome').text(nome);
            modal.find('#wpp').html(wpp);
            modal.find('#picpay').text(picpay);
            modal.find('#qrcode').html('').qrcode('https://picpay.me/'+picpay);
        })

        $(document).on('submit','#comprovante', function(){
            var $this = $(this).find('button[type=submit]'),
                 contentBtn = $this.html()

            $this.html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>')
        })


    }
    
    var retirar = function(){

        $(".rejeitar").on('click', function(e){
            e.preventDefault()

            var r = confirm('Tem certeza que deseja retirar o doador? (Essa ação é irreverssível. Ela retira a doação e bloqueia o doador.)')

            var $this = $(this),
                doacaoID = $this.data('doacao'),
                btnContent = $this.html()
            
            $this.html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>')

            if(r == true){
                loading()
                $.post(site_url+'form/rejeitar', {doacaoID: doacaoID}, function(data){

                    if(data.result == 'success'){
                        
                        if(data.redirect){
                            if(data.message){
                                alert(data.message)
                            }
                            window.location.href = data.redirect
                        }else{
                            loading(true)
                            alert(data.message)
                        }
                    }

                    if (data.result == 'error') {
                        loading(true)
                        alert(data.message)
                    }

                    $this.html(btnContent)
                },'json')
                .fail(function (e) {
                    loading(true)
                    $this.html(btnContent)
                    alert('Erro grave. Procure o suporte.')
                    console.log(e.responseText )
                })

            }else{
                loading(true)
                $this.html(btnContent)
            }

             
        })
    }

    var aceitar = function(){

        $(".aceitar").on('click', function(e){
            e.preventDefault()

            var r = confirm('Tem certeza que deseja aceitar a doação?')

            var $this = $(this),
                doacaoID = $this.data('doacao'),
                btnContent = $this.html()

            $this.html('<i class="fa fa-spinner fa-spin fa-fw fa-2x"></i>')

            if(r == true){
                loading()
                $.post(site_url+'form/aceitar', {doacaoID: doacaoID}, function(data){

                    console.log(data)

                    if(data.result == 'success'){
                        if(data.redirect){
                            if(data.message){
                                alert(data.message)
                            }
                            window.location.href = data.redirect
                        }else{
                            loading(true)
                            alert(data.message)
                        }
                    }

                    if (data.result == 'error') {
                        loading(true)
                        alert(data.message)
                    }

                    $this.html(btnContent)
                },'json')
                .fail(function (e) {
                    loading(true)
                    $this.html(btnContent)
                    alert('Erro grave. Procure o suporte.')
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
    app()