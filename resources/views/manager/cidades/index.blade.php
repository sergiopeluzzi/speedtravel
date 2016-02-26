@extends('manager.index')

@section('conteudo')
    <section>
        <div class="container col-md-12">
            <h2 class="heading heading--start">Cidades | Lista</h2>

            @include('toast::messages-jquery')

            <div class="table-responsive">
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
                                <th class="text-center">Cidade</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">UF</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($cidades as $cidade)
                            <tr @if($cidade->ativo == 0) class="bg-danger" @endif>
                                <td class="text-center">{{ $cidade->id }}</td>
                                <td>{{ $cidade->cidade }}</td>
                                <td>{{ $cidade->estado }}</td>
                                <td class="text-center">{{ $cidade->uf }}</td>
                                <td class="text-center">
                                    <a class="btn btn-warning btn-sm" href="{{ route('manager.cidades.edit', ['id' => $cidade->id]) }}">Editar</a>
                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete" href="#" data-href="{{ route('manager.cidades.destroy', ['id' => $cidade->id]) }}">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>

            </div>
            {!! $cidades->links() !!}
            <div class="col-md-12">
                <div class="btn--minimal-container-primary btn-present">
                    <a class="btn btn-primary btn--minimal" href="{{ route('manager.cidades.create') }}">Adicionar</a>
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
                            Tem certeza que deseja excluir esta cidade?
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