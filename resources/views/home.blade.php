@extends('layout.index')
@section('titulo', 'Cadastro de Demandas')
@section('conteudo')
    <main>
    <!-- Flash Message -->
        @if(Session::has('message'))
            @if(Session::get('message') == "Erro ao adicionar funcionário!")
                <p class="alert alert-danger text-center mt-2 alerta" role="alert">{{ Session::get('message') }}</p>
            @elseif(Session::get('message') == "Erro ao atualizar funcionário!")
                <p class="alert alert-danger text-center mt-2 alerta" role="alert">{{ Session::get('message') }}</p>
            @elseif(Session::get('message') == "Erro ao deletar funcionário!")
            <p class="alert alert-danger text-center mt-2 alerta" role="alert">{{ Session::get('message') }}</p>
            @else
                <p class="alert alert-success text-center mt-2 alerta" role="alert">{{ Session::get('message') }}</p>
            @endif
        @endif

    <!-- Texto -->
        <div class="card border-light">
            <div class="card-body">
                <section id="titulo">
                <h1 class="text-center pt-5">Sistema de Cadastro de Demandas</h1>
                <p class="text-center text-secondary pb-5">Aqui você pode pesquisar as demandas já cadastradas</p>
                </section>
            </div>
        </div>

    <!-- Tabela -->
        <div class="table-responsive">
            <table class="table text-center" id="tabela-principal">
                <thead>
                    <tr>
                    <th style="display: none">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data da Visita</th>
                    <th scope="col">Tipo de Demanda</th>
                    <th scope="col">Região Administrativa</th>
                    <th scope="col">Sei</th>
                    <th scope="col">Data de Conclusão</th>
                    <th scope="col">Andamento</th>
                    <th style="col">Observação</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $key)
                        <tr>
                            <td style="display: none">{{$key->id}}</td>
                            <td>{{$key->nome}}</td>
                            <td>{{$key->telefone}}</td>
                            <td>{{$key->datavisita}}</td>
                            <td>{{$key->demanda}}</td>
                            <td>{{$key->cidade}}</td>
                            <td>{{$key->sei}}</td>
                            <td>{{$key->dataconclusao}}</td>
                            <td>{{$key->andamento}}</td>
                            <td>{{$key->observacoes}}</td>
                            <td>
                                <a href= "{{ route('detalhes.demanda', $key->id) }}" type="button"  title="Editar" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                <a href= "{{ route('excluir', $key->id) }}" type="button"  title="Excluir" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>


@endsection