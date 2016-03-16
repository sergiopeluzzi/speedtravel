@extends('manager.index')

@section('conteudo')
    <section>
        <div class="container col-md-12">
            <h2 class="heading heading--start">Planos | Telefonia | Lista</h2>

            @include('toast::messages-jquery')

            <div class="table">
                <table class="table table-bordered table--wide table-present">
                    <colgroup class="col-sm-width">
                    <colgroup class="col-sm-width">
                    <colgroup class="col-sm-width">
                    <colgroup class="col-sm-width">
                    <colgroup class="col-sm-width">
                    <colgroup class="col-sm-width">

                        <thead>
                            <tr class="bg-primary">
                                <th class="text-center">#</th>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Descrição</th>
                                <th class="text-center">Minutos</th>
                                <th class="text-center">$ Residencial</th>
                                <th class="text-center">$ Empresarial</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($telefonias as $telefonia)
                            <tr @if($telefonia->ativo == 0) class="bg-danger" @endif>
                                <td class="text-center">{{ $telefonia->id }}</td>
                                <td>{{ $telefonia->nome }}</td>
                                <td>{{ $telefonia->descricao }}</td>
                                <td>{{ $telefonia->minutos }}</td>
                                <td class="text-center">R$ {{ number_format($telefonia->valorresidencial, 2, ',', '.') }}</td>
                                <td class="text-center">R$ {{ number_format($telefonia->valorempresarial, 2, ',', '.') }}</td>
                                <td class="text-center">
                                    <a class="btn btn-warning btn-sm" href="{{ route('manager.planos.telefonia.edit', ['id' => $telefonia->id]) }}">Editar</a>
                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete" href="#" data-href="{{ route('manager.planos.telefonia.destroy', ['id' => $telefonia->id]) }}">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>

            </div>
            {!! $telefonias->links() !!}
            <div class="col-md-12">
                <div class="btn--minimal-container-primary btn-present">
                    <a class="btn btn-primary btn--minimal" href="{{ route('manager.planos.telefonia.create') }}">Adicionar</a>
                </div>
            </div>
            <!-- end col -->

            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-center color-danger">
                            <h3>Confirmação de Exclusão</h3>
                        </div>
                        <div class="modal-body text-center ">
                            Tem certeza que deseja excluir este plano?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>
                            <a class="btn btn-danger btn-ok">SIM</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end container -->
    </section>
@stop

@section('scripts')
    <!-- Script q atribui ao href a registro a ser deletado em questão -->
    <script language="JavaScript" type="text/javascript">
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
@stop