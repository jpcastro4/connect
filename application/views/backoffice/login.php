<?php check_manutencao() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Connect Money - Login</title>
    <meta name="description" content="A free HTML template and UI Kit built on Bootstrap" />
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <!-- <meta name="author" content="Peter Finlan and Taty Grassini Codrops" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/index/img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/index/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/index/img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/index/img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/index/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url()?>assets/index/img/favicon/manifest.json">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/index/img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/index/img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="<?php echo base_url()?>assets/index/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
     
    <link rel="stylesheet" href="<?php echo base_url()?>assets/index/css/landio.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
 
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

    <script> var site_url = '<?php echo base_url() ?>';</script>

  </head>

  <body class="bg-faded p-t-2">
    <div class="container">
      <h3 class="p-y-1 text-xs-center"></h3>
    </div>

    

    <div class="container" style="max-width:600px">
      <div class="row">
          
          <div class="col-12 col-md-6 mx-auto">
          <div class="logo text-center py-4"><img src="<?php echo base_url() ?>assets/img/logo.png" alt=""></div>


          <form action="login" method="post" >

            <div class="form-group has-icon-left form-control-email">
              <label class="sr-only" for="inputEmail">E-mail ou Telefone com DDD</label>
              <input type="text" minlength="1" name="usuarioLogin" class="form-control" id="inputEmail" placeholder="Email ou Celular com DDD" autocomplete="off" required>
            </div>
            <div class="form-group has-icon-left form-control-password">
              <label class="sr-only" for="inputPassword">Senha</label>
              <input type="password" name="usuarioSenha" class="form-control" id="inputPassword" placeholder="Senha" autocomplete="off" required>
            </div>

            <div class="form-group my-4">
              <button type="submit" value="submit" name="submit" class="btn btn-big btn-primary">Acessar</button>
            
              <div class="col-sm-12 py-4 text-center">
                <a href="<?php echo base_url()?>backoffice/esqueci">Recuperar senha</a>
              </div>
            </div>

          </form>
          </div>

        </div>

        <div class="row ads my-4">     

            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 mx-auto" style="max-height:600px">
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
        </div>


    </div>

    <div class="container text-center">
          <footer class="clearfix"></footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-lg-12">
              <p><img src="<?php echo base_url()?>assets/img/logo.png" alt=""></p>
              <p>Connect Money Brazil</p>
              </div>

            </div>
          </div> 
    </div>

  
      
 

    <script src="<?php echo base_url('assets/js/form.js') ?>"> </script>

  </body>
</html>
