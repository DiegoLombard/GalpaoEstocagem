@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Deletar Produto') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        
                   
                                    <h3>Deletar Produto</h3>
                                   
                                    <hr>
                                    
                                    <p style="color:red" > Tem certeza que deseja deletar <strong >{{$produto->descricao}}?</strong></p>
                                    <a href="{{route('produtos.destroy', $produto->id)}}"><button class="btn btn-danger">Deletar</button></a>
                                        
                                        
                                            
                                         
                        </div>
                    </div>   
                                    
                               

                        
                        
                </div>
               
            </div>
            <br>
            <p><a href="{{ url()->previous()}}" class="btn btn-info">Voltar</a></p>
        </div>
    </div>
</div>
@endsection
