@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Produtos') }}</div>
                    
                <div class="card-body">
                    <form  action="{{route('produtos.buscar')}}" >
                        @csrf
                        <div class="input-group">
                            <input type="text" name="buscar" class="form-control" placeholder="Localizar Produto por Nome">
                            <span class="input-group-btn"> <button class="btn btn-light">Buscar</button></span>
                        </div>
                    </form>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Marca</th>
                                    <th>Preço</th>
                                    <th>Cor da embalagem</th>
                                    <th>Peso</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produtos as $produto)
                                    <tr>
                                        <td>{{$produto->descricao}}</td>
                                        <td>{{$produto->marca->nome}}</td>
                                        <td>R$ {{number_format($produto->preco,2,',','.')}}</td>
                                        <td>{{$produto->cor}}</td>
                                        <td>{{number_format($produto->peso,3,',','.')}} Kg</td>
                                        <td>
                                            <a href="{{route('produtos.exibir', $produto->id)}}" class="btn btn-light btn-sm">Detalhes</a>
                                            <a href="{{route('produtos.edit', $produto->id)}}}}" class="btn btn-secondary btn-sm">Editar</a>
                                            <a href="{{route('produtos.delete',$produto->id)}}}}" class="btn btn-danger btn-sm">Deletar</a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                        <a href=" {{route('produtos.create')}}"><button class="btn btn-success">Inserir Produto</button></a>
                </div>
               
            </div>
            <br>
            <p><a href="{{ url()->previous()}}" class="btn btn-info">Voltar</a></p>
        </div>
        {{ $produtos->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
