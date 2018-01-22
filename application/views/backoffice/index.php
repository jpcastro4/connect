

            <!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="page-title">Dashboard <small>Control Panel</small></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="widget-overview bg-primary-1">
                                <div class="inner">
                                    <h2>$<?php echo $conta->usuarioSaldoRecebido ?></h2>
                                    <p>Recebido</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-dollar"></i>
                                </div>

                                <!-- <div class="details bg-primary-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="widget-overview bg-info-1">
                                <div class="inner">
                                    <h2><?php echo $conta->usuarioNivel ?></h2>
                                    <p>Nível</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-signal"></i>
                                </div>

                                <!-- <div class="details bg-info-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="widget-overview bg-success-1">
                                <div class="inner">
                                    <h2>$<?php echo $conta->usuarioSaldoDoado ?></h2>
                                    <p>Total doado</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-money"></i>
                                </div>

                                <!-- <div class="details bg-success-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="widget-overview bg-danger-1">
                                <div class="inner">
                                    <h2><?php echo $conta->usuarioNumIndicados ?></h2>
                                    <p>Indicados</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-pie-chart"></i>
                                </div>

                                <!-- <div class="details bg-danger-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Link de indicação</h5>

                                     <input readonly class="form-control" value="<?php echo base_url('cadastro/').$conta->usuarioLogin ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Comprar Posicionamento</h5>
                                    <button class="btn btn-warning btn-large text-center" type="button" data-numdoacoes="1" id="abreposicao">Abrir posição</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Avisos</h5>
                                    <p>Dica: cada novo posicionamento te dá direito a mais 3 doações.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div> 

                    <div class="row margin-top-10">
                        
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Pagamentos</h5>
                                    <table class="table table-stripped table-hover">
                                        <thead>
                                            <tr>
                                                <td>#Cod</td>
                                                <td>Recebedor</td>
                                                <td>Status</td>
                                                <td>Valor</td>
                                                <td>Tempo</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php if(!empty($doacoes)): ?>
                                            <?php foreach($doacoes as $doacao): ?>
                                            <tr>
                                                <td><a href="#"><?php echo $receb->doacaoCod ?></a></td>
                                                <td><?php echo $doacao->doadorNome ?></td>
                                                <td>
                                                    <badge class="badge badge-warning"><?php echo $doacao->doacaoStatus ?></badge>
                                                </td>
                                                <td>
                                                    $<?php echo $doacao->doacaoValor ?>
                                                </td>
                                                <td>
                                                    <span data-countdown="<?php echo date('Y/m/d H:i:s', strtotime($doacao->doacaoCronometro) ) ?>"></span>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                             <td>Não há pagamentos</td> 
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Recebimentos</h5>
                                    <table class="table table-stripped table-hover">
                                        <thead>
                                            <tr>
                                                <td>#Cod</td>
                                                <td>Doador</td>
                                                <td>Status</td>
                                                <td>Valor</td>
                                                <td>Tempo</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php if(!empty($recebimentos)): ?>
                                        <?php foreach($recebimentos as $receb):  ?>
                                        <tr>
                                            <td><a href="#"><?php echo $receb->doacaoCod ?></a></td>
                                            <td><?php echo $receb->usuarioNome ?></td>
                                            <td>
                                                <badge class="badge badge-warning"><?php echo $receb->doacaoStatus ?></badge>
                                            </td>
                                            <td>
                                                $<?php echo $receb->doacaoValor ?>
                                            </td>
                                            <td>
                                                <span data-countdown="<?php echo date('Y/m/d H:i:s', strtotime($receb->doacaoCronometro) ) ?>"></span>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <td>Não há recebimentos</td> 
                                    <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Recent Members</h5>

                                    <ul class="recent-members">
                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div> -->
                </div>
            </div>
            <!-- /PAGE CONTENT -->
        </div>
    </div>