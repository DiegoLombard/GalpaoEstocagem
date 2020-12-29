@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Marcas') }}</div>

                <div class="card-body">
                        <form  action="{{route('marcas.buscar')}}" >
                            @csrf
                            <div class="input-group">
                                <input type="text" name="buscar" class="form-control" placeholder="Localizar Marca por Nome">
                                <span class="input-group-btn"> <button class="btn btn-light">Buscar</button></span>
                            </div>
                        </form>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marcas as $marca)
                                    <tr>
                                        <td>{{$marca->nome}}</td>
                                       
                                        <td>
                                            <a href="{{route('marcas.produtos', $marca->id)}}" class="btn btn-light btn-sm">Produtos</a>
                                            <a href="{{route('marcas.edit', $marca->id)}}}}" class="btn btn-secondary btn-sm">Editar</a>
                                            <a href="{{route('marcas.delete',$marca->id)}}}}" class="btn btn-danger btn-sm">Deletar</a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                        <a href=" {{route('marcas.create')}}"><button class="btn btn-success">Inserir Marca</button></a>
                </div>
               
            </div>
            <br>
            <p><a href="{{ url()->previous()}}" class="btn btn-info">Voltar</a></p>
        </div>
        {{ $marcas->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
