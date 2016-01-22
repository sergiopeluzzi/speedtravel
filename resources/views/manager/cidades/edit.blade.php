@extends('manager.index')

@section('conteudo')
    <section>
        <div class="container">
            <h2 class="heading heading--start">Cidades | Edição ({{ $cidade->cidade }})</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-wrapper">
                        {!! Form::model($cidade, ['route' => ['manager.cidades.update', $cidade->id], 'method' => 'put', 'class' => 'contact']) !!}
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
                                <button class="btn btn--decorated btn-primary btn-submit" type="submit">Atualizar</button>
                                <a class="btn btn--decorated btn-danger" href="{{ route('manager.cidades.index') }}">Voltar</a>
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