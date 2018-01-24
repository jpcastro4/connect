

            <!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <?php if($this->native_session->get_flashdata('message')) echo '<p class="alert alert-success text-center w-100">'. $this->native_session->get_flashdata('message').'</p>' ?>
                        <?php if($this->native_session->get_flashdata('message_error')) echo '<p class="alert alert-danger text-center w-100">'. $this->native_session->get_flashdata('message_error').'</p>' ?>
                    </div>
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
                        <div class="col-12 col-md-4 col-lg-6">
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
                                    <h5 class="card-title">Posicionar</h5>
                                    <button class="btn btn-warning btn-large text-center" type="button" data-numdoacoes="1" id="posicionar">Aguarde liberação <i class="fa fa-spinner fa-spin"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="card-block" style="height:110px;max-height:110px">
                                    <!-- <h5 class="card-title">Avisos</h5> -->
                                    <!-- <p>Dica: cada novo posicionamento te dá direito a mais 3 doações.</p> -->
                                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                    <!-- Connect Height 100 -->
                                    <ins class="adsbygoogle"
                                        style="display:inline-block;width:320px;height:100px"
                                        data-ad-client="ca-pub-3215674587886121"
                                        data-ad-slot="2727335386"></ins>
                                    <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row py-3">
                        <div class="col-12 mx-auto" style="height:110px" >
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

                    <div class="row margin-top-10">
                        <div class="col-12 col-md-6">
                            <div class="card" >
                                <div class="card-block" style="overflow:hidden">
                                    <h5 class="card-title">Pagamentos</h5>
                                    <table class="table table-stripped table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <td>#Cod</td>
                                                <td>Recebedor</td>
                                                <td>Status</td>
                                                <!-- <td>Valor</td> -->
                                                <td>Tempo</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php if(!empty($doacoes)): ?>
                                            <?php foreach($doacoes as $doacao): ?>
                                            <tr>
                                                <td><small><a href="#"><?php echo $doacao->doacaoCod ?></a></small></td>
                                                <td><?php echo $this->backoffice_model->posicUser($doacao->posicUsuarioRecebedor)->usuarioNome; ?></td>
                                                <td>
                                                <?php $this->backoffice_model->statusDoacao($doacao->doacaoStatus) ?>
                                                </td>
                                                <!-- <td>
                                                    $<?php echo $doacao->doacaoValor ?>
                                                </td> -->
                                             
                                                <td>
                                                    <span data-countdown="<?php echo date('Y/m/d H:i:s', strtotime($doacao->doacaoCronometro) ) ?>"></span>
                                                </td>
                                                <td>
                                                    <button class="btn btn-small btn-primary" data-toggle="modal" data-target="#comprovante" data-doacao="<?php echo $doacao->doacaoID ?>">Enviar comprovante</button>                                                    
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

                        <div class="modal fade" id="comprovante">
                            <div class="modal-dialog modal-sm" role="document">
                                <form action="<?php echo base_url('form/comprovante') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Enviar comprovante</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label class="custom-file">
                                            <input type="file" id="file" name="comprovante" class="custom-file-input" required>
                                            <span class="custom-file-control">Clique aqui para enviar</span>
                                        </label>
                                        <input name="doacaoID" type="hidden" />
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Recebimentos</h5>
                                    <table class="table table-stripped table-responsive w-100 table-hover">
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
                                        <?php foreach($recebimentos as $receb): ?>
                                        <tr>
                                            <td><small><a href="<?php if($receb->doacaoStatus == 1) echo base_url('uploads/comprovantes/').$receb->doacaoComprovante ;?>" <?php if($receb->doacaoStatus == 1) echo 'download="'.$receb->doacaoComprovante.'"' ;?>  target="_blank"><?php echo $receb->doacaoCod ?></a></small></td>
                                            <td><?php echo $this->backoffice_model->posicUser($receb->posicUsuarioDoador)->usuarioNome; ?></td>
                                            <td>
                                                <?php $this->backoffice_model->statusDoacao($receb->doacaoStatus) ?> 
                                            </td>
                                            <td>
                                                $<?php echo $receb->doacaoValor ?>
                                            </td>
                                            <td>
                                                <span data-countdown="<?php echo date('Y/m/d H:i:s', strtotime($receb->doacaoCronometro) ) ?>"></span>
                                            </td>
                                            
                                            <td>
                                                <?php 
                                                if($receb->doacaoStatus == 1){
                                                    echo '<button class="btn btn-small btn-success" id="aceitar" data-doacao="'.$receb->doacaoID .'" >Confirmar doação</button>';
                                                }
                                                elseif( strtotime($receb->doacaoCronometro) - strtotime("now") < 0 AND $receb->doacaoStatus == 0 ){
                                                    echo '<button class="btn btn-small btn-danger" id="retirar" data-doacao="'.$receb->doacaoID .'" >Retirar doador</button>';
                                                }                                                
                                                ?>
                                            </td>
                                        </tr>
                                        <tr class="sub-panel" id="<?php echo $receb->doacaoCod ?>" style="display:none">
                                            <td>
                                                <button class="btn btn-primary">Enviar comprovante</button>                                                    
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

                     
                </div>
            </div>
            <!-- /PAGE CONTENT -->
        </div>
    </div>