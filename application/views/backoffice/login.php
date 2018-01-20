<?php check_manutencao() ?>


<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login - Connect Money</title>
    <meta name="description" content="Acesso ao backoffice Connect Money onde você pode administrar suas finanças.">
    <meta name="author" content="Connect Money">
 
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="<?php echo base_url().$this->uri->uri_string() ?>">
    <meta property="og:title" content="Connect Money">
    <meta property="og:site_name" content="Connect Money">
    <meta property="og:description" content="Acesso ao backoffice Connect Money onde você pode administrar suas finanças.">
    <meta property="og:image" content="<?php echo base_url('assets/img/connect-money.jpeg')  ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">  
    <meta property="og:image:height" content="800"> 
    <meta property="og:type" content="website">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/core.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/icons/fontawesome/styles.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/app.min.js"></script>

    <script> var site_url = '<?php echo base_url() ?>';</script>
</head>

<body>
    <div class="page-container">
        <!-- PAGE CONTENT -->
        <div class="content container h-100">
            <div class="row h-100">
              
                <div class="col-12">
                  
                    <div class="login card auth-box mx-auto my-auto">
                        <div class="card-block text-center">
                            <!-- <div class="user-icon">
                                <i class="fa fa-user-circle"></i>
                            </div> -->

                            <div class="logo text-center py-4"><img src="<?php echo base_url() ?>assets/img/logo.png" alt=""></div>

                            <h4 class="text-light">Login</h4>

                            <form action="login" method="post">

                            <div class="user-details">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                        <input type="text" name="usuarioLogin" class="form-control" placeholder="Telefone ou Email" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-key"></i>
                                            </span>
                                        <input type="password" name="usuarioSenha" class="form-control" placeholder="Senha" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block">ENTRAR</button>
                            </form>  
                            <div class="user-links">
                                <a href="<?php echo base_url()?>backoffice/esqueci" class="pull-left">Esqueceu a senha?</a>
                                <a href="<?php echo base_url()?>backoffice/cadastro" class="pull-right">Cadatrar</a>
                            </div>

                        </div>
                    </div>
                  
                </div>
                <div class="col-12 mx-auto my4"  >
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- NOWX -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-3215674587886121"
                        data-ad-slot="7539926294"
                        data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                 <div class="col-12 text-center">
                  <p><img src="<?php echo base_url()?>assets/img/logo.png" alt=""></p>
                  <p>Connect Money Brazil</p>
                  </div>     
            </div>

    </div>

    <script src="<?php echo base_url('assets/js/form.js') ?>"> </script>
</body>

</html>
