@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __("Produtos da marca") }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        
                   
                                    <h4>{{$marca->nome}} </h4>
                                   
                                    <hr>
                                    
                                    @foreach ($marca->produto as $produto)
                                    <p>{{$produto->descricao}}</p>
                                    
                                    @endforeach
                                        
                                        
                                        
                                            
                                         
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
