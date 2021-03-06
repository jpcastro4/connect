<!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="<?php echo base_url('geadmin');?>">Home</a><i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="<?php echo base_url('geadmin/leiloes/novo');?>">Leilões</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li class="active">
                    Adicionar novo leilão
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Begin: life time stats -->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gavel font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp bold uppercase">
                                Adicionar um novo leilão </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">


                                    <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN SAMPLE FORM PORTLET-->
                                        <div class="portlet light">
                                            <div class="portlet-body form">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="form-body">

                                                    <?php if(isset($message)) echo $message; ?>


                                                        <div class="form-group">
                                                            <label>Nome do Produto</label>
                                                            <input type="text" name="nome" class="form-control" value="" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Valor original / nas lojas <a href="javascript:void(0);" class="label label-danger img-rounded tooltips" data-container="body" data-placement="bottom" data-html="true" data-original-title="Coloque aqui o valor original das lojas"><i class="fa fa-question"></i></a></label>
                                                            <input type="text" name="original" class="form-control" placeholder="1.599.90" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Descrĩção</label>
                                                            <textarea name="descricao" id="editorck"></textarea>
                                                        </div

                                                        <div class="form-group">
                                                            <label>Data e hora do inicio do leilão <a href="javascript:void(0);" class="label label-danger img-rounded tooltips" data-container="body" data-placement="bottom" data-html="true" data-original-title="A data e hora que o leilão deve iniciar"><i class="fa fa-question"></i></a></label>
                                                            <input type="text" name="inicio" id="data_hora1" class="form-control" placeholder="<?php echo date('d/m/Y');?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Data e hora mínimo de termino <a href="javascript:void(0);" class="label label-danger img-rounded tooltips" data-container="body" data-placement="bottom" data-html="true" data-original-title="A data e hora que o leilão vai finalizar. Tenha em mente que a cada lance que o usuário der, acrescenta mais alguns segundos, podendo prolongar a data/hora de termino do leilão"><i class="fa fa-question"></i></a></label>
                                                            <input type="text" name="fim" id="data_hora2" class="form-control" placeholder="<?php echo date('d/m/Y', (time()+(60*60*24*7)));?>" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Lance máximo do rôbo <a href="javascript:void(0);" class="label label-danger img-rounded tooltips" data-container="body" data-placement="bottom" data-html="true" data-original-title="O rôbo dará lances automaticos até o valor que você configurar aqui. Depois que ultrapassar, o rôbo não dará mais lances automáticos."><i class="fa fa-question"></i></a></label>
                                                            <input type="text" name="robo" class="form-control" placeholder="20.00" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Fotos</label>
                                                            <input type="file" name="fotos[]" class="form-control" multiple required>
                                                        </div>

                                                        <div class="form-actions">
                                                        <input type="submit" name="submit" class="btn blue" value="Adicionar Leilão">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- END SAMPLE FORM PORTLET-->


                                        <!-- END SAMPLE FORM PORTLET-->
                                    </div>
                                    </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End: life time stats -->
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT -->
</div>