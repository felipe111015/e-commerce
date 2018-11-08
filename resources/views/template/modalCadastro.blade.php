<!--------------- Modal Cadastro ---------->

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Registrar-se">Registrar-se!</h5>
                        <button type="button" id="fechar" class="Confirmar" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="nome" placeholder="Nome...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Sobrenome" class="col-sm-2 col-form-label">Sobrenome:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="Sobrenome" placeholder="Sobrenome...">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="email" placeholder="exemplo@exemplo.com.br...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dataNascimento" class="col-sm-2 col-form-label">Data Nasc:</label>
                                <div class="col-sm-12">
                                    <input name="date" type="text" class="form-control" id="dataNascimento" data-mask="00/00/0000"
                                           placeholder="Nascimento">

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="salvar" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
