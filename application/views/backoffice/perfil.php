            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-12 col-md-6 mx-auto">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Perfil</h5>

                                    <form action="perfil" method="post" >
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome" type="text" name="usuarioNome" value="<?php echo $conta->usuarioNome ?>" required />
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Sobrenome" type="text" name="usuarioSobrenome" value="<?php echo $conta->usuarioSobrenome ?>" required />
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefone" readonly type="text" name="usuarioTelefone" value="<?php echo $conta->usuarioTelefone ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Telefone Secundário" type="text" name="usuarioTelefoneSec" value="<?php if(!empty($conta->usuarioTelefoneSec)) echo $conta->usuarioTelefoneSec; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="text" name="usuarioEmail" value="<?php echo $conta->usuarioEmail ?>" required />
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
             
        </div>
    </div>