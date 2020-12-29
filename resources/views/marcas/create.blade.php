@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Cadastre a Marca') }}</div>

                <div class="card-body">
                      <form action="{{route('marcas.store')}}" method="POST">
                        @csrf
                        <h4>Dados do Produto</h4>
                        <hr>
                        <div class="form-group">
                            
                            
                            
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" required placeholder="Nome da marca" name="nome">
                           
                        </div>
                        
                            <button type="submit" class="btn btn-success">Enviar!</button>
                        
                      </form>

                </div>
            </div>
        </div>
        <br>
        <p><a href="{{ url()->previous()}}" class="btn btn-info">Voltar</a></p>
    </div>
    
</div>
@endsection
