<form name="cadastro" action="http://localhost:8080/contact/adicionaAluno" method="POST">
    <div class="form-group row">
        <label class="col-4 col-form-label" for="nome">Nome</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="nome" name="nome" placeholder="Informe seu nome completo" type="text" class="form-control"
                    aria-describedby="nomeHelpBlock" required="required">
            </div>

        </div>
    </div>
    <div class="form-group row">
        <label for="idade" class="col-4 col-form-label">Idade</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-bullseye"></i>
                    </div>
                </div>
                <input id="idade" name="idade" placeholder="Informe sua idade" type="text" required="required"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Sexo</label>
        <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="masc">
                <label for="radio_0" class="custom-control-label">Masculino</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="fem">
                <label for="radio_1" class="custom-control-label">Feminino</label>
            </div>
        </div>
    </div>
    <form _msthidden="2">
        <div class="form-group row" _msthidden="1">
            <label class="col-4 col-form-label" _msthash="183644" _msttexthash="58058" _msthidden="1"
                for="email">Email</label>
            <div class="col-8">
                <div class="input-group" _msthidden="1">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-at"></i>
                        </div>
                    </div>
                    <input id="email" name="email" placeholder="Digite seu email" type="text" class="form-control"
                        _msthidden="A" _msthiddenattr="71279" _mstplaceholder="257595" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row" _msthidden="1">
            <label for="text" class="col-4 col-form-label" _msthash="1135394" _msttexthash="205101"
                _msthidden="1">Comentários</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-align-justify"></i>
                        </div>
                    </div>
                    <input id="text" name="text" placeholder="Deixe aqui seu comentário para nos ajudar!" type="text"
                        class="form-control" _msthidden="A" _msthiddenattr="null" _mstplaceholder="1227616">
                </div>
            </div>
        </div>
        <div class="form-group row" _msthidden="1">
            <div class="offset-4 col-8" _msthidden="1">
                <button name="submit" type="submit" class="btn btn-primary" _msthash="1549405" _msttexthash="78468"
                    _msthidden="1">Submit</button>
            </div>
        </div>
    </form>