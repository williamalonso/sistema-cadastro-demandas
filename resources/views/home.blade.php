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
        <div class="table-responsive alinhar">
            <table class="table text-center display" id="tabela-principal">
                <thead>
                    <tr>
                    <th style="display: none">ID</th>
                    <th scope="col">Nome</th>
                    <th style="display: none">Telefone</th>
                    <th scope="col">Data da Visita</th>
                    <th scope="col">Tipo de Demanda</th>
                    <th scope="col">Região Administrativa</th>
                    <th style="display: none">Sei</th>
                    <th scope="col">Data de Conclusão</th>
                    <th style="display: none">Andamento</th>
                    <th style="display: none">Observação</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $key)
                        <tr>
                            <td style="display: none">{{$key->id}}</td>
                            <td>
                                @if ( ($key->nome) != NULL) 
                                    {{$key->nome}}
                                @else - @endif
                            </td>
                            <td style="display: none">{{$key->telefone}}</td>
                            <td>
                                @if ( ($key->datavisita) != NULL) 
                                    {{ date( 'd/m/Y' , strtotime( $key->datavisita ))}}
                                @else - @endif
                            </td>
                            <td>
                                @if ( ($key->demanda) != NULL) 
                                    {{$key->demanda}}
                                @else - @endif    
                            </td>
                            <td>
                                @if ( ($key->cidade) != NULL) 
                                    {{$key->cidade}}
                                @else - @endif  
                            </td>
                            <td style="display: none">{{$key->sei}}</td>
                            <td>
                                @if ( ($key->dataconclusao) != NULL) 
                                    {{ date( 'd/m/Y' , strtotime( $key->dataconclusao ))}}
                                @else - @endif
                            </td>
                            <td style="display: none">{{$key->andamento}}</td>
                            <td style="display: none">{{$key->observacoes}}</td>
                            <td>
                                <a href= "{{ route('detalhes.demanda', $key->id) }}" type="button"  title="Editar" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                <a href= "{{ route('visualizar.demanda', $key->id) }}" type="button"  title="Visualizar" class="btn btn-warning"><i class="fas fa-search cor-icone"></i></a>
                                <a href= "{{ route('excluir', $key->id) }}" type="button"  title="Excluir" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    

@endsection