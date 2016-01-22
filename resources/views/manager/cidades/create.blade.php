@extends('manager.index')

@section('conteudo')
    <section>
        <div class="container">
            <h2 class="heading heading--start">Cidades | Cadastro</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-wrapper">
                        {!! Form::open(['route' => 'manager.cidades.store', 'method' => 'post', 'class' => 'contact', 'id' => 'crt-cidades-frm']) !!}
                            <div class="form-group col-md-8" align="left">
                                {!! Form::label('cidade', 'Cidade') !!}
                                {!! Form::text('cidade', null, ['class' => 'contact__field', 'required']) !!}
                            </div>
                            <div class="form-group col-md-8" align="left">
                                {!! Form::label('estado', 'Estado') !!}
                                {!! Form::text('estado', null, ['class' => 'contact__field', 'required']) !!}
                            </div>
                            <div class="form-group col-md-4" align="left">
                                {!! Form::label('uf', 'UF') !!}
                                {!! Form::text('uf', null, ['class' => 'contact__field', 'minlength' => '2', 'maxlength' => '2', 'required']) !!}
                            </div>
                            <div class="form-group col-md-4" align="left">
                                {!! Form::label('ativo', 'Status') !!}
                                {!! Form::select('ativo', ['1' => 'Ativo', '0' => 'Inativo'], null, ['class' => 'contact__field']) !!}
                            </div>
                            <div class="form-group col-md-12" align="left">
                                <div class="btn--minimal-container-primary btn-present">
                                    <button class="btn btn-primary btn--minimal" type="submit">Salvar</button>
                                </div>
                                <div class="btn--minimal-container-danger btn-present">
                                    <a class="btn btn-danger btn--minimal" href="{{ route('manager.cidades.index') }}">Voltar</a>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div><!-- end wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@stop

@section('scripts')

@stop