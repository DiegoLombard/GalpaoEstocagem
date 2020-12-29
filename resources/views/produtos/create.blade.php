@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Cadastre o Produto') }}</div>

                <div class="card-body">
                      <form action="{{route('produtos.store')}}" method="POST">
                        @csrf
                        <h4>Dados do Produto</h4>
                        <hr>
                        <div class="form-group">
                            
                            
                            
                                <label for="descricao">Descrição:</label>
                                <input type="text" class="form-control" required placeholder="Descrição do Produto" name="descricao">
                           
                        </div>
                        <div class="row">
                            
                            <div class="col-md-3">
                           
                            <label for="preco">Preço: R$</label>
                            <input type="double" class="form-control" required placeholder="5,45" name="preco">
                        
                            </div>
                        
                            <div class="col-md-4">
                               
                            <label for="cor">Cor da embalagem:</label>
                            <input type="text" name="cor" class="form-control" required placeholder="Verde">
                            </div>
                            <div class="col-md-3">
                                <label for="peso">Peso:</label>
                                <input type="double", name="peso" placeholder="3.750" required class="form-control">
                            </div>
                            </div>
                            <br>
                            <h4>Marca do Produto</h4>
                        <hr>
                        <div class="form-group">
                            <label for="marca_id">Selecione a Marca deste produto: </label>
                            <select name="marca_id" required class="form-group">
                                @foreach ($marcas as $marca)
                                <option value="{{$marca->id}}">{{$marca->nome}}</option>
                                    
                                @endforeach
                            </select>
                        </div>
                            <br>
                            <button type="submit" class="btn btn-success">Enviar!</button>
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
