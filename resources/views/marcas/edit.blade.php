@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Atualize a Marca') }}</div>

                <div class="card-body">
                      <form action="{{route('marcas.update', $marca->id)}}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <h4>Dados da Marca</h4>
                        <hr>
                        <div class="form-group">
                            
                            
                            
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" required value="{{$marca->nome}}" name="nome">
                           
                        </div>
                        
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
