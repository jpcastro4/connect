<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Valida codigo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
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
                <div class="row">
               
                    <div class="col-12 py-3 text-center">
                        <div class="login card auth-box">
                          <div class="card-block text-center">
                            <img width="250" class="mx-auto" src="<?php echo base_url('assets/img/logo.png') ?>" >      
                                         
                              <form class="form" id="register-form" action="valida" class="form" method="post" >
                                  <p class="alert alert-info text-center"><i>Insira o código recebido por SMS no seu celular, para validar e continuar seu cadastro.</i></p>
                                  <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                  <!-- <label for="fone" class="form-control-label">Código recebido</label> -->
                                          <input name="usuarioCode" class="form-control" placeholder="Insira o código" type="number" maxlength="4"  minlength="10" required  />
                                      </div>
                                  </div>

                                  <div class="form-group py-4">
                                  <button type="submit" class="btn btn-big btn-success"> Continuar cadastro <i class="fa fa-arrow-right"></i> </button>
                                  </div>
                              </form>
                              <div class="user-links  text-center">
                                  <a href="<?php echo base_url('cadastro') ?>">Cancelar e começar novamente</a> 
                              </div>

                      </div>
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