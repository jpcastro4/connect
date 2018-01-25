<?php 

  check_manutencao(); 
  check_session();
?>

<html>

<head>
    <title>Backoffice - Connect Monney</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/core.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/icons/fontawesome/styles.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/lib/css/chartist.min.css">
    
    
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
     
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/app.min.js"></script>
    
    <script> var site_url = '<?php echo base_url() ?>';</script>
    
</head>

<body>
<div class="loading" style="display:none">
    <div class="sk-circle">
    <div class="sk-circle1 sk-child"></div>
    <div class="sk-circle2 sk-child"></div>
    <div class="sk-circle3 sk-child"></div>
    <div class="sk-circle4 sk-child"></div>
    <div class="sk-circle5 sk-child"></div>
    <div class="sk-circle6 sk-child"></div>
    <div class="sk-circle7 sk-child"></div>
    <div class="sk-circle8 sk-child"></div>
    <div class="sk-circle9 sk-child"></div>
    <div class="sk-circle10 sk-child"></div>
    <div class="sk-circle11 sk-child"></div>
    <div class="sk-circle12 sk-child"></div>
    <div class="text-center text-white" style="padding-top:100px">Processando...</div>
    </div>
</div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span>
                <i class="fa fa-code-fork"></i>
            </span>
        </button>

        <button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
            <span>
               <i class="fa fa-align-justify"></i>
            </span>
        </button>

        <a class="navbar-brand logo hidden-md-up" href="#">
            <img width="110" style="width:100px!important" src="<?php echo base_url()?>assets/img/logo-branco.png" alt="Modish">
        </a>
        

        <div class="collapse navbar-collapse" id="navbarNav">
            <a class="navbar-brand logo hidden-md-down" href="#">
              <img width="110" src="<?php echo base_url()?>assets/img/logo-branco.png" alt="Modish">
             </a>

            <button class="sidebar-toggle btn btn-flat hidden-md-down" id="toggle-sidebar-desktop">
                <span>
                    <i class="fa fa-align-justify"></i>
                </span>
            </button>
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle nav-icon" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell-o"></i>
                        <span class="hidden-lg-up position-right">Notifications</span>
                        <span class="badge bg-danger-4">8</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right width-300 list-notifications">
                        <ul class="list-unstyled">
                            <li class="media notif-unread">
                                You have 3 unread notifications!
                            </li>
                            <li class="media">
                                <div class="notif-icon bg-primary-4">
                                    <i class="fa fa-bell-o"></i>
                                </div>
                                <div class="media-body notif-text">
                                    You may want to check this!
                                </div>
                            </li>
                            <li class="media mr-2">
                                <div class="notif-icon bg-danger-4">
                                    <i class="fa fa-exclamation"></i>
                                </div>
                                <div class="media-body notif-text text-danger-4">
                                    Server Banshee is not responding.
                                </div>
                            </li>
                            <li class="media">
                                <div class="notif-icon bg-success-4">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="media-body notif-text text-success-4">
                                    Backup completed successfully.
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-has-after" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="<?php echo base_url() ?>assets/img/default_avatar.png" alt="" class="user-img"> <?php echo $conta->usuarioNome; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <span class="dropdown-item">
                          <input readonly class="form-control" value="ID: <?php echo $conta->usuarioLogin; ?>" />
                        </span>
                        <a class="dropdown-item" href="<?php echo base_url('backoffice/perfil') ?>">
                            <i class="fa fa-user"></i> <span>Perfil</span></a>
                        </a>
                        <!-- <a class="dropdown-item" href="#">
                            <i class="fa fa-comment"></i> <span>Messages</span></a>
                        </a> -->
                        <!-- <a class="dropdown-item" href="#">
                            <i class="fa fa-cog"></i> <span>Settings</span></a>
                        </a> -->
                        <a class="dropdown-item" href="<?php echo base_url('backoffice/sair') ?>">
                            <i class="fa fa-sign-out"></i> <span>Logout</span></a>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /NAVBAR -->

        <div class="page-container">
        <div class="page-content">
            <!-- inject:SIDEBAR -->

            <div id="sidebar-main" class="sidebar sidebar-default">
              <div class="sidebar-content">
                  <ul class="navigation">
                      <li class="navigation-header">
                          <span>Main</span>
                          <i class="icon-menu"></i>
                      </li>

                      <li>
                          <a href="<?php echo base_url('backoffice') ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                      </li>

                       

                      <!-- <li>
                          <a href="<?php echo base_url('backoffice/extrato') ?>"><i class="fa fa-home"></i> <span>Extrato</span></a>
                      </li> -->

                      <!-- <li class="navigation-header">
                          <span>Relatorios</span>
                          <i class="icon-menu"></i>
                      </li> -->

                      <!-- <li>
                          <a href="index.html"><i class="fa fa-pencil"></i> <span>Relatorios</span></a>
                          <ul>
                              <li><a href="<?php echo base_url('backoffice/doacoes') ?>">Doações Feitas</a></li>
                              <li><a href="<?php echo base_url('backoffice/recebimentos') ?>">Doações Recebidas</a></li>
                               <li><a href="<?php echo base_url('backoffice/extrato') ?>">Extrato Geral</a></li>
                          </ul>
                      </li> -->

                      <li>
                          <a href="index.html"><i class="fa fa-th"></i> <span>Conta</span></a>
                          <ul>
                              <li><a href="<?php echo base_url('backoffice/pagamento') ?>">Pagamento</a></li>
                              <li><a href="<?php echo base_url('backoffice/senha') ?>">Senha</a></li>
                              <li><a href="<?php echo base_url('backoffice/perfil') ?>">Perfil</a></li>
                              <!-- <li><a href="components_badges.html">Labels &amp; Badges</a></li>
                              <li><a href="components_alerts.html">Alerts</a></li> -->
                          </ul>
                      </li>
                  </ul>
              </div>
            </div>

            <!-- inject:/SIDEBAR -->

