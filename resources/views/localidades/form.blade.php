<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group col-xs-6 col-sm-6 col-md-6">
            <strong>Nome:</strong>
            {!! Form::text('nome', null, array('placeholder' => 'Nome','class' => 'form-control','required')) !!}
        </div>

        <div class="form-group col-xs-6 col-sm-6 col-md-6">
            <strong>Email:</strong>
            {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control','required')) !!}
        </div>
        <div class="form-group col-xs-4 col-sm-4 col-md-4">
            <strong>Telefone:</strong>
            {!! Form::text('telefone', null, array('placeholder' => 'Telefone','class' => 'form-control','id'=>'telefone','required')) !!}
        </div>
        <div class="form-group col-xs-4 col-sm-4 col-md-4">
            <strong>Celular:</strong>
            {!! Form::text('celular', null, array('placeholder' => 'Celular','class' => 'form-control','id'=>'celular','required')) !!}
        </div>
        <div class="form-group col-xs-4 col-sm-4 col-md-4">
            <strong>Data Nascimento:</strong>
            {!! Form::date('nascimento', null, array('placeholder' => 'Data Nascimento','class' => 'form-control','required')) !!}
        </div>

        <div class="form-group col-xs-6 col-sm-6 col-md-6">
            <strong>Cep:</strong>
            {!! Form::text('cep', null, array('placeholder' => 'Cep','class' => 'form-control','id'=>'cep','required')) !!}
        </div>

        <div class="form-group col-xs-6 col-sm-6 col-md-6">
            <strong>Estado:</strong>
            {!! Form::text('uf', null, array('placeholder' => 'Uf','class' => 'form-control','id'=>'uf','required')) !!}
        </div>

        <div class="form-group col-xs-6 col-sm-6 col-md-6">
            <strong>Cidade:</strong>
            {!! Form::text('cidade', null, array('placeholder' => 'Cidade','class' => 'form-control','id'=>'cidade','required')) !!}
        </div>

        <div class="form-group col-xs-6 col-sm-6 col-md-6">
            <strong>Bairro:</strong>
            {!! Form::text('bairro', null, array('placeholder' => 'Bairro','class' => 'form-control','id'=>'bairro','required')) !!}
        </div>

        <div class="form-group col-xs-6 col-sm-6 col-md-6">
            <strong>Endereco:</strong>
            {!! Form::text('endereco', null, array('placeholder' => 'Endereco','class' => 'form-control','id' =>'endereco','required')) !!}
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

    </div>
    <br>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
