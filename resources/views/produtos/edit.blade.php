@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Atualize o Produto') }}</div>

                <div class="card-body">
                      <form action="{{route('produtos.update', $produto->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <h4>Dados do Produto</h4>
                        <hr>
                        <div class="form-group">
                            
                            
                            
                                <label for="descricao">Descrição:</label>
                                <input type="text" class="form-control" required value="{{$produto->descricao}}" name="descricao">
                           
                        </div>
                        <div class="row">
                            
                            <div class="col-md-3">
                           
                            <label for="preco">Preço: R$</label>
                            <input type="double" class="form-control" required value="{{$produto->preco}}" name="preco">
                        
                            </div>
                        
                            <div class="col-md-4">
                               
                            <label for="cor">Cor da embalagem:</label>
                            <input type="text" name="cor" class="form-control" required value="{{$produto->cor}}">
                            </div>
                            <div class="col-md-3">
                                <label for="peso">Peso:</label>
                                <input type="double", name="peso" value="{{$produto->peso}}" required class="form-control">
                            </div>
                            
                            </div>
                            <br>
                            <h4>Marca do Produto</h4>
                            <hr>
                            <label for="marca_id">Selecione a marca deste produto: </label>
                            <select name="marca_id" class="form-group" required>
                                @foreach ($marcas as $marca)
                                <option value="{{$marca->id}}"
                                    {{(isset($produto->marca_id) && $produto->marca_id == $marca->marca_id ? 'selected': '')}}>{{$marca->nome}}</option>
                                    
                                @endforeach
                            </select>
                            <br>
                            <button type="submit" class="btn btn-success">Atualizar!</button>
                        </div>
                      </form>

                </div>
            </div>
        </div>
        <br>
        <p><a href="{{ url()->previous()}}" class="btn btn-info">Voltar</a></p>
    </div>
    
</div>
@endsection
