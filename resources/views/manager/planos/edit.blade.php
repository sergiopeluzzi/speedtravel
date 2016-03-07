@extends('manager.index')

@section('conteudo')
    <section>
        <div class="container">
            <h2 class="heading heading--start">Planos | Edição ({{ $plano->nome }})</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-wrapper">
                        {!! Form::model($plano, ['route' => ['manager.planos.update', $plano->id], 'method' => 'put', 'class' => 'contact']) !!}
                        <div class="form-group col-md-10" align="left">
                            {!! Form::label('categoria', 'Categoria') !!}
                            {!! Form::select('categoria', ['Internet' => 'Internet', 'TV' => 'TV', 'Telefonia' => 'Telefonia'], null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-10" align="left">
                            {!! Form::label('nome', 'Nome') !!}
                            {!! Form::text('nome', null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-10" align="left">
                            {!! Form::label('descricao', 'Descrição') !!}
                            {!! Form::textArea('descricao', null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-10" align="left">
                            {!! Form::label('cidades', 'Cidades') !!}
                            {!! Form::select('cidades[]', $cidades, $plano->cidades->lists('id')->all(), ['id' => 'cidades', 'class' => 'contact__field', 'multiple', 'required']) !!}
                        </div>
                        <div class="form-group col-md-4" align="left">
                            {!! Form::label('valor', 'Valor') !!}
                            {!! Form::text('valor', null, ['class' => 'contact__field', 'required']) !!}
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
                                <a class="btn btn-danger btn--minimal" href="{{ route('manager.planos.index') }}">Voltar</a>
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
    <script type="text/javascript" >
        $('#cidades').select2();
    </script>
@stop