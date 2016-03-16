@extends('manager.index')

@section('conteudo')
    <section>
        <div class="container">
            <h2 class="heading heading--start">Planos | Internet | Cadastro</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-wrapper">
                        {!! Form::open(['route' => 'manager.planos.internet.store', 'method' => 'post', 'class' => 'contact', 'id' => 'crt-internet-frm']) !!}
                        <div class="form-group col-md-4" align="left">
                            {!! Form::label('ativo', 'Status') !!}
                            {!! Form::select('ativo', ['1' => 'Ativo', '0' => 'Inativo'], null, ['id' => 'ativo', 'class' => 'contact__field']) !!}
                        </div>
                        <div class="form-group col-md-10" align="left">
                            <br>
                            {!! Form::label('nome', 'Nome') !!}
                            {!! Form::text('nome', null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-10" align="left">
                            {!! Form::label('descricao', 'Descrição') !!}
                            {!! Form::textArea('descricao', null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-5" align="left">
                            {!! Form::label('download', 'Tx. Download') !!}
                            {!! Form::text('download', null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-5" align="left">
                            {!! Form::label('upload', 'Tx. Upload') !!}
                            {!! Form::text('upload', null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-5" align="left">
                            {!! Form::label('valorresidencial', 'Valor Residencial') !!}
                            {!! Form::text('valorresidencial', null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-5" align="left">
                            {!! Form::label('valorempresarial', 'Valor Empresarial') !!}
                            {!! Form::text('valorempresarial', null, ['class' => 'contact__field', 'required']) !!}
                        </div>
                        <div class="form-group col-md-10" align="left">
                            {!! Form::label('cidades', 'Cidades') !!}
                            {!! Form::select('cidades[]', $cidades, null, ['id' => 'cidades', 'class' => 'contact__field', 'multiple', 'required']) !!}
                        </div>

                        <div class="form-group col-md-12" align="left">
                            <br>
                            <br>
                            <div class="btn--minimal-container-primary btn-present">
                                <button class="btn btn-primary btn--minimal" type="submit">Salvar</button>
                            </div>
                            <div class="btn--minimal-container-danger btn-present">
                                <a class="btn btn-danger btn--minimal"
                                   href="{{ route('manager.planos.internet.index') }}">Voltar</a>
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
    <script type="text/javascript">
        $('#ativo').select2();
        $('#cidades').select2();
    </script>
@stop