<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Valida codigo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
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

    <script > var site_url = '<?php echo base_url() ?>';</script>
  </head>
  <body>

  <div class="container">
        <div class="row">
            <div class="col-12 col-6">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                        <p<i>Precisamos validar seu numero de whatsapp. Você receberá um codigo via SMS. Insira no campo ao lado para concluir o cadastro</i></p>
                    </div>
                    <div class="col-12 col-md-6 mx-auto">
                                         
                    <form id="register-form" action="cadastrar" class="form" method="post" >
                            <legend class="text-center py-4">Fazer cadastro</legend>
                        
                            <div class="form-group">
                            <label for="fone" class="form-control-label">Código</label>
                            <input name="usuarioCod" class="form-control" type="number" required >
                            </div>

                            <div class="form-group py-4">
                            <button type="submit" class="btn btn-big btn-success">Enviar</button>
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