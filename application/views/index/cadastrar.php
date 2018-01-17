<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro Connect Money</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 
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

          <div class="col-12 col-md-6 mx-auto">
            <?php if($this->native_session->get_flashdata('nome_completo') ) echo '<p class="alert-info alert text-center w-100">Indicado por  '. $this->native_session->get('nome_completo'). '</p>';  ?>
             
              <form id="register-form" action="cadastrar" class="form" method="post" >
                    <legend class="text-center py-4">Fazer cadastro</legend>
                
                    <div class="form-group">
                      <!-- first name -->
                      <label for="name" class="form-control-label">Nome</label>
                      <input name="usuarioNome" class="form-control" type="text" required>
                    </div>

                    <div class="form-group">
                      <label for="surname" class="form-control-label">Sobrenome</label>
                      <input name="usuarioSobrenome" class="form-control" type="text" required >
                    </div>
     
                    <div class="form-group">
                      <label class="form-control-label">E-mail</label>
                      <input name="usuarioEmail"  class="form-control" type="text" required >
                    </div>

                    <div class="form-group">
                      <label for="fone" class="form-control-label">Telefone (DDD + Seu número)</label>
                      <input name="usuarioTelefone" class="form-control" type="number" required >
                    </div>

                      
                    <div class="form-group">
                      <label class="form-control-label">Senha</label>
                      <input name="usuarioSenha" class="form-control" type="password" required >
                    </div>

                    <div class="form-group">
                      <label class="form-control-label">Repita a senha</label>
                      <input name="repeteSenha" class="form-control" type="password" required >
                    </div>

                    <div class="form-group">              
                      <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> Eu aceito as condições e entendendo os riscos.
                        </label>
                        
                    </div>
                    <div class="form-group py-4">
                    <button type="submit" class="btn btn-big btn-success">Cadastrar</button>
                    </div>
                </form>
             
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