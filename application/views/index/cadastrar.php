<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro Connect Money <?php if(!empty($indicador) ) echo ' - Indicado por '. $indicador;  ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php if($this->native_session->get_flashdata('nome_completo') ) echo 'Faça como '. $this->native_session->get('nome_completo');  ?> Cadastre-se e participe da Connect Money. A melhor comunidade de ajuda mútua.">
    <meta name="author" content="Connect Money">
 
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="<?php echo base_url().$this->uri->uri_string() ?>">
    <meta property="og:title" content="Cadastro Connect Money<?php if(!empty($indicador) ) echo ' - Indicado por '. $indicador;  ?>">
    <meta property="og:site_name" content="Connect Money">
    <meta property="og:description" content="<?php if($this->native_session->get_flashdata('nome_completo') ) echo "Faça como ". $this->native_session->get('nome_completo');  ?> Cadastre-se e participe da Connect Money. A melhor comunidade de ajuda mútua.">
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
 
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script > var site_url = '<?php echo base_url() ?>';</script>
  </head>
  <body>

  <div class="container">
        <div class="row">
           
          <div class="col-12 col-md-4 mx-auto">

          <div class="login card auth-box">
              <div class="card-block text-center">
                <img width="250" class="mx-auto" src="<?php echo base_url('assets/img/logo.png') ?>" >
                
                <h4 class="text-light py-4">Iniciar cadastro </h4>
                <form  class="form" id="register-form" action="cadastrar" class="form" method="post" >
                   <?php if(!empty($indicador) ) echo '<p class="alert-info alert text-center w-100">Indicado por  '. $indicador. '  -  '.$this->native_session->get('indicador').'</p>';  ?>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                                <i class="fa fa-phone"></i>
                        </span>
                      <!-- <label for="fone" class="form-control-label">Telefone (DDD + Seu número)</label> -->
                          <input name="usuarioTelefone" placeholder="DDD + Telefone ou Email" class="form-control" type="number" required >
                        </div>
                    </div>

                    <div class="form-group py-4">
                    <button type="submit" class="btn btn-big btn-success">Proximo passo <i class="fa fa-arrow-right"></i> </button>
                    </div>
                </form>
              </div>
            </div> 
          </div>

        </div>
    </div>

  <div class="container text-center">
        <footer class="clearfix"></footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
            <p><img src="<?php echo site_url('assets/backoffice/')?>images/logo.png" alt=""></p>
            <p>Connect Money Brazil</p>
            </div>

          </div>
        </div> 
  </div>

  <script src="<?php echo base_url('assets/js/form.js') ?>"> </script>
</body>
</html>