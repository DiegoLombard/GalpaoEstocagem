@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Detalhes do Produto') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                        
                   
                                    <h4>Detalhes do Produto</h4>
                                    <br>
                                    
                                        <p>Descricao: {{$produto->descricao}}</p>
                                        <p>Preco: R$ {{number_format($produto->preco,2,',', '.')}}</p>
                                        <p>Cor: {{$produto->cor}}</p>
                                        <p>Peso: {{number_format($produto->peso, 3, ',','.')}} KG</p>
                                        
                                            
                                         
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
